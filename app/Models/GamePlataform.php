<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamePlataform extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * @var string[]
    */
    protected $fillable = [
        'game_id',
        'plataform_id',
    ];
}
