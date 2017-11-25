<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class PagesController extends Controller
{
    public function getIndex() {
       return view('pages/welcome');
    }
    
    public function getAbout() {
        $first = 'Sneha';
        $last = 'Avula';
        
        $fullname = $first." ".$last;
        $description = "I am a software developer";
        $interests = "Atoms, Genes and Cosmos";
        $data = [];
        $data['description'] = $description;
        $data['interests'] = $interests;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }
    
    public function getContact() {
        $phone='617-304-4609';
         $email='snehamr23@gmail.com';
        return view('pages/contact')->withPhone($phone)->withEmail($email);;
    }
    
}
