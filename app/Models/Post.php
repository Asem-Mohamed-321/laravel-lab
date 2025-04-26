<?php

namespace App\Models;

use App\Events\updatePostCount;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // protected $table = 'company_posts';
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['title','body','enabled','user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($post) {
            event(new updatePostCount($post));
        });
    }
}
