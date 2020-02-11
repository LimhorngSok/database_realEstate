<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    // function detail(){
    //     $detail = DB::table('properties_detail')->where('property_id','=',$this->id)->first();
    //     return $detail;
    // }
    function bcontract(){
        return $this->hasOne(BuyingContract::class);
    }

    function add(){

    }
    public $timestamps = false;

    public function user(){
      return $this->belongsTo('App\User','agent_id');
    }
    public function agents(){
      return $this->hasOne('App\Agent');
    }
    public function detail(){
      return $this->hasOne('App\Property_detail');
    }
    public function type(){
      return $this->hasMany('App\Type');
    }


}
