@extends('layout.app')
@section('content-header')

<h1>Registration</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registration</li>
      </ol>
  @stop

  @section('content')
   <div class="row">
        <!-- left column -->
        <form class ="form-horizontal" id="myform">
        	        <div class="col-md-6">
        	<div class ="box box primary">
        		<div class= "box-header with-border">
        				<h2 class ="box-title"> <b>Personal Information</b></h2>
        				<div class ="box-body">
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Lastname:</b></label>
        						</div>
        						<div class="col-xs-8">
        							<input type="text" class="form-control" id="lastname" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Firstname:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<input type="text" class="form-control" id="firstname" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Middlename:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<input type="text" class="form-control" id="middlename" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Sex:</b></label>
        						</div>
        						<div class="radio">
        							<label><input type="radio" name="sex" value="1"><b>Male</b></label>
        							<label><input type="radio" name="sex" value="0"><b>Female</b></label>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Birthday:</b></label>
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
        						<div class="col-xs-2">
        							<label for="lastname"><b>Home Address:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<textarea rows="4" class="form-control" id="address"></textarea>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Mobile:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<input type="text" class="form-control" id="lastname" required>
        						</div>
        					</div>
        				</div>
        		</div>
        		
        	</div>

        </div>
         <div class="col-md-6">
        	<div class ="box box primary">
        		<div class= "box-header with-border">
        				<h2 class ="box-title"> <b> Portal Account Information</b></h2>
        				<div class ="box-body">
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>UserName:</b></label>
        						</div>
        						<div class="col-xs-8">
        							<input type="text" class="form-control" id="lastname" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Email:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<input type="email" class="form-control" id="email" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Password:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<input type="password" class="form-control" id="password" required>
        						</div>
        					</div>
        					<div class="form-group">
        						<div class="col-xs-2">
        							<label for="lastname"><b>Confirm Password:</b></label>
        						</div>
        						<div class ="col-xs-8">
        							<input type="password" class="form-control" id="password" required>
        						</div>
        					</div>
        				</div>
        		</div>
        		
        	</div>
        	
        </div>
        	<div class="col-md-6">
        		<button type="submit" class="btn btn-primary" align="left">Save Changes</button>
        		<button type="clear" class="btn btn-danger" onclick="clearForm()" align ="left">Cancel</button>
        	</div>

        </form>


      </div>
      <!-- /.row -->
  @stop
  @section('script')
  	<script>
  		  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
    function clearForm()
{
    $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
    $(':checkbox, :radio').prop('checked', false);
}
  	</script>
  @stop