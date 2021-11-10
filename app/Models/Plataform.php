<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataform extends Model
{
    use HasFactory;


    public $timestamps = false;

    protected $table = 'plataforms';

    protected $primaryKey = 'plataform_id';

    /**
     * @var string[]
     */
    protected $fillable = [
        'plataform_name',
    ];
}
