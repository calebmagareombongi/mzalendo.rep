<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_projects';
    protected $primaryKey = 'id';
    protected $fillable = ['project_name','project_desc', 'project_budget', 'project_status','project_start_date','project_end_date',];
}
