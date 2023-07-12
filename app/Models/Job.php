<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_jobs';
    protected $primaryKey = 'id';
    protected $fillable = ['job_title','job_desc', 'job_req', 'salary',];
}
