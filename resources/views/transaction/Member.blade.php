@extends('layout.app')
@section('content-header')

<h1>List of Vendors</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">List</li>
      </ol>
  @stop

  @section('content')
  	  <div class="box box-primary">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class = "table-responsive">
              <table id="tblmember" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
           			
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- MODAL -->
          <!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete</h4>
      </div>
      <div class="modal-body">
        <h2>Are you sure?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Yes</button>
      </div>
    </div>
  </div>
</div>



<!--modal view-->
 <div class="modal fade" tabindex="-1" id="update" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <form action="" method="post" id="updateform">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Update Stall Holder Details</h4> </div>
                                <div class="modal-body">
                                    <div class = "col-md-12 form-group row">
                                        <div class = "col-md-6">
                                        <label><b>Stall Holder No:</b></label>
                                    
                                        <input type = "text" class = "form-control" id = "vendor_no" name = "vendor_no" value = "" disabled=""  />
                                        
                                        </div>

                                      
                            
                                     </div>

                            <div class = "col-md-12 form-group row">
                            <div class = "col-md-12">
                            <label for = "org">Name of Group/Organization<i><b>&nbsp&nbsp(If Applicable)</i></b></label>
                            <input type = "text" class = "form-control" id = "orgname" name = "orgname" />
                        </div>
                        </div>
                  <div class="col-md-12 form-group row">

                    <div class="col-md-4">

                      <label for="firstName"><b>*First Name:</b></label>
                    
                      <input type="text" class="form-control" id="fname" name ="fname" required>
                    </div>
                                <div class="col-md-4">
                                    <label for="middleName"><b>Middle Name:</b></label>
                                
                                    <input type="text" class="form-control" id="mname" name="mname" >
                                </div>
                                <div class="col-md-4">
                                    <label for="lastname"><b>*Last Name:</b></label>
                                
                                    <input type="text" class="form-control" id="lname" name="lname" required>
                                </div>
                  </div>
                  
                  
                  <div class=" col-md-12 form-group row">
                    <div class="col-md-6">
                      <label for="sex"><b>*Sex:</b></label>
                    
                    <div class="radio" style="margin-left: 30px;">
                      <label><input type="radio" name="sex" value="1" checked="checked"><b>Male</b></label>
                      <label><input type="radio" name="sex" value="0"><b>Female</b></label>
                    </div>
                                </div>

                                <div class = "col-md-6">
                                <label for="bday"><b>*Birthday:</b></label>
                                <div class= "form-inline">
                                <select name="DOBMonth" id = "DOBMonth">
    <option> - Month - </option>
    <option value="01">January</option>
    <option value="02">Febuary</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>

<select name="DOBDay" id = "DOBDay">
    <option> - Day - </option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31" >31</option>
</select>

<select name="DOBYear" id = "DOBYear">
    <option> - Year - </option>
    
    
</select>
                                </div>
                                </div>
                                 </div>
                                 <div class = "col-md-12 form-group row">
                                <div class = "col-md-6">
                                        <label for = "email">*Email Address:</label>
                                        <input type = "email" class = "form-control" id = "email" name = "email"/>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone"><b>* Mobile:</b></label>
                                    <input type="text" class="form-control" id="mob" name="mob"required>
                                 </div>
                                 </div>


                           
                            <div class="col-md-12 form-group row">
                                <div class = "col-md-12">
                                    <label for="address"><b>*Home Address:</b></label>
                            
                                    <textarea rows="4" class="form-control" id="address" name="address"></textarea>
                                </div>
                            </div>
                            
                                
                                </div>
                                <div class="modal-footer">
                                    
                                    <button class="btn btn-info pull-right" style="background-color:#191966">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end of modal view-->
  @stop

  @section('script')
  	<script>
    var obj;
     function getInfo(id) {
            $.ajax({
                type: "POST"
                , url: '/getVendorInfo'
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , "id": id
                }
                , success: function (data) {
                    obj = JSON.parse(data);
                    $('#update').modal('show');
                }
            });
        }
          $(".modal").on('shown.bs.modal', function () {
                getVendor();
                if ($(this)[0] == $('#update')[0]) {
                   // $(this).find('input[name=vendor_no]').val("SH-"+ date('Y') +obj.stallID);
                    $(this).find('input[name=orgname]').val(obj.venOrgName);
                    $(this).find('input[name=fname]').val(obj.venFName);
                     $(this).find('input[name=mname]').val(obj.venMName);
                      $(this).find('input[name=lname]').val(obj.venLName);
                }
            });
         
 $('#tblmember').DataTable({
            ajax: '/getVendor'
            , responsive: true
            , "columns": [
                 {
                    "data": "venID"
                    }
                    , 
                    {
                      "data" : function(data, type, dataToSet){
                            return (data.venFName +" "+data.venLName);
                        }
                    },
                    {
                    "data": "actions"
                    }
            ]
            , "columnDefs": [
                {
                    "width": "30%"
                    , "searchable": false
                    , "sortable": false
                    , "targets": 2
                    }
  ]
        });


</script>

  @stop
