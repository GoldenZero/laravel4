<?php

class Driver extends Eloquent {
	protected $guarded = array();
	protected $hidden = array('pin','vehicle_id','password','created_at','updated_at');
	public static $rules = array();
	protected $appends = array('fullname');

	  public function vehicle()
    {
        return $this->belongsTo('Vehicle');
    }
    public function getFullnameAttribute()
	{
	    return $this->firstname." ".$this->lastname;
	}
}
