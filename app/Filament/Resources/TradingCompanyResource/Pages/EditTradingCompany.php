<?php

namespace App\Filament\Resources\TradingCompanyResource\Pages;

use App\Filament\Resources\TradingCompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTradingCompany extends EditRecord
{
    protected static string $resource = TradingCompanyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
