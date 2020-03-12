<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quiz_table';
    protected $primaryKey = 'quiz_id';
}
