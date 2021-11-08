<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function about(){
        return view("about" , 
        ['title' =>'About'],
        ['pageTitle' => 'About']);
    }
    

    public function home(){
        return view("home", [
            'title'=>'Home',
            'pageTitle' => 'Home',
        ]);

}
}
