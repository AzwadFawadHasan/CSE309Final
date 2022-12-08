<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    //in laravel by default we have some protections while adding data to db they have to be put into mass fillable properly
    protected $fillable = ['title', 'company', 'location', 'website','email', 'description','tags'];    

    public function scopeFilter($query, array $filters){//using this 
        //in our listing model  we will be able to filter, 

        if($filters['tag'] ?? false){//if this is filters['tag'] is false then move on to inside this if statement
            $query->where('tags','like', '%' . request('tag') . '%');//we are doing a sqllite query
            //the % sign represesnt anything can be before or after the route
            //then we will concatenate whatever the request tag is 
            //we then again concate it with another percent sign


        }
        if($filters['search'] ?? false){//if this is filters['tag'] is false then move on to inside this if statement
            $query->where('title','like', '%' . request('search') . '%')
            ->orwhere('description','like', '%' . request('search') . '%')
            ->where('tags','like', '%' . request('search') . '%');//we are doing a sqllite query
            //the % sign represesnt anything can be before or after the route
            //then we will concatenate whatever the request tag is 
            //we then again concate it with another percent sign


        }

    }
}
