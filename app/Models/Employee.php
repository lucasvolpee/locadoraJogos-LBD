<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $primaryKey = 'employee_id';

    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'employee_name',
        'cpf',
        'gender',
        'salary'
    ];

}
