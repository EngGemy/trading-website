<?php

namespace App\Filament\Resources\FinancialAssetResource\Pages;

use App\Filament\Resources\FinancialAssetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFinancialAssets extends ListRecords
{
    protected static string $resource = FinancialAssetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
