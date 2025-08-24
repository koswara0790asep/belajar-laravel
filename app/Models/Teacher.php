<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $guarded = [];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id', 'class_id');
    }
}
