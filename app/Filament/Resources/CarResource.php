<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Rental Management';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')->required(),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('model')->required(),
                Forms\Components\TextInput::make('price_per_day')->numeric()->required(),
                Forms\Components\Select::make('availability')
                    ->options([
                        'Available' => 'Available',
                        'Booked' => 'Booked',
                    ])->required(),
                Forms\Components\Select::make('transmission_type')
                    ->options([
                        'Automatic' => 'Automatic',
                        'Manual' => 'Manual',
                    ])->required(),
                Forms\Components\Select::make('fuel_type')
                    ->options([
                        'Petrol' => 'Petrol',
                        'Diesel' => 'Diesel',
                        'Electric' => 'Electric',
                    ])->required(),
                Forms\Components\TextInput::make('seats')->numeric()->required(),
                Forms\Components\FileUpload::make('image')->image()->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('model'),
                Tables\Columns\TextColumn::make('price_per_day'),
                Tables\Columns\TextColumn::make('availability'),
                Tables\Columns\TextColumn::make('transmission_type')->label('Transmission Type'),
                Tables\Columns\TextColumn::make('fuel_type')->label('Fuel Type'),
                Tables\Columns\TextColumn::make('seats')->label('Seats'),
                Tables\Columns\ImageColumn::make('image')->label('Car Image'),

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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
