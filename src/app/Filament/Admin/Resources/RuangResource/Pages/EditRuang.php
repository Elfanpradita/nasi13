<?php

namespace App\Filament\Admin\Resources\RuangResource\Pages;

use App\Filament\Admin\Resources\RuangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRuang extends EditRecord
{
    protected static string $resource = RuangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
