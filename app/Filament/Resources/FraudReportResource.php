<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FraudReportResource\Pages;
use App\Filament\Resources\FraudReportResource\RelationManagers;
use App\Models\FraudReport;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class FraudReportResource extends Resource
{
    protected static ?string $model = FraudReport::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('companyName.name')->label(__('Company Name')),
                TextColumn::make('fraud_type')->label(__('Fraud Type'))->searchable()->sortable(),
                TextColumn::make('contact_method')->label(__('Contact method'))->searchable()->sortable(),
                TextColumn::make('first_contact_date')->label(__('Date '))->searchable()->sortable(),
                TextColumn::make('fraudster_info')->label(__('info about '))->searchable()->sortable(),
                TextColumn::make('fraud_method')->label(__('fraud method '))->searchable()->sortable(),
                TextColumn::make('publish_consent')->label(__('publish_consent '))->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFraudReports::route('/'),
            'create' => Pages\CreateFraudReport::route('/create'),
            'edit' => Pages\EditFraudReport::route('/{record}/edit'),
        ];
    }


    protected static function getNavigationGroup(): ?string
    {
        return __('Comments');
    }

    public static function getLabel(): ?string
    {
        return __('Reports');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Report  ');
    }

    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}
