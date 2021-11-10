<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $primaryKey = 'game_id';

    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'game_title',
        'game_release_date',
        'developer',
        'distributor'
    ];

    public function plataforms()
    {
        return $this->belongsToMany(Plataform::class, 'game_plataforms', 'game_id', 'plataform_id');
    }
}
