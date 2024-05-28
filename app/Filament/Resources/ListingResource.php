<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListingResource\Pages;
use App\Filament\Resources\ListingResource\RelationManagers;
use App\Models\Listing;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class ListingResource extends Resource
{
    protected static ?string $model = Listing::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('title')->required(),
                    Forms\Components\TextInput::make('slug')->unique(),
                    Forms\Components\TextInput::make('description')->required(),
                    Forms\Components\TextInput::make('price')->numeric()->required(),
                    Forms\Components\TextInput::make('category')->required(),
                    Forms\Components\TextInput::make('location')->required(),
                    Forms\Components\TextInput::make('agent')->required(),
                    Forms\Components\TextInput::make('contact_email')->email()->required(),
                    Forms\Components\TextInput::make('contact_phone')->numeric()->required(),
                    Forms\Components\FileUpload::make('image')->multiple(),
                    Forms\Components\DateTimePicker::make('published_at')->required(),
                    Forms\Components\Checkbox::make('featured')->label('Featured'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    Tables\Columns\TextColumn::make('title'),
                    Tables\Columns\TextColumn::make('slug'),
                    Tables\Columns\TextColumn::make('description'),
                    Tables\Columns\TextColumn::make('price'),
                    Tables\Columns\TextColumn::make('category'),
                    Tables\Columns\TextColumn::make('location'),
                    Tables\Columns\TextColumn::make('agent'),
                    Tables\Columns\TextColumn::make('contact_email'),
                    Tables\Columns\TextColumn::make('contact_phone'),
                    Tables\Columns\ImageColumn::make('image'),
                    Tables\Columns\TextColumn::make('published_at'),
                    Tables\Columns\BooleanColumn::make('featured')->label('Featured'),









            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                 Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListListings::route('/'),
            'create' => Pages\CreateListing::route('/create'),
            'edit' => Pages\EditListing::route('/{record}/edit'),
        ];
    }
}
