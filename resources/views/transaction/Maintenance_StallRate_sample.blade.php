@extends('layout.app')
@section('content-header')
 <h1>
        Stall Rate 
      </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Maintenance</a></li>
            <li class="active">Stall Rate</li>
        </ol>
@stop

@section('content')
 <div style="margin-top:2%;">
            <button class="btn btn-primary" data-toggle="modal" data-target="#new"><span class='glyphicon glyphicon-plus'></span>Add New Stall Rate</button>
        </div>
        <div style="border:2px solid black;">
            <div class="table-responsive">
                <table id="table" class="table table-bordered table-striped" role="grid" style="font-size:15px;">
                    <thead>
                        <tr>
                            <th>Stall Type</th>
                            <th>Sunday</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="modal fade" id="new" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <form action="" method="post" id="newform">
                    <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add Stall Rates</h4> </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="stype">Stall Type*</label>
                                        <select class="stypeSelect" name="stype"> </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Sunday</label>
                                        <input type="text" class="form-control" name="rate[]" placeholder="Php." /> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeWidth">Monday</label>
                                        <input type="text" class="form-control" name="rate[]" placeholder="Php." /> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Tuesday</label>
                                        <input type="text" class="form-control" name="rate[]" placeholder="Php." /> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeWidth">Wednesday</label>
                                        <input type="text" class="form-control" name="rate[]" placeholder="Php." /> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Thursday</label>
                                        <input type="text" class="form-control" name="rate[]" placeholder="Php." /> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeWidth">Friday</label>
                                        <input type="text" class="form-control" name="rate[]" placeholder="Php." /> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Saturday</label>
                                        <input type="text" class="form-control" name="rate[]" placeholder="Php." /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <label style="float:left">All labels with "*" are required</label> -->
                            <button class="btn btn-info" style="background-color:#191966">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="update" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <form action="" method="post" id="updateform">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Add Stall Rates</h4> </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stype">Stall Type*</label>
                                        <select class="form-control stypeSelect" name="stype" readonly> </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Sunday</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i>Php</i> </div>
                                            <input type="text" class="form-control" name="1" placeholder="Php." /> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeWidth">Monday</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i>Php</i> </div>
                                            <input type="text" class="form-control" name="2" placeholder="Php." /> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Tuesday</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i>Php</i> </div>
                                            <input type="text" class="form-control" name="3" placeholder="Php." /> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeWidth">Wednesday</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i>Php</i> </div>
                                            <input type="text" class="form-control" name="4" placeholder="Php." /> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Thursday</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i>Php</i> </div>
                                            <input type="text" class="form-control" name="5" placeholder="Php." /> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeWidth">Friday</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i>Php</i> </div>
                                            <input type="text" class="form-control" name="6" placeholder="Php." /> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stypeLength">Saturday</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"> <i>Php</i> </div>
                                            <input type="text" class="form-control" name="7" placeholder="Php." /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <label style="float:left">All labels with "*" are required</label> -->
                            <button class="btn btn-info" style="background-color:#191966">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@stop

@section('script')

<script type="text/javascript">
		  var obj;
    var chk;
    $(document).ready(function () {
        getStallTypes();
        $('#table').DataTable({
            ajax: '/rateTable'
            , responsive: true
            , "columns": [
                {
                    "data": "stypeName"
                }
                    , {
                    "data": "stall_rate.0.sratePrice"
                }
                    , {
                    "data": "stall_rate.1.sratePrice"
                }
                    , {
                    "data": "stall_rate.2.sratePrice"
                }
                    , {
                    "data": "stall_rate.3.sratePrice"
                }
                    , {
                    "data": "stall_rate.4.sratePrice"
                }
                    , {
                    "data": "stall_rate.5.sratePrice"
                }
                    , {
                    "data": "stall_rate.6.sratePrice"
                }
                    , {
                    "data": "actions"
                }
			]
            , "columnDefs": [
                {
                    "width": "10%"
                    , "searchable": false
                    , "sortable": false
                    , "targets": 8
                    }
  ]
        });
        $("#newform").submit(function (e) {
            e.preventDefault();
            if (!$("#newform").valid()) return;
            var formData = new FormData($(this)[0]);
            $.ajax({
                type: "POST"
                , url: '/addStallRate'
                , data: formData
                , processData: false
                , contentType: false
                , context: this
                , success: function (data) {
                    toastr.success('Added New Stall Type');
                    $('#table').DataTable().ajax.reload();
                    $('#new').modal('hide');
                }
            });
        });
        $("#updateform").unbind('submit').bind('submit', function (e) {
            e.preventDefault();
            if (!$("#updateform").valid()) return;
            var formData = new FormData($(this)[0]);
            $.ajax({
                type: "POST"
                , url: '/updateRate'
                , data: formData
                , processData: false
                , contentType: false
                , context: this
                , success: function (data) {
                    toastr.success('Updated Stall Type Information');
                    $('#table').DataTable().ajax.reload();
                    $('#update').modal('hide');
                }
            });
        });
        $(".modal").on('hidden.bs.modal', function () {
            $(this).find('form').validate().resetForm();
            $(this).find('form')[0].reset();
        })
    });

    function getInfo(id) {
        $.ajax({
            type: "POST"
            , url: '/getRateInfo'
            , data: {
                "_token": "{{ csrf_token() }}"
                , "id": id
            }
            , success: function (data) {
                obj = JSON.parse(data)[0];
                $("#update").find('select[name=stype]').val(obj.stypeID);
                $("#update").find('input[name=1]').val(obj.stall_rate[0].sratePrice);
                $("#update").find('input[name=2]').val(obj.stall_rate[1].sratePrice);
                $("#update").find('input[name=3]').val(obj.stall_rate[2].sratePrice);
                $("#update").find('input[name=4]').val(obj.stall_rate[3].sratePrice);
                $("#update").find('input[name=5]').val(obj.stall_rate[4].sratePrice);
                $("#update").find('input[name=6]').val(obj.stall_rate[5].sratePrice);
                $("#update").find('input[name=7]').val(obj.stall_rate[6].sratePrice);
                $('#update').modal('show');
            }
        });
    }

    function getStallTypes() {
        $.ajax({
            type: "POST"
            , url: '/stypeOptions'
            , data: {
                "_token": "{{ csrf_token() }}"
            }
            , success: function (data) {
                stype = JSON.parse(data);
                var opt = "";
                for (var i = 0; i < stype.length; i++) {
                    opt += '<option value="' + stype[i].stypeID + '">' + stype[i].stypeName + '</option>';
                }
                $(".stypeSelect").each(function () {
                    $(this).html(opt);
                });
            }
        });
    }
</script>
@stop