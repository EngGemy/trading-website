<?php

namespace App\Filament\Resources\ContactMethodResource\Pages;

use App\Filament\Resources\ContactMethodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactMethods extends ListRecords
{
    protected static string $resource = ContactMethodResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
