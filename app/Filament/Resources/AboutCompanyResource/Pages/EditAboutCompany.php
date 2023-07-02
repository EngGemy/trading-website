<?php

namespace App\Filament\Resources\AboutCompanyResource\Pages;

use App\Filament\Resources\AboutCompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutCompany extends EditRecord
{
    protected static string $resource = AboutCompanyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
