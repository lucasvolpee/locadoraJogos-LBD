<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;



    protected $table = 'rentals';

    protected $primaryKey = 'rental_id';

    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'rental_name'
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'rental_games', 'rental_id', 'game_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'rental_id');
    }

    public function adress()
    {
        return $this->hasOne(Adress::class, 'adress_id');
    }
}
