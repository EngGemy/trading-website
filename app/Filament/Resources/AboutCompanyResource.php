<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutCompanyResource\Pages;
use App\Filament\Resources\AboutCompanyResource\RelationManagers;
use App\Models\AboutCompany;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
class AboutCompanyResource extends Resource
{
    protected static ?string $model = AboutCompany::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('trading_company_id')
                    ->label(__('Company'))
                    ->relationship('tradingCompany', 'trading_company_id') // <-- Add the foreign key column name here
                    ->options(\App\Models\TradingCompany::pluck('title', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('title')
                    ->label(__('About title'))

                    ->required(),
                RichEditor::make('description')->label(__('description')),
                FileUpload::make('image')->label(__('image'))

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tradingCompany.title')->label(__('Company Name')),
                TextColumn::make('title')->label(__(' title')),
                TextColumn::make('description')->label(__(' description')),
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
            'index' => Pages\ListAboutCompanies::route('/'),
            'create' => Pages\CreateAboutCompany::route('/create'),
            'edit' => Pages\EditAboutCompany::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('Company Details');
    }

    public static function getLabel(): ?string
    {
        return __('Company about');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Company about');
    }
    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}
