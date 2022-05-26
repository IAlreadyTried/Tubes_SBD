<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Pengguna as Authenticatable;


class Pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['nama','username','email','password'];
}
