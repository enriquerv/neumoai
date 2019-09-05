<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Redirect;
use Sentinel;
use Session;
use App\Product;
use App\ViewProduct;
use App\ViewService;
use App\ProductModule;
use App\Status;
use App\WebContact;
use App\SendMail;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->compact = ['active'];
    }

    /*
     * Website
     */
    public function index(){
    	$active = 'index';
    	return view('index', compact($this->compact));
    }

    public function aboutus(){
        $active = 'aboutus';
        return view('aboutus', compact($this->compact));
    }

    public function neumonia(){
        $active = 'neumonia';
        return view('neumonia', compact($this->compact));
    }

    public function contact(){
        $active = 'contact';
        return view('contact', compact($this->compact));
    }
}
