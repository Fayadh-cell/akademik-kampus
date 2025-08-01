<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    
    protected $table = 'enrollment';
    protected $primaryKey = 'enrollment_id';
    public $incrementing = false;
    
    protected $fillable = [
        'enrollment_id',
        'student_id',
        'course_id',
        'grade',
        'attendance',
        'status'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
