<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticlesCommentResource\Pages;
use App\Models\ArticleComment;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class ArticlesCommentResource extends Resource
{
   
    protected static ?string $model = ArticleComment::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('comment')
                    ->rows(3)
                    ->required()
                    ->placeholder('comment'),

                Select::make('article_id')
                    ->label('Article')
                    ->relationship('article', 'title')
                    ->required(),
            ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('article.title')
                    ->label('Article Title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('comment')
                    ->label('Comment')
                    ->limit(50)
                    ->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListArticlesComments::route('/'),
            'create' => Pages\CreateArticlesComment::route('/create'),
            'edit' => Pages\EditArticlesComment::route('/{record}/edit'),
        ];
    }
}
