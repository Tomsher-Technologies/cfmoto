<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Course;
use App\Models\Blogs;
use App\Models\Faq;
use App\Models\User;
use App\Models\Usercourses;
use App\Models\Product\Product;
use App\Models\Product\ProductCategory;
use App\Models\Pages;
use App\Models\PageTranslations;
use App\Models\PageSeos;
use App\Models\HomeBanner;
use App\Models\Careers;
use App\Models\HeritageLists;
use App\Models\CareerApplications;
use App\Models\Branches;
use App\Models\Services;
use App\Models\Contact;
use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Mail\ContactEnquiry;
use App\Models\Contactdetails;
use App\Models\Dynamiccontents;
use App\Models\Serviceslist;
use Illuminate\Support\Facades\URL;
#use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Storage;
use Validator;
use Mail;
use DB;
use Hash;
#use Auth;

class FrontendController extends Controller
{
    public function home()
    {    
        return view('frontend.index');  
    }
    public function t250clx()
    {    
        return view('frontend.250cl-x');  
    }
    public function t250nk()
    {    
        return view('frontend.250nk');  
    }
    public function t250sr1()
    {    
        return view('frontend.250sr1');  
    }
    public function t250sr2()
    {    
        return view('frontend.250sr2');  
    }
    public function t300clx()
    {    
        return view('frontend.300cl-x');  
    }
    public function t300nk()
    {    
        return view('frontend.300nk');  
    }
    public function t300sr()
    {    
        return view('frontend.300sr');  
    }
    public function f450clc()
    {    
        return view('frontend.450cl-c');  
    }
    public function f450nk()
    {    
        return view('frontend.450nk');  
    }
    public function f450sr()
    {    
        return view('frontend.450sr');  
    }
    public function f450srs()
    {    
        return view('frontend.450sr-s');  
    }
    public function s650gt()
    {    
        return view('frontend.650gt');  
    }
    public function s650mt()
    {    
        return view('frontend.650mt');  
    }
    public function s650nk()
    {    
        return view('frontend.650nk');  
    }
    public function s700clxadventure()
    {    
        return view('frontend.700cl-x-adventure');  
    }
    public function s700clxheritage()
    {    
        return view('frontend.700cl-x-heritage');  
    }
    public function s700clxsport()
    {
        return view('frontend.700cl-x-sport'); 
    }
    public function s700mt()
    {
        return view('frontend.700mt'); 
    }
    public function e800mtexplore()
    {
        return view('frontend.800mt-explore'); 
    }
    public function e800mtsport()
    {
        return view('frontend.800mt-sport'); 
    }
    public function e800mttouring()
    {
        return view('frontend.800mt-touring'); 
    }
    public function e800nk()
    {
        return view('frontend.800nk'); 
    }
    public function o1250trg()
    {
        return view('frontend.1250tr-g'); 
    }
    public function aboutbrand()
    {
        return view('frontend.about-brand'); 
    }
    public function asparracing()
    {
        return view('frontend.aspar-racing'); 
    }
    public function becomeadistributor()
    {
        return view('frontend.become-a-distributor'); 
    }
    public function brands()
    {
        return view('frontend.brands'); 
    }
    public function cforce110()
    {
        return view('frontend.cforce-110'); 
    }
    public function cforce450l()
    {
        return view('frontend.cforce-450l'); 
    }
    public function cforce625touring()
    {
        return view('frontend.cforce-625-touring'); 
    }
    public function cforce625touringoverland()
    {
        return view('frontend.cforce-625-touring-overland'); 
    }
    public function cforce850touring()
    {
        return view('frontend.cforce-850-touring'); 
    }
    public function cforce850xc()
    {
        return view('frontend.cforce850xc'); 
    }
    public function cforce1000()
    {
        return view('frontend.cforce-1000'); 
    }
    public function cforce1000overland()
    {
        return view('frontend.cforce-1000-overland'); 
    }
    public function cforce1000touring()
    {
        return view('frontend.cforce-1000-touring'); 
    }
    public function cforceev110()
    {
        return view('frontend.cforce-ev110'); 
    }
    public function companyoverview()
    {
        return view('frontend.company-overview'); 
    }
    public function contactus()
    {
        return view('frontend.contact-us'); 
    }
    public function cx2e()
    {
        return view('frontend.cx-2e'); 
    }
    public function cx5e()
    {
        return view('frontend.cx-5e'); 
    }
    public function global()
    {
        return view('frontend.global'); 
    }
    public function index2()
    {
        return view('frontend.index-2'); 
    }
    public function menu()
    {
        return view('frontend.menu'); 
    }
    public function news()
    {
        $blog = Blogs::where('status', '=', 1)->orderBy('sort_order', 'ASC')->get();
        return view('frontend.news',compact('blog')); 
    }
    public function newsbk()
    {
        return view('frontend.news-bk'); 
    }
    public function newsdetails(Request $request)
    {
        $slug = $request->slug;
        $blogs = Blogs::where('status',1)->where('slug',$slug)->first();
        return view('frontend.news-details', compact('blogs'));
    }
    public function productdetails()
    {
        return view('frontend.product-details'); 
    }
    public function racing()
    {
        return view('frontend.racing'); 
    }
    public function ride()
    {
        return view('frontend.ride'); 
    }
    public function stpapio()
    {
        return view('frontend.st-papio'); 
    }
    public function uae()
    {
        return view('frontend.uae'); 
    }
    public function uforce600()
    {
        return view('frontend.uforce-600'); 
    }
    public function uforce1000()
    {
        return view('frontend.uforce-1000'); 
    }
    public function uforce1000xl()
    {
        return view('frontend.uforce-1000-xl'); 
    }
    public function xopapioracer()
    {
        return view('frontend.xo-papio-racer'); 
    }
    public function xopapiotrail()
    {
        return view('frontend.xo-papio-trail'); 
    }
    public function zforce800trail()
    {
        return view('frontend.zforce-800-trail'); 
    }
    public function zforce950sport()
    {
        return view('frontend.zforce-950-sport'); 
    }
    public function zforce950sport4()
    {
        return view('frontend.zforce-950-sport-4'); 
    }
    public function zforce1000sportr()
    {
        return view('frontend.zforce-1000-sport-r'); 
    }
    public function privacy()
    {
        return view('frontend.privacy'); 
    }
    public function marketing()
    {
        return view('frontend.marketing'); 
    }
}