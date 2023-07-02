<?php

namespace App\Filament\Resources\ContactMethodResource\Pages;

use App\Filament\Resources\ContactMethodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactMethod extends EditRecord
{
    protected static string $resource = ContactMethodResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
