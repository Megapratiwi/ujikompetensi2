<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;

class Admin extends ModelAuthenticate
{
    
    protected $table = 'admin';
    protected $primaryKey = 'id';
}
