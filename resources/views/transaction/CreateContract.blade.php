@extends('layout.app')
@section('link')
<link rel="stylesheet" href="select2/select2.css">
@stop
@section('content-header')

<h1> Create New Contract</h1>
      
@stop

@section('content')
	<div class="row">
        <!-- left column -->
        <form class ="form-horizontal" id="myform">
         <div class="col-md-8">
        	<div class ="box box primary">
        		<div class= "box-header with-border">
        				<h2 class ="box-title"> <b>Business Information</b></h2>
        				<div class ="box-body">
        					<div class="form-group">
        						<div class="col-xs-3">
        							<label for="lastname"><b>Permit no:</b></label>
        						</div>
        						<div class="col-xs-7">
        							<input type="text" class="form-control" id="lastname" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-3">
        							<label for="lastname"><b>Business Name:</b></label>
        						</div>
        						<div class ="col-xs-7">
        							<input type="text" class="form-control" id="firstname" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-3">
        							<label for="lastname"><b>Business Type:</b></label>
        						</div>
        						<div class ="col-xs-7">
        							<div class="form-group">
        								<select class="form-control select2" multiple="multiple" data-placeholder=" Select Business Type" style="width: 80%;">
        									<option>Wholesale</option>
        									<option>Retail</option>
        									<option>Trade</option>
        									<option>Merchandise</option>
        								</select>
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-3">
        							<label for="lastname"><b>Product Type:</b></label>
        						</div>
        						<div class ="col-xs-7">
        							<div class="form-group">
        								<select class="form-control select2" multiple="multiple" data-placeholder=" Select Product Type" style="width: 80%;">
        									<option>Garments</option>
        									<option>Food</option>
        									<option>Goods</option>
        									<option>Bags</option>
        								</select>
        							</div>
        						</div>
        					</div>
        					
        				</div>
        		</div>
        		
        	</div>

        </div>
         <div class="col-md-8">
            	<div class ="box box primary">
            		<div class= "box-header with-border">
            				<h2 class ="box-title"> <b>Stall Information</b></h2>
            				<div class ="box-body">
            					<div class="form-group">
            						<div class="col-xs-3">
            							<label for="lastname"><b>Stall Name:</b></label>
            						</div>
            						<div class="col-xs-4">
            							<input type="text" class="form-control" id="stallName" data-toggle="modal" data-target="#table" placeholder="Select Stall" >
            						</div>
            					</div>
            					<div class="form-group">
            						<div class="col-xs-3">
            							<label for="lastname"><b>Stall Type:</b></label>
            						</div>
            						<div class ="col-xs-4">
            							<input type="text" class="form-control" id="stallType" value="" readonly>
            						</div>
            					</div>
            					<div class="form-group">
            						<div class="col-xs-3">
            							<label for="lastname"><b>Floor No:</b></label>
            						</div>
            						<div class ="col-xs-4">
            							<input type="text" class="form-control" id="middlename" value="" readonly>
            						</div>
            					</div>
            				</div>
            				<h2 class ="box-title"> <b>Rate Information</b></h2>
            				<div class="form-group">
                                    <div class="col-xs-3">
                                        <label for="lastname"><b>Stall Rate:</b></label>
                                    </div>
                                    <div class ="col-xs-4">
                                        <input type="text" class="form-control" id="middlename" value="" readonly>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-xs-3">
                                        <label for="lastname"><b>Rate per Day:</b></label>
                                    </div>
                                    <div class ="col-xs-4">
                                        <input type="text" class="form-control" id="middlename" value="" readonly>
                                    </div>
                                </div>
            		</div>
            		
            	</div>


            </div>
             <div class="col-md-8">
        	<div class ="box box primary">
        		<div class= "box-header with-border">
        				<h2 class ="box-title"> <b>Terms and Conditions</b></h2>
        				<div class ="box-body">
        					<div class="form-group">
        						<div class="col-xs-3">
        							<label for="lastname"><b>Implementation Date:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<div class="input-group date">
        								<div class="input-group-addon">
        									<i class="fa fa-calendar"></i>
        								</div>
        								<input type="text" class="form-control pull-right" id="datepicker">
        							</div>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-3">
        							<label for="lastname"><b>Contract Validity:</b></label>
        						</div>
        						<div class ="col-xs-5">
        							<input type="text" class="form-control" id="firstname" readonly>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-3">
        							<label for="lastname"><b>Expiration Date:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<div class="input-group date">
        								<div class="input-group-addon">
        									<i class="fa fa-calendar"></i>
        								</div>
        								<input type="text" class="form-control pull-right" id="datepicker">
        							</div>
        						</div>
        					</div>
        					<div class ="form-group">
        						<div>
        							<button class ="btn btn-success" style="margin-left: 75%;">Submit</button>
        							<button class ="btn btn-danger" align ="right">Cancel</button>
        						</div>
        					</div>
        					
        					
        				</div>
        		</div>
        		
        	</div>

        </div>
        	

        </form>


      </div>
      <!-- /.row -->

               <!-- MODAL -->
          <!-- Modal -->
<div class="modal fade" id="table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Stall Name</h4>
      </div>
      <div class="modal-body">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th>Stall Name</th>
                  <th>Type</th>
                  <th>Floor no.</th>
                  <th>Stall Rate</th>
                  <th>Rate per Day</th>
                </tr>
                </thead>
                <tbody>
           			<tr>
           				<td><input type="radio"></td>
           				<td>A01</td>
           				<td> Box Type</td>
           				<td>Floor 1</td>
           				<td>Php 300.00</td>
           				<td>Php 50.00</td>
           			</tr>
                </tbody>
              </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Yes</button>
      </div>
    </div>
  </div>
</div>
@stop
@section('script')
<script src="select2/select2.full.min.js"></script>
<script>
$(function () {
	$(".select2").select2();
});
	
</script>
<script>
  		  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
  	</script>
@stop