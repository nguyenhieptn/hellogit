<?php
class News extends Eloquent {
    public static $rules = [
        'name' => 'required'
    ];

    protected $fillable = ['name'];
    public $timestamps = false;

}