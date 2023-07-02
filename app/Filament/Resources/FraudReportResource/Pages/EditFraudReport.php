<?php

namespace App\Filament\Resources\FraudReportResource\Pages;

use App\Filament\Resources\FraudReportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFraudReport extends EditRecord
{
    protected static string $resource = FraudReportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
