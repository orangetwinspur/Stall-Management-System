@extends('layout.app')
@section('content-header')
<style>
.col-md-12 column {  
   text-align:center;
}
.col-md-12 column form {
   display:inline-block;
}

#tenant_no{

    margin-bottom: 30px;
}
legend{
    margin-left: 10px;
    color: #3c8dbc;
}

button{
    margin-right: 10px;
}


</style>

<h1>Registration</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registration</li>
      </ol>
  @stop

  @section('content')
   <div class="row">
        <!-- left column -->
       {!! Form :: open(array('url'=>'addVendor')) !!}
        <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="col-md-12">
        	<div class ="box box-primary">
              <fieldset>
        		<div class= "box-header">
                      
        				<legend> <b>Vendor Details</b></legend>
                </div> 
                <!--/.box-header-->
                       
        				<div class ="box-body">
                        <div class = "col-md-12 form-group row">
                            <div class = "col-md-4">
                            <!--label><b>Vendor No:</b></label-->
                            {!! Form:: label('Vendor No:','ven') !!}
                            <input type = "text" class = "form-control" id = "vendor_no" value = "{{ $nextId }}" disabled=""  />
                            
                            </div>

                            <div class = "col-md-8">
                              
                            </div>
                            
                        </div>

        					<div class="col-md-12 form-group row">
        						<div class="col-md-4">
        							<label for="firstName"><b>*First Name:</b></label>
        						
        							<input type="text" class="form-control" id="fname" required>
        						</div>
                                <div class="col-md-4">
                                    <label for="middleName"><b>Middle Name:</b></label>
                                
                                    <input type="text" class="form-control" id="mname" >
                                </div>
                                <div class="col-md-4">
                                    <label for="lastname"><b>*Last Name:</b></label>
                                
                                    <input type="text" class="form-control" id="lname" required>
                                </div>
        					</div>
        					
        					
        					<div class=" col-md-12 form-group row">
        						<div class="col-md-3">
        							<label for="sex"><b>*Sex:</b></label>
        						
        						<div class="radio" style="margin-left: 30px;">
        							<label><input type="radio" name="sex" value="1" checked="checked"><b>Male</b></label>
        							<label><input type="radio" name="sex" value="0"><b>Female</b></label>
        						</div>
                                </div>

                                <div class = "col-md-3">
                                <label for="lastname"><b>*Birthday:</b></label>
                                
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                </div>

                                <div class = "col-md-3">
                                        <label for = "email">*Email Address:</label>
                                        <input type = "email" class = "form-control" id = "email"/>
                                </div>

                                <div class="col-md-3">
                                    <label for="phone"><b>* Mobile:</b></label>
                                    <input type="text" class="form-control" id="mob" required>
                                 </div>



                            </div>

                            <div class="col-md-12 form-group row">
                                <div class = "col-md-12">
                                    <label for="address"><b>*Home Address:</b></label>
                            
                                    <textarea rows="4" class="form-control" id="address"></textarea>
                                </div>
                            </div>
                            

                            <div class = "col-md-12 form-group row">
                                <div class = "col-md-6">
                                <label class = "checkbox-inline" > 

                                <input type = "checkbox" id = "check_assoc"><b>Associate Stall Holder(s)</b> <small>(Maximum of 2 people)</small></label>

                                </div>
                            </div>

                            <div class = "col-md-12 form-group row" id = "assoc_hold">
                                <div class ="col-md-6">
                                        <label for = "assoc1"><b>Associate 1:</b></label>
                                        <input type = "text" class = "form-control"/ placeholder="Full Name" id = "assoc_one">
                                </div>
                                 <div class ="col-md-6">
                                        <label for = "assoc2"><b>Associate 2:</b></label>
                                        <input type = "text" class = "form-control"/ placeholder="Full Name" id = "assoc_two">
                                </div>
                            </div>
                            </fieldset>
                   

                <div class = "box-footer">
                        <div class = "btn-group pull-right">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                    <button type="clear" class="btn btn-danger" onclick="clearForm()" >Clear</button>
                    </div>
               </div>
                        
        	   </div> <!--/.box-body-->

              
        		

        			
        	</div>
            <!--/.box-primary-->
               
               
    
          </div>
          <!--/.col-md-12-->
     {!! Form :: close() !!}


      </div>
      <!-- /.row -->
  @stop
  @section('script')
  	<script>
  		 
  function clearForm()
{
    $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
    $(':checkbox, :radio').prop('checked', false);
}

$(document).ready(function(){

alert('loaded');
        $('#assoc_hold').hide();
  
        $(document).on('click','#check_assoc',function(){
                if($('#check_assoc').prop('checked') == true)
            {
                  alert('hide');
                $('#assoc_hold').fadeIn();
                   

            }
            else
            {
              //  alert('unihide');
                $('#assoc_hold').fadeOut();
            }
        });
 
///submit form////
$('#applyForm').submit(function (e)
{  
    e.preventDefault();
    if(!${'#applyForm'}.valid()) return;

    var formData = new FormData($(this)[0]);

    $.ajax({

        type:"POST"
        , url: '/addVendor'
        ,data: formData
        ,processData: false
        ,context: this
        ,success: function (data)
        {
            toastr.success('Successfully Registered!');
          
        }

    });
});


  ////validate form/////
    $('#applyForm').validate({
        rules:{
            venFName:{
                required:true,
                type:'post'
                data{
                    venFName:function(){
                        return $('#applyForm').find("input[name=venFName]").val();
                    },
                     _token: function()
                    {
                        return $("#_token").val();
                    }
                }
            }
        },

        messages: {
            venFName: {
                required: "Enter First Name"
            }
        }
        ,errorClass: "error-class"
        ,validClass: "valid-class"
    });

   

});


  	</script>
  @stop