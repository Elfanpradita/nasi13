<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AbsensiPengajarResource\Pages;
use App\Filament\Admin\Resources\AbsensiPengajarResource\RelationManagers;
use App\Models\AbsensiPengajar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsensiPengajarResource extends Resource
{
    protected static ?string $model = AbsensiPengajar::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $navigationGroup = "Management Absensi dan Gaji Pengajar";

    protected static ?string $navigationLabel = 'Absensi pengajar';

    protected static ?string $modelLabel = 'Absensi pengajar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('event_course_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kegiatan_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\TextInput::make('pengajar_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('keterangan')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('event_course_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kegiatan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('pengajar_id')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListAbsensiPengajars::route('/'),
            'create' => Pages\CreateAbsensiPengajar::route('/create'),
            'edit' => Pages\EditAbsensiPengajar::route('/{record}/edit'),
        ];
    }
}
