<?php

namespace App\Filament\Resources\AboutCompanyResource\Pages;

use App\Filament\Resources\AboutCompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutCompanies extends ListRecords
{
    protected static string $resource = AboutCompanyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
