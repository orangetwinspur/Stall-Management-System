<?php

namespace App\Http\Controllers;
use App;
use DB;
use App\Vendor;
use App\Stall;
use App\StallRate;
use App\StallType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class ApplicationController extends Controller
{
   

    public function member()
    {
    	return view ('transaction.Member');
    }

     public function Memview()
     {
     	return view ('transaction.View');
     }
     public function Update()
     {
     	return view ('transaction.Update');
     }

     public function create()
     {  //GET NEXT STALL HOLDER ID///

        $nextId = "SH-" . date('Y'); 
         $def = DB::table('tblvendor')->max('venID')+1; 
        
        if($def == null || $def == 0)
        {
            $def = 1; //if there is no data in database
        }
        $nextId = $nextId. str_pad($def, 5, 0, STR_PAD_LEFT);
        //END OF GET NEXT STALL HOLDER ID///

        /// SELECT2 DROPDOWN POPULATE///

        $stall = Stall::with('StallType','Floor.Building','StallUtil.Utility')->get();

        $buildingNames = DB::table('tblbuilding')->pluck('bldgName');
        $buildingNames = $buildingNames->toArray();
        $buildingCount = DB::table('tblbuilding')->count();

        //END OF SELECT2 DROPDWON//


        /// STALL FEES FETCH DATA ///

        /*$fees = DB::table('tblstall')
                ->join('tblstalltype','tblstall.stypeID','tblstalltype.stypeID')
                ->join('tblutilities','tblutilities.utilID','tblstall_utilities.utilID')
                ->join('tblstall_utilities','tblstall_utilities.stallID','tblutilities.stallID')
                ->select('tblstall.*','tblstalltype.stypeID','tblstalltype.stypeLength','tblstalltype.stypeWidth','tblstall_utilities.RateType','tblutilities.utilName','tblutilities.utilDefaultMR')
                ->get();*/


         
         /*-> join('tblstalltype','tblstall.stypeID','=','tblstalltype.stypeID')
                    ->join('tblfloor','tblstall.floorID','=','tblfloor.floorID')
                    ->join('tblbuilding','tblbuilding.bldgID','=','tblfloor.bldgID')
                    
                    ->select('tblstall.*','tblstalltype.stypeName','tblfloor.floorNo','tblbuilding.bldgName')
                    ->where('stallStatus',1)
                    ->get();*/
         
        //END OF STALL FEES FETCH DATA//
        
        return view('transaction.Application',compact('nextId','stall','buildingNames','buildingCount'));
    }
 

    function addVendorInfo(Request $request) //new vendor
     {

     
        $vendor = new Vendor;
        $rules = ['fname' => 'required|max:191',
            'lname' =>'required|max:191',
            'sex' => 'required',
            'address' => 'required',
            'mob' =>'required|numeric',
            'email' =>'required|unique:tblvendor,venEmail',
            'orgname' =>'nullable'];

      $validator = Validator::make(Input::all(),$rules);

      if($validator->fails())
      {
        return Redirect::to('/Registration');
      }
      else{

        $vendor->venFName = $request->get('fname');
        $vendor->venMName = $request->get('mname');
        $vendor->venLName = $request->get('lname');
        $vendor->venSex = $request->get('sex');
        $vendor->venAddress = $request->get('address');
        $vendor->venBday = $request->get('DOBYear')+ "-" + $request->get('DOBMonth') + "-" + $request->get('DOBDay');
        $vendor->venContact =$request->get('mob');
        $vendor->venEmail = $request->get('email');

        $vendor->save();}
        
      
     }


    function checkEmail()
{
    $vendor =  Vendor::where('venEmail',$_POST['email'])->get();
    if(count($vendor) != 0)
    
        return "false";
    
    else
    
        return "true";
}
 function getVendor(){
      $vendor = Vendor::all();
         //select venID, CONCAT name, actions//
      $data = array();
      foreach ($vendor as $ven) {
            $ven['actions'] = "
                    <button class='btn btn-primary'  data-toggle=
                  'modal' data-target='#update' onclick='getInfo(this.value)' value = '".$ven['venID']."' >Update</button>
                    <button class='btn btn-danger' data-toggle=
                  'modal' data-target='#delete'>Delete</button>
            ";
        $data['data'][] = $ven;
      }
        
      if(count($data) == 0){
          echo '{
              "sEcho": 1,
              "iTotalRecords": "0",
              "iTotalDisplayRecords": "0",
            "aaData": []
          }';

          return;
      }
        
        else
        return (json_encode($data));
    }
    function getVendorInfo()
    {
        $vendor = Vendor::where('venID',$_POST['id'])->get();
        return (json_encode($vendor[0]));
    }

    function contractTable()
    {
      $rent = Rent::with('Vendor')->get();

    }
}
    