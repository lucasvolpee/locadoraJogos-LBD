<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalGame extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * @var string[]
    */
    protected $fillable = [
        'rental_id',
        'game_id',
    ];
}
