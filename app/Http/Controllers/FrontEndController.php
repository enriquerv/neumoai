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
        if(!Session::has('cart')) Session::put('cart', array());

        $this->compact = ['active', 'cart'];
    }

    /*
     * Website
     */
    public function index(){
    	$active = 'index';
    	$cart = Session::get('cart');

    	return view('index', compact($this->compact));
    }
}
