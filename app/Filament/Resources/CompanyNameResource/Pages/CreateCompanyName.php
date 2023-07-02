<?php

namespace App\Filament\Resources\CompanyNameResource\Pages;

use App\Filament\Resources\CompanyNameResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyName extends CreateRecord
{
    protected static string $resource = CompanyNameResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
