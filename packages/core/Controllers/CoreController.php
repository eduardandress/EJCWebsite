<?php 

namespace Core\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

 
class CoreController extends Controller
{
    
    /**
    * Landing page
    */
    public function index() {
        return view('core::EJCTemplate.pages.home'
        );
    }
    /**
    * Demos page
    */
    public function demos() {
        return view('core::EJCTemplate.pages.demos'
        );
    }
    
   
}
