<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * Atributos do banco de dados
     *
     *
     */
    public      $timestamps = true;

    protected   $table  = 'users';

    protected   $fillable = ['cpf', 'name', 'phone', 'birth', 'gender', 'notes', 'email', 'password', 'status', 'permission'];

    protected   $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($value){

        $this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
    }

}
