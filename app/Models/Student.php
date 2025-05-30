<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    protected $table = 'students';
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    
    protected $fillable = [
        'student_id',
        'name',
        'email',
        'nim',
        'major',
        'enrollment_year'
    ];
}
