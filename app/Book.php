<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model
{
    protected $table = 'books';

    protected $primaryKey = 'id';

    protected $fillable = ['name','author','image_url','owner_id','temp_owner_id'];

    public function owner(){
        return $this->belongsTo('App\User','owner_id');
    }

    public function tempOwner(){
        return $this->belongsTo('App\User','temp_owner_id');
    }
}
