<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


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
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
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

    //show create form
    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        //this validate is gonna takein an array

        $formFields = $request->validate([
            'title'=>'required',
            //the company name has to be unique hence
            //there is more than one rule
            //so we use an array to pass the rules
            //inside unique
            //we pass in the table that we are using which is listings
            //and we pass in the field that we are using it for that is company
            'company'=>['required', Rule::unique('listings', 'company')],
            'location'=> 'required',
            'website' => 'required',
            'email'=>['required', 'email'],//should be formatted like an email
            'tags'=> 'required',
            'description'=> 'required'
            //if any of these fails, then the form will send an error message through the redirect

        ]);
        if($request->hasFile('logo')){
            //setting it to the path and uploading to the database at the same time
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Listing::create($formFields);
        //we can create a listing seperately or together with the redirect;
        //Session::flash('message','Listing has been created');
        return redirect('/')->with('message','Listing Created successfully');//we now need a view to show this message
    }

    //Show Edit Form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=>$listing]);
    }
























    //Update listings data
   

    public function update(Request $request, Listing $listing){
        //this validate is gonna takein an array

        $formFields = $request->validate([
            'title'=>'required',
            //the company name has to be unique hence
            //there is more than one rule
            //so we use an array to pass the rules
            //inside unique
            //we pass in the table that we are using which is listings
            //and we pass in the field that we are using it for that is company
            'company'=>['required'],
            'location'=> 'required',
            'website' => 'required',
            'email'=>['required', 'email'],//should be formatted like an email
            'tags'=> 'required',
            'description'=> 'required'
            //if any of these fails, then the form will send an error message through the redirect

        ]);
        if($request->hasFile('logo')){
            //setting it to the path and uploading to the database at the same time
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        //instead of getting Listing:: and a static method for ->create we need the current listing 
        $listing->update($formFields);
        //we can create a listing seperately or together with the redirect;
        //Session::flash('message','Listing has been created');
        return back()->with('message','Listing  Updated  successfully');//we now need a view to show this message
    }

    //delete listing
    public function destroy(Listing $listing){

        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted SUCCESSFULLY');

    }

}
