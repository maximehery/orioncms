<?php

namespace App\Filament\Resources\Orion\HelpQuestionCategoryResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Traits\LatestResourcesTrait;
use App\Filament\Resources\Orion\HelpQuestionCategoryResource;

class ListHelpQuestionCategories extends ListRecords
{
    use LatestResourcesTrait;

    protected static string $resource = HelpQuestionCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
