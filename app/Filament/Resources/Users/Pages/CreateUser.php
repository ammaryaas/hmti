<?php

namespace App\Filament\Resources\Users\Pages;

use Illuminate\Support\Str;
use App\Filament\Resources\Users\UserResource;
use App\Mail\UserCredentialMail;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    
    // variabel password sementara
    protected string $temporaryPassword; 

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // fungsi handle ketika membuat record baru
    protected function handleRecordCreation(array $data): Model
    {
        // buat password sementara acak 
        $this->temporaryPassword = Str::random(10);

        // masukkan password acak ke db
        $data['password'] = Hash::make($this->temporaryPassword);

        // ambil data record
        $user = static::getModel()::create($data);

        // kirim email ke akun tujuan
        Mail::to($user->email)
            ->send(
                new UserCredentialMail(
                    $user,
                    $this->temporaryPassword
                )
            );

        return $user;
    }
}
