<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=[
        'title',
        'body',
        'image_url',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
        
    }
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
        
    }
    public function university()
    {
        return $this->belongsTo(University::class);
        
    }
    public function getPaginateByLimit(int $limit_count=5)
    {
        return $this ->orderby('updated_at','DESC')->paginate($limit_count);
    }
}
