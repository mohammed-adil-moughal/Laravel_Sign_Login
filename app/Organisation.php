<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
     protected $table="organisations";

    protected  $fillable = array('name','address','contact_person','contact_email','phone');

  
}
