<?php

namespace App\Filament\Resources\TrainerProfileResource\Pages;

use App\Filament\Resources\TrainerProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrainerProfiles extends ListRecords
{
    protected static string $resource = TrainerProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
