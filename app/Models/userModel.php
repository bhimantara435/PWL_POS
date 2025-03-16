<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // Nama tabel di database
    protected $primaryKey = 'user_id'; // Primary key tabel


    protected $fillable = ['level_id', 'username', 'nama', 'password'];
}
