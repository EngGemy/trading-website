<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FraudMethodResource\Pages;
use App\Filament\Resources\FraudMethodResource\RelationManagers;
use App\Models\FraudMethod;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
class FraudMethodResource extends Resource
{
    protected static ?string $model = FraudMethod::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label(__('Name'))

                ->required(), 

                TextInput::make('meta_title')
                ->label(__('Meta Title'))
                ->nullable(),
            TextInput::make('meta_description')
                ->label(__('Meta Description'))
                ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__(' Name'))->searchable()->sortable(),
                TextColumn::make('meta_title')->label(__('Meta Title'))->searchable()->sortable(),
                TextColumn::make('meta_description')->label(__('Meta Description'))->searchable()->sortable(),
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
            'index' => Pages\ListFraudMethods::route('/'),
            'create' => Pages\CreateFraudMethod::route('/create'),
            'edit' => Pages\EditFraudMethod::route('/{record}/edit'),
        ];
    }    

    protected static function getNavigationGroup(): ?string
    {
        return __('Settings');
    }

    public static function getLabel(): ?string
    {
        return __('FraudMethod ');
    }

    public static function getPluralLabel(): ?string
    {
        return __('FraudMethods');
    }
    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}
