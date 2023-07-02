<?php

namespace App\Filament\Resources\TradingCompanyResource\Pages;

use App\Filament\Resources\TradingCompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTradingCompanies extends ListRecords
{
    protected static string $resource = TradingCompanyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
