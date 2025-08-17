<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrainerProfileRelationManager extends RelationManager
{
    protected static string $relationship = 'trainerProfile';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user')
                    ->required()
                    ->maxLength(255),
                 Forms\Components\DatePicker::make('dob')
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->maxLength(100),
                Forms\Components\Textarea::make('about_me')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('certifications')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('awards')
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('user')
            ->columns([
                Tables\Columns\TextColumn::make('user'),
                 Tables\Columns\TextColumn::make('dob')
                    ->date(),
                 Tables\Columns\TextColumn::make('city'),
                 Tables\Columns\TextColumn::make('about_me')
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
