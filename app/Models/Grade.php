<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function highest_grade()
    {
        if ($this->grade < best_grade)
        {
            return false()
        } else
        {
            $this->grade = new best_grade;
        }
    }
}
