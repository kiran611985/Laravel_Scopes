<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "posts";

    protected $fillable = [
        'id', 'title', 'body', 'status'
    ];

    public function scopeToday($query)
    {
        return $query->whereDate('created_at', \Carbon\Carbon::today());
  

  }
}


----------------------------------
In Contoller

Post::today()->get();




---------------------------------

/**
     * Scope created awhile ago
     */
public function scopeToday($query)
    {
        return $query->whereDate('created_at', \Carbon\Carbon::today());
    }
/**
     * New Dynamic Scope
     */
public function scopeStatus($query, $type)
    {
        return $query->where('status', $type);
   

 }

Post::status(1)->today()->get();

