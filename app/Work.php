<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function pictures()
    {
        return $this->HasMany('App\Picture');
    }

}
