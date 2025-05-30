<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseLecturer extends Model
{
    use HasFactory;
    
    protected $table = 'course_lecturers';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'course_id',
        'lecturer_id',
        'role'
    ];
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id');
    }
}
