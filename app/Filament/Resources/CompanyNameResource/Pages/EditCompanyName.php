<?php

namespace App\Filament\Resources\CompanyNameResource\Pages;

use App\Filament\Resources\CompanyNameResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyName extends EditRecord
{
    protected static string $resource = CompanyNameResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
