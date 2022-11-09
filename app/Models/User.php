<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;
use \Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * リレーション（ユーザーはグループを１つ持つ）
     *
     * @return HasOne
     */
    public function group(): HasOne
    {
        return $this->hasOne(Group::class);
    }

    /**
     * リレーション（ユーザーはグループを１つ持つ）
     *
     * @return HasOne
     */
    public function face(): HasOne
    {
        return $this->hasOne(Face::class);
    }

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

    // *******************************
    // データベースの検索メソッド
    // *******************************
    /**
     * すべてのユーザーをグループと紐付けて取得します
     *
     * @return Collection
     */
    public static function fetch_all_with_groups(): Collection
    {
        return DB::table('users')
                ->join('groups', 'groups.user_id', '=', 'users.id')
                ->select('*')
                ->get();
    }
}
