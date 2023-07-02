<?php

namespace App\Filament\Resources\FinancialAssetResource\Pages;

use App\Filament\Resources\FinancialAssetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFinancialAsset extends CreateRecord
{
    protected static string $resource = FinancialAssetResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
