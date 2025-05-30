<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    
    protected $table = 'lecturers';
    protected $primaryKey = 'lecturer_id';
    public $incrementing = false;
    
    protected $fillable = [
        'lecturer_id',
        'name',
        'nip',
        'department',
        'email'
    ];
}
