<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
        'group_id',
        'person_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     * ここに書いたカラムは常に取得対象外となる
     * makeVisibleメソッドで意図的に取得はできる
     *
     * @var array<string>
     */
    protected $hidden = [
        // 'password'
    ];

}
