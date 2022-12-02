<?php

namespace App\Models;
class Listing{
    public static function all(){
        return [
            [
                'id'=>1,
                'title'=>'Listing One',
                'description'=> 'lorem epsum'
            ],
            [
                'id'=>2,
                'title'=>'Listing Two',
                'description'=> 'lorem epsum'
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();  //when u have a class and you want to call another method use SELF to call a static funtion/method
        foreach($listings  as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }


    }
}



?>
