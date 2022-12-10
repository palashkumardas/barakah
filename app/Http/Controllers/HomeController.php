<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\PrivacyPolicy;
use App\Models\TermsConditions;
use App\Models\CookiesPolicy;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    
    public function about()
    {
        $about = About::get()->first();
        return view('frontend.pages.about', compact('about')); 
    }

    
    public function contact()
    {
        $contact = Contact::get()->first();
        return view('frontend.pages.contact', compact('contact')); 
    }

        
    
    public function privacy()
    {
        $privacy = PrivacyPolicy::get()->first();
        return view('layouts.privacy_policy', compact('privacy'));
    }
        
    
    public function terms()
    {
        $terms = TermsConditions::get()->first();
        return view('layouts.terms_condition', compact('terms'));
    }        
    
    public function cookies()
    {
        $cookies = CookiesPolicy::get()->first();
        return view('layouts.cookies', compact('cookies'));
    }

    public function UserLogout(){
        Auth::logout();
        return Redirect('/');
    }

}
