<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
    use HasFactory;
    protected $table = 'tbl_kodepos';
    protected $guard = [];
    protected $timestamp = false;
    protected $primaryKey = 'id';
}
