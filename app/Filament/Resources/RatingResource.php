<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RatingResource\Pages;
use App\Filament\Resources\RatingResource\RelationManagers;
use App\Models\Rating;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ToggleColumn;
class RatingResource extends Resource
{
    protected static ?string $model = Rating::class;

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
                TextColumn::make('email')->label(__('User Email'))->searchable()->sortable(),
                TextColumn::make('full_name')->label(__('User Name'))->searchable()->sortable(),
                TextColumn::make('body')->label(__('User Comment'))->searchable()->sortable(),
                CheckboxColumn::make('agree_terms')->label(__('Agree_terms')),
                ToggleColumn::make('active')->label(__('Active Comment'))

            ])
            ->filters([
                //
            ])
            ->actions([
               // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRatings::route('/'),
           // 'create' => Pages\CreateRating::route('/create'),
            'edit' => Pages\EditRating::route('/{record}/edit'),
        ];
    }
    protected static function getNavigationGroup(): ?string
    {
        return __('Comments');
    }

    public static function getLabel(): ?string
    {
        return __('comments');
    }

    public static function getPluralLabel(): ?string
    {
        return __('comments ');
    }
    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::count(); // TODO: Change the autogenerated stub
    }
}