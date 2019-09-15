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
        $this->compact = ['active', 'header'];
    }

    /*
     * Website
     */
    public function index(){
    	$active = 'index';
        $header = ['index', 'index'];
    	return view('index', compact($this->compact));
    }

    public function aboutus(){
        $active = 'aboutus';
        $header = ['aboutus', 'NOSOTROS'];
        return view('aboutus', compact($this->compact));
    }

    public function neumonia(){
        $active = 'neumonia';
        $header = ['neumonia', 'NEUMONÍA'];
        return view('neumonia', compact($this->compact));
    }

    public function contact(){
        $active = 'contact';
        $header = ['contact', 'CONTACTO'];
        return view('contact', compact($this->compact));
    }
}
