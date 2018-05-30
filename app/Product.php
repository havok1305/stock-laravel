<?php

namespace Stock;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array(
        'name', 'value', 'unit'
    );
    protected $guarded = array(
      'id'
    );
}
