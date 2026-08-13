<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Migration extends Model
{
    protected $table = 'migrations';

    // tabel migrations bawaan Laravel tidak punya kolom created_at/updated_at
    public $timestamps = false;

    protected $guarded = [];
}