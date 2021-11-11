<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;

    protected $table = 'adresses';

    protected $primaryKey = 'adress_id';

    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'neighborhood',
        'street',
        'number',
    ];
}
