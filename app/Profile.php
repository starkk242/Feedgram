<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath=($this->image) ? $this->image : 'profile/UCcSlrvZZ6B6qk4uj2u2zPAovu3eBOWXKjEedW3u.webp';
        return $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
