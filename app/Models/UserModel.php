<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Monolog\Level;

class UserModel extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['level_Id', 'username', 'nama', 'password'];

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_Id', 'level_id');
    }
}
