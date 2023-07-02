<?php

namespace App\Filament\Resources\FraudulentCompaniesResource\Pages;

use App\Filament\Resources\FraudulentCompaniesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFraudulentCompanies extends CreateRecord
{
    protected static string $resource = FraudulentCompaniesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
