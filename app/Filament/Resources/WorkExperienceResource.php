<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Month;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Nette\Utils\ImageColor;
use App\Models\WorkExperience;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WorkExperienceResource\Pages;
use App\Filament\Resources\WorkExperienceResource\RelationManagers;
use PhpParser\Node\Stmt\Echo_;

class WorkExperienceResource extends Resource
{
    protected static ?string $model = WorkExperience::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('role')
                    ->maxLength(255)
                    ->required(),
                
                TextInput::make('company_name')
                    ->maxLength(255)
                    ->required(),
                
                Textarea::make('job_description'),

                FileUpload::make('logo')
                    ->image()
                    ->required(),

                Select::make('work_type_id')
                    ->relationship('work_type', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('start_month_id')
                    ->relationship('start_month', 'abbr_name')
                    ->required(),

                Select::make('end_month_id')
                    ->relationship('end_month', 'abbr_name')
                    ->required(),

                DatePicker::make('start_year')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->required(),

                DatePicker::make('end_year')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role')->searchable(),
                
                ImageColumn::make('logo'),
                
                TextColumn::make('company_name')->searchable(),

                TextColumn::make('job_description')->limit(50),

                TextColumn::make('work_type.name')
                    ->label('Work Type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Internship' => 'gray',
                        'Full-time' => 'warning',
                        'Part-time' => 'success',
                        'Contract' => 'danger',
                    })
                    ->searchable()
                    ->sortable(),

                TextColumn::make('start_year')
                    ->label('Start Date')
                    ->getStateUsing(fn ($record) => $record->start_year ? Carbon::parse($record->start_year)->format('Y') : 'No Date')
                    ->formatStateUsing(function ($state, $record) {
                        // Mengambil bulan dari ID
                        $month = Month::find($record->start_month_id);
                        return " {$month->abbr_name} {$state}";
                    })
                    ->searchable()
                    ->sortable(),

                TextColumn::make('end_year')
                    ->label('End Date')
                    ->getStateUsing(fn ($record) => $record->end_year ? Carbon::parse($record->end_year)->format('Y') : 'No Date')
                    ->formatStateUsing(function ($state, $record) {
                        // Mengambil bulan dari ID
                        $month = Month::find($record->end_month_id);
                        return " {$month->abbr_name} {$state}";
                    })
                    ->searchable()
                    ->sortable()
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
            'index' => Pages\ListWorkExperiences::route('/'),
            'create' => Pages\CreateWorkExperience::route('/create'),
            'edit' => Pages\EditWorkExperience::route('/{record}/edit'),
        ];
    }
}
