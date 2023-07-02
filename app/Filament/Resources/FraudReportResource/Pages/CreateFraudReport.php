<?php

namespace App\Filament\Resources\FraudReportResource\Pages;

use App\Filament\Resources\FraudReportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFraudReport extends CreateRecord
{
    protected static string $resource = FraudReportResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
