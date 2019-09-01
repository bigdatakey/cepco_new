<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use TCG\Voyager\Traits\Resizable;

class Blog extends Model
{
    use Resizable;
    
    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y H:i');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y H:i');
    }

    public function likes(){
        return $this->belongsToMany( 'App\Models\User', 'users_blogs_likes', 'blog_id', 'user_id');
    }
}
