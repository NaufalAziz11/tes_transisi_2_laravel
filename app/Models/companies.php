<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = 'companies';
    protected $fillable = ['nama', 'email', 'logo', 'website'];
    public $timestamps = false;
}
