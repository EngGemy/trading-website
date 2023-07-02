<?php

namespace App\Filament\Resources\FraudMethodResource\Pages;

use App\Filament\Resources\FraudMethodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFraudMethods extends ListRecords
{
    protected static string $resource = FraudMethodResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
