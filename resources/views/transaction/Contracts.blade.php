@extends('layout.app')
@section('content-header')

<h1>List of Tenants</h1>
  @stop

  @section('content')
  	  <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Current Active Contract</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
           			<tr>
           				<td>Coleen Vivas</td>
           				<td>2</td>
           				<td>
           					<a href="/ViewContracts" ><button class ="btn btn-success" align="center">View</button></a>
           				</td>
           			</tr>
                </tbody>
              </table>
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
  @stop

  @section('script')
  	<script>
	  $(function () {
	    $("#example1").DataTable();
	    
	  });
</script>

  @stop
