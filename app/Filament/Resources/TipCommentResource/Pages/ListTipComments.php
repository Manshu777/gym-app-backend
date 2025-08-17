<?php

namespace App\Filament\Resources\TipCommentResource\Pages;

use App\Filament\Resources\TipCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipComments extends ListRecords
{
    protected static string $resource = TipCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
