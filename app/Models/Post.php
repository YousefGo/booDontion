<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\postType;
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'post_types_id', 'title', 'description', 'image', 'courseName', 'courseCode', 'contactWay', 'contactLink', 'postStatus'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function type(){
        return $this->belongsTo(postType::class,'post_types_id');
    }
}
