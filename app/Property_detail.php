<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_detail extends Model
{
    protected $table = 'properties_detail';

    public function property(){
      return $this->belongsTo('App\Property','property_id');
    }

}
