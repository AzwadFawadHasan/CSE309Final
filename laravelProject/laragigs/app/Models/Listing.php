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
}



?>
