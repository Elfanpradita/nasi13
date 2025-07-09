<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AbsensiSiswaResource\Pages;
use App\Filament\Admin\Resources\AbsensiSiswaResource\RelationManagers;
use App\Models\AbsensiSiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Facades\Filament;

class AbsensiSiswaResource extends Resource
{
    protected static ?string $model = AbsensiSiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Elearning Management";

    protected static ?string $navigationLabel = 'Absensi Siswa';

    protected static ?string $modelLabel = 'Absensi Siswa';

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        $panel = Filament::getCurrentPanel();
        if ($panel?->getId() === 'edu') {
            $query->where('murid_id', auth()->user()->id);
        }
        return $query;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kegiatan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('murid_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\TextInput::make('keterangan')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kegiatan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('murid_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbsensiSiswas::route('/'),
            'create' => Pages\CreateAbsensiSiswa::route('/create'),
            'edit' => Pages\EditAbsensiSiswa::route('/{record}/edit'),
        ];
    }
}
