<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * DB RELATION
     */

    //  POSTS USERS One to many
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
