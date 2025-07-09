<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RuangResource\Pages;
use App\Filament\Admin\Resources\RuangResource\RelationManagers;
use App\Models\Ruang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Facades\Filament;

class RuangResource extends Resource
{
    protected static ?string $model = Ruang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Elearning Management";

    protected static ?string $navigationLabel = 'Ruang';

    protected static ?string $modelLabel = 'Ruang';

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        $panel = Filament::getCurrentPanel();
        if ($panel?->getId() === 'edu') {
            $query->where('nomor_ruang', auth()->user()->id);
        }
        return $query;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_ruang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kapasitas')
                    ->required()
                    ->label('Perusahaan Cabang')
                    ->relationship('branchCompany', 'name'),
                Forms\Components\TextInput::make('branch_company_id')
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_ruang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('branchCompany.name')
                    ->sortable(),
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
            'index' => Pages\ListRuangs::route('/'),
            'create' => Pages\CreateRuang::route('/create'),
            'edit' => Pages\EditRuang::route('/{record}/edit'),
        ];
    }
}
