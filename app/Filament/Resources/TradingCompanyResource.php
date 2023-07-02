<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TradingCompanyResource\Pages;
use App\Filament\Resources\TradingCompanyResource\RelationManagers;
use App\Models\TradingCompany;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Str;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Support\Facades\DB;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\ToggleColumn;
class TradingCompanyResource extends Resource
{
    protected static ?string $model = TradingCompany::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([

                Section::make('Add Comapnies here')
                    ->description('Description')
                    ->schema([

                        Select::make('company_name_id')
                            ->label(__('Company'))
                            ->relationship('companyName', 'company_name_id') // <-- Add the foreign key column name here
                            ->options(\App\Models\CompanyName::pluck('name', 'id'))
                            ->searchable()
                            ->required(),


                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (\Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            }),
                        Forms\Components\TextInput::make('slug')->required(),
                        FileUpload::make('logo'),
                        TextInput::make('site_link')
                            ->url()
                            ->prefix('https://')
                            ->suffix('.com'),
                        TextInput::make('country')->label(__('country')),

                        Select::make('platforms')
                            ->label(__('Platform'))
                            ->relationship('platforms', 'tradingCompanies')
                            ->options(\App\Models\Platform::pluck('name', 'id'))
                            ->multiple()
                            ->searchable()
                            ->required(),


                        Select::make('licenses')
                            ->label(__('Licenses'))
                            ->relationship('licenses', 'tradingCompanies')
                            ->options(\App\Models\License::pluck('name', 'id'))
                            ->multiple()
                            ->searchable()
                            ->required(),


                        Select::make('countries')
                            ->label(__('Local offices'))
                            ->relationship('countries', 'tradingCompanies')
                            ->options(\App\Models\Country::pluck('name_arabic', 'id'))
                            ->multiple()
                            ->searchable()
                            ->required(),

                        Select::make('deposits')
                            ->label(__('Deposits'))
                            ->relationship('deposits', 'tradingCompanies')
                            ->options(\App\Models\Deposit::pluck('name', 'id'))
                            ->multiple()
                            ->searchable()
                            ->required(),

                        Select::make('withdrawals')
                            ->label(__('Withdrawals'))
                            ->relationship('withdrawals', 'tradingCompanies')
                            ->options(\App\Models\Withdrawal::pluck('name', 'id'))
                            ->multiple()
                            ->searchable()
                            ->required(),

                        Select::make('financialAssets')
                            ->label(__('FinancialAssets'))
                            ->relationship('financialAssets', 'tradingCompanies')
                            ->options(\App\Models\FinancialAsset::pluck('name', 'id'))
                            ->multiple()
                            ->searchable()
                            ->required(),
                        TextInput::make('withdrawal_commission')->label(__('withdrawal_commission')),
                        Toggle::make('islamic_account')->label(__('islamic_account'))->inline(false),
                        Toggle::make('demo_account')->label(__('demo account'))->inline(false),
                        Toggle::make('verified_account')->label(__('Verified account'))->inline(false),


                        TextInput::make('minimum_deposit_amount')->label(__('minimum_deposit_amount')),

                        TextInput::make('year_founded')->label(__('year_founded')),



                    ])
                    ->columns(3),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label(__('company name'))->searchable()->sortable(),


                TextColumn::make('platforms.name')->label(__('Platforms')),
                TextColumn::make('countries.name_arabic')->label(__('Country'))->searchable(),

                ImageColumn::make('logo'),
                TextColumn::make('site_link')->label(__('Site link'))->searchable(),
                ToggleColumn::make('active')
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
            'index' => Pages\ListTradingCompanies::route('/'),
            'create' => Pages\CreateTradingCompany::route('/create'),
            'edit' => Pages\EditTradingCompany::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationGroup(): ?string
    {
        return __('Company Details');
    }

    public static function getLabel(): ?string
    {
        return __('TradingCompany');
    }

    public static function getPluralLabel(): ?string
    {
        return __('TradingCompanies');
    }
    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}
