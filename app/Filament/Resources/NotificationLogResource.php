<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NotificationLogResource\Pages;
use App\Filament\Resources\NotificationLogResource\RelationManagers;
use App\Models\NotificationLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use App\Models\User;
use App\Notifications\CustomNotification;
use Filament\Notifications\Notification;
class NotificationLogResource extends Resource
{
    protected static ?string $model = NotificationLog::class;

    protected static ?string $navigationGroup = 'Notification';


    public static function createLog(User $user, bool $isSent = true)
    {
        NotificationLog::create([
            'email' => $user->email,
            'notification_type' => 'CustomNotification',
            'sent_at' => now(),
            'is_sent' => true,
        ]);

    }

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email(),
                Forms\Components\TextInput::make('notification_type')
                    ->required(),
                Forms\Components\DateTimePicker::make('sent_at')
                    ->required(),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('notification_type'),
                Tables\Columns\TextColumn::make('sent_at')->dateTime(),
                Tables\Columns\IconColumn::make('is_sent')
                    ->boolean()
                    ->label('تم الإرسال')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->headerActions([
                Action::make('sendCustomNotification')
                    ->label('إرسال إشعار مخصص')
                    ->form([
                        Forms\Components\Select::make('user_id')
                            ->label('المستخدم')
                            ->options(User::pluck('name', 'id'))
                            ->required(),
                        Forms\Components\TextInput::make('message')
                            ->label('الرسالة')
                            ->required(),
                    ])
                    ->action(function (array $data) {
                        $user = User::find($data['user_id']);
                        $user->notify(new CustomNotification($data['message']));

                        NotificationLog::create([
                            'email' => $user->email,
                            'notification_type' => 'CustomNotification',
                            'sent_at' => now(),
                        ]);

                        Notification::make()
                            ->title('تم إرسال الإشعار بنجاح')
                            ->success()
                            ->send();
                    })
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
            'index' => Pages\ListNotificationLogs::route('/'),
            'create' => Pages\CreateNotificationLog::route('/create'),
            'edit' => Pages\EditNotificationLog::route('/{record}/edit'),
        ];
    }

}
