<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;
 
    //list of fields that we can mass assignment 
    //small number of fields 
    protected $fillable = ['title', 'description' , 'category' , 'author' , 'signees'];
    //expect an array 
   

    //we should use one of them not both
    //the list of fields that we cannot 
    //protected $guarded; //large number of fields and we want to exclude some of them
    


}
