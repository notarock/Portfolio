<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    public function archives()
    {
        return Blog::orderBy('updated_at', 'DESC')->take(12)->get();
    }

}
