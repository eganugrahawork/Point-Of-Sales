<?php

namespace App\Http\Controllers\Admin\Cashier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index(){
        return view('admin.cashier.index');
    }
}
