<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'address', 'description', 'photo', 'room[]', 'price[]', 'type[]', 'title', 'user_id'];

}
