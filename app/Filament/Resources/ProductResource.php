<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Set;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              TextInput::make('name')
    ->reactive() // Use 'reactive' instead of 'live'
    ->afterStateUpdated(fn (callable $set, ?string $state) => $set('slug', Str::slug($state)))->required(),
    TextInput::make('slug')->required(),

      Select::make('category_id')
            ->label('Category')
            ->options(Category::all()->pluck('name', 'id'))
            ->reactive()
            ->afterStateUpdated(fn (callable $set) => $set('brand_id', null))->required(),
     Toggle::make('status'),

      Select::make('brand_id')
            ->label('Brand')
            ->options(function (callable $get) {
                $categoryId = $get('category_id');
                if (!$categoryId) {
                    return [];
                }

                return Category::find($categoryId)->brands->pluck('name', 'id');
            })
            ->reactive()
            ->disabled(fn (callable $get) => $get('category_id') === null),
            FileUpload::make('main_image')->required(),
            FileUpload::make('image')->multiple()->required(),
            RichEditor::make('description')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                  TextColumn::make('name'),
                    ImageColumn::make('main_image'),
                   TextColumn::make('slug'),
                   ToggleColumn::make('status')
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
