<?php

namespace App\Filament\Admin\Resources\RuangResource\Pages;

use App\Filament\Admin\Resources\RuangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRuangs extends ListRecords
{
    protected static string $resource = RuangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
