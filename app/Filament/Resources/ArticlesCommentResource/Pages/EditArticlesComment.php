<?php

namespace App\Filament\Resources\ArticlesCommentResource\Pages;

use App\Filament\Resources\ArticlesCommentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArticlesComment extends EditRecord
{
    protected static string $resource = ArticlesCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
