<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JawabanTaskResource\Pages;
use App\Filament\Admin\Resources\JawabanTaskResource\RelationManagers;
use App\Models\JawabanTask;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Facades\Filament;

class JawabanTaskResource extends Resource
{
    protected static ?string $model = JawabanTask::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Elearning Management";

    protected static ?string $navigationLabel = 'Task';

    protected static ?string $modelLabel = 'Task';

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
                Forms\Components\TextInput::make('task_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('murid_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('upload_task')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('task_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('murid_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('upload_task')
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
            'index' => Pages\ListJawabanTasks::route('/'),
            'create' => Pages\CreateJawabanTask::route('/create'),
            'edit' => Pages\EditJawabanTask::route('/{record}/edit'),
        ];
    }
}
