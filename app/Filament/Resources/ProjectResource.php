<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Nette\Utils\ImageColor;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
     
                FileUpload::make('thumbnail')
                    ->image()
                    ->required(),

                Textarea::make('description')
                    ->required(),

                Select::make('project_category_id')
                    ->relationship('project_category', 'name')
                    ->preload()
                    ->searchable()
                    ->createOptionForm([
                        TextInput::make('name')
                            ->maxLength(255)
                            ->required()
                    ])
                    ->required(),
                    
                Section::make('Upload URL')
                    ->schema([
                        TextInput::make('url_github')
                            ->label('Github URL')
                            ->url()
                            ->nullable(),
                        
                        TextInput::make('url_website')
                            ->label('Website URL')
                            ->url()
                            ->nullable(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),

                ImageColumn::make('thumbnail'),

                TextColumn::make('description')->wrap()->limit(150),

                TextColumn::make('project_category.name')
                    ->badge()
                    ->color(fn (string $state): string => match($state) {
                        'Web Development' => 'primary',
                        'UI/UX Design' => 'success',
                        default => 'gray'
                    })
                    ->label('Project Category'),

                TextColumn::make('url_github')

                    ->label('Github URL'),

                TextColumn::make('url_website')
                    ->label('Website URL'),

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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
