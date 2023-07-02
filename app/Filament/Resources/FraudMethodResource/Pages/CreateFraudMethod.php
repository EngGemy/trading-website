<?php

namespace App\Filament\Resources\FraudMethodResource\Pages;

use App\Filament\Resources\FraudMethodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFraudMethod extends CreateRecord
{
    protected static string $resource = FraudMethodResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
