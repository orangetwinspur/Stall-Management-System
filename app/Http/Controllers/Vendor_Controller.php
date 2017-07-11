<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Vendor;

class Vendor_Controller extends Controller
{
    //

  function addVendorInfo() //new vendor
     {

     
        $vendor = new Vendor;

        $vendor->venFName = $_POST['fname'];
        $vendor->venMName = $_POST['mname'];
        $vendor->venLName = $_POST['lname'];
        $vendor->venAddress = $_POST['address'];
        $vendor->venBday = $_POST['datepicker'];
        $vendor->venContact =$_POST['mob'];
        $vendor->venEmail = $_POST['email'];

        $vendor->venOneAssoc = $_POST['assoc_one'];
        $vendor->venTwoAssoc = $_POST['assoc_two'];

        $vendor->save();

      
     }
}
