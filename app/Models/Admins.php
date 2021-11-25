<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Authenticatable
{
    use HasFactory;
    protected $table = 'admins';
    protected $guarded = array();
}
