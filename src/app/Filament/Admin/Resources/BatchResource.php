<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Batch;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\BatchResource\Pages;
use App\Filament\Admin\Resources\BatchResource\RelationManagers;

class BatchResource extends Resource
{
    protected static ?string $model = Batch::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    protected static ?string $navigationGroup = "Learning Management System";

    protected static ?string $navigationLabel = 'Kelas Tersedia';

    protected static ?string $modelLabel = 'Kelas Tersedia';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_course_id')
                    ->required()
                    ->label('Event Course')
                    ->relationship('eventCourse', 'name'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kapasitas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('is_full')
                    ->options([
                        'true' => 'True',
                        'false' => 'False',
                        ])
                    ->required(),
                Forms\Components\Select::make('pengajar_id')
                    ->required()
                    ->label('Pengajar')
                    ->relationship('pengajar', 'user_id')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->user->name ?? 'Tanpa Nama'),
                Forms\Components\DatePicker::make('start_registration')
                    ->required(),
                Forms\Components\DatePicker::make('end_registration')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('eventCourse.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('is_full')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        true => 'Full',
                        false => 'Masih Ada',
                    })
                    ->label("Status"),
                Tables\Columns\TextColumn::make('start_registration')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_registration')
                    ->date()
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
            'index' => Pages\ListBatches::route('/'),
            'create' => Pages\CreateBatch::route('/create'),
            'edit' => Pages\EditBatch::route('/{record}/edit'),
        ];
    }
}
