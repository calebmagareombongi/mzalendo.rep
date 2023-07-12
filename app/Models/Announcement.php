<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_announcements';
    protected $primaryKey = 'id';
    protected $fillable = ['announcement_title','announcement',];
}
