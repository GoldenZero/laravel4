<?php

class Vehicle extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	protected $hidden = array('created_at','updated_at','id');

}
