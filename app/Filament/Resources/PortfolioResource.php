<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;
    protected static ?string $navigationGroup = 'Portfolio';
    protected static ?string $navigationLabel = 'Bio Data';
    protected static ?string $pluralModelLabel = 'Bio Data';
    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                    ->schema([
                        TextInput::make('greetings')
                            ->maxLength(30),
                        TextInput::make('name')
                            ->maxLength(25),
                        TextInput::make('jobTitle')
                            ->maxLength(100),
                    ]),
                TextInput::make('motto')
                    ->maxLength(150),
                TextInput::make('aboutHeader')
                    ->maxLength(25),
                Textarea::make('aboutContent')
                    ->rows(5)
                    ->columnSpanFull(),
                FileUpload::make('picture')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->uploadingMessage('Uploading picture...')
                    ->directory('img')
                    ->columnSpanFull()
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('greetings')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('jobTitle')
                    ->searchable(),
                TextColumn::make('motto')
                    ->searchable(),
                TextColumn::make('aboutHeader')
                    ->searchable(),
                ImageColumn::make('picture')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
