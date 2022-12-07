<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    //get and show all listings
    public function index(Request $request){
        //since we are getting a ?tag= Laravel on clicking the tags
        //if we wanna see why we are getting this route
        //we will use the die dump function
        //we gotta pass a request into dd first as we wanna use Dependency injection
        // so to pass a request we use Request $request
        ///dd($request);
        //we can also use a request helper. We don['t] need to pass any values in index for that
        // all we gotta do is create a request funcction as a parameter inside dd
        //Example -> dd(request());
        //if we want to view the specific request we could do 
        //Example -> dd(request()->tag);
        //or
         //Example -> dd(request('tag'));
        //by using the above 
        //we can get the tag and we can filter the listings using those tags
        // we can do this using the scope filter in the models.Listing
        return view('listings.index',
        [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
            //'listings'=> Listing::all()//instead of all() we can do latest();
            //using latest sorts our cards/listings in latest order
            //all() gives listings/posts in random order

        ]
        );


    }

    //get and show single listing
    public function show(Listing $listing){
        return view('listings.show',
        [

            'listing'=> $listing
        ]
        );
    }
}
