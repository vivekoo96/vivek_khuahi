<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Blog;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\BlogResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BlogResource\RelationManagers;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
            ->reactive()
            ->afterStateUpdated(function (callable $set, ?string $state) {
                $slug = Str::slug($state);
                // Ensure the slug is unique
                $originalSlug = $slug;
                $count = 1;
                while (Blog::where('slug', $slug)->exists()) {
                    $slug = $originalSlug . '-' . $count++;
                }
                $set('slug', $slug);
            })->required(),
        TextInput::make('slug')->required(),
                FileUpload::make('image')->required(),
                Textarea::make('short_description')->label('Short description')->required(),
                MarkdownEditor::make('description')
                    ->required()
                    ->label('description')->required(),
                     Toggle::make('status'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 TextColumn::make('title'),
                    ImageColumn::make('image'),
                   TextColumn::make('slug'),
                   ToggleColumn::make('status')
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
