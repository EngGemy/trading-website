<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
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
use App\Models\CompanyName;
class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->reactive()
                ->afterStateUpdated(function (\Closure $set, $state) {
                    $set('slug', Str::slug($state));
                }),
            Forms\Components\TextInput::make('slug')->required(),


                Select::make('company_name_id')
                    ->label(__('Company'))
                    ->relationship('companyName', 'company_name_id') // <-- Add the foreign key column name here
                    ->options(\App\Models\CompanyName::pluck('name', 'id'))
                    ->searchable()
                    ->required(),


                Select::make('country_id')
            ->label(__('Country'))
            ->relationship('countries', 'company_id')
            ->options(\App\Models\Country::pluck('name_arabic', 'id'))
            ->multiple()
            ->searchable()
            ->required(),

            Select::make('platform_id')
            ->label(__('Platform'))
            ->relationship('platforms', 'company_id')
            ->options(\App\Models\Platform::pluck('name', 'id'))
            ->multiple()
            ->searchable()
            ->required(),


                FileUpload::make('images'),
                TextInput::make('website_link')
                ->url()
                ->prefix('https://')
                ->suffix('.com')


            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__('company name'))->searchable()->sortable(),


                TextColumn::make('platforms.name')->label(__('Platforms')),
                 TextColumn::make('countries.name_arabic')->label(__('Country'))->searchable(),

                ImageColumn::make('images'),
                TextColumn::make('website_link')->label(__('domain'))->searchable(),

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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }



    protected static function getNavigationGroup(): ?string
    {
        return __('Companies');
    }

    public static function getLabel(): ?string
    {
        return __('Trusted Company');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Trusted Comanies');
    }
    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}
