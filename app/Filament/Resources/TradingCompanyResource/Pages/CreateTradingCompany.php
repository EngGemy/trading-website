<?php

namespace App\Filament\Resources\TradingCompanyResource\Pages;

use App\Filament\Resources\TradingCompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTradingCompany extends CreateRecord
{
    protected static string $resource = TradingCompanyResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
