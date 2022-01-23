<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'name',
        'is_active',
        'list_order'
    ];
}
