<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class joblistModel extends Model
{
    use HasFactory;
    // these lines
    protected $table='joblist'; // joblist is table name
    private $primary = 'job_id';

}
