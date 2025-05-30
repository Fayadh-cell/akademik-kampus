<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $table = 'courses';
    protected $primaryKey = 'course_id';
    public $incrementing = false;
    
    protected $fillable = [
        'course_id',
        'name',
        'code',
        'credits',
        'semester'
    ];
}
