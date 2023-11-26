@extends('front.layout.front')
@section('title')
    {{ __('messages.My Account') }}
@stop
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@include('front.members.membernav')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-body table-responsive">
                <table id="patientTable" class="table table-striped table-hovered table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($patients) > 0)
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->first_name }}</td>
                                    <td>{{ $patient->last_name }}</td>
                                    <td>{{ $patient->phone }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->age }}</td>
                                    <td>{{ $patient->dob }}</td>
                                    <td>{{ $patient->gender }}</td>
                                    <td>{{ $patient->address }}</td>
                                    <td>
                                        <button class="btn btn-success btnPatientView" data-id="{{ $patient->id }}"><i class="fa fa-eye"></i>
                                        </button>
                                        <button class="btn btn-primary btnPatientEdit" data-id="{{ $patient->id }}"><i class="fa fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            {{ __('messages.No Patients avilable ') }}
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
  </div>

  <div id="myPatientModel" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Patient Detail</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="PatientDetail">
            </div>
        </div>
    </div>
</div>
  @endsection
  @section('scripts')
  
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#patientTable').dataTable();

		$(document).on('click','.btnPatientView',function(){

			let id = $(this).data('id');
			let url = "{{ asset('mypatient/show') }}";
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: url,
				type: "POST",
				data: {
					"id":id,
				},
				beforeSend:function(){
					console.log('ajax fired');
				},
				success: function (data) {
					if(data.status==true){
						$('#myPatientModel').modal('show');
						$('#PatientDetail').html(data.data);          
					}else{
						console.log('error');
					}
				},
				error:function(xhr){
					console.log(xhr);
				}
			});

		});

		$(document).on('click','.btnPatientEdit',function(){

			let id = $(this).data('id');
			let url = "{{ asset('mypatient/edit') }}";
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				url: url,
				type: "POST",
				data: {
					"id":id,
				},
				beforeSend:function(){
					console.log('ajax fired');
				},
				success: function (data) {
					if(data.status==true){
						$('#myPatientModel').modal('show');
						$('#PatientDetail').html(data.data);          
					}else{
						console.log('error');
					}
				},
				error:function(xhr){
					console.log(xhr);
				}
			});

			});
	</script>
@endsection