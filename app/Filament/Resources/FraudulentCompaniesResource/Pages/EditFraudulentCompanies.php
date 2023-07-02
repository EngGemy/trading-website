<?php

namespace App\Filament\Resources\FraudulentCompaniesResource\Pages;

use App\Filament\Resources\FraudulentCompaniesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFraudulentCompanies extends EditRecord
{
    protected static string $resource = FraudulentCompaniesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
