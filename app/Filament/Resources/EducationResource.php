<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Month;
use Filament\Forms\Form;
use App\Models\Education;
use Filament\Tables\Table;
use Ramsey\Uuid\Type\Decimal;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EducationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EducationResource\RelationManagers;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('degree')->required(),

                TextInput::make('major')->required(),

                TextInput::make('institution_name')->required(),

                TextInput::make('grade')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(4)
                    ->suffix('out of 4.00')
                    ->required(),

                FileUpload::make('logo')
                    ->image()
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
                TextColumn::make('degree'),

                TextColumn::make('major'),

                ImageColumn::make('logo'),

                TextColumn::make('institution_name'),

                TextColumn::make('grade')
                    ->numeric(decimalPlaces: 2)
                    ->label('IPK')
                    ->suffix('/4.00'),

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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
