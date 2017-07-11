<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index(){
    	return view('transaction.Contracts');
    }

    public function view(){
    	return view('transaction.ViewContracts');
    }
    public function showdetails(){
    	return view ('transaction.ShowDetails');
    }

    public function create()
    {
    	return view('transaction.CreateContract');
    }
}
