<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion'];

    // public function getStatusAttribute()
    // {
    //     $status = null;
    //     switch ($this->estatus) {
    //         case 1:
    //             $status = 'En proceso';
    //             break;
    //         case 2:
    //             $status = 'Terminado';
    //             break;
    //         default:
    //             break;
    //     }
    //     return $status;
    // }
}
