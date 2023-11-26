@extends('front.layout.front')
@section('title')
    {{ __('My Prescriptions') }}
@stop
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    @include('front.members.membernav')

    <div class="container">
        <div class="row mx-0">
            <div class="col-sm-12">
                <div class="card-body table-responsive">
                    <table id="patientTable" class="table table-striped table-hovered table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Message</th>
                                <th>Delivery Address</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($prescriptions) > 0)
                                @foreach ($prescriptions as $prescription)
                                    <tr>
                                        <td style="text-align:center;">
                                            @if($prescription->path)
                                            <img src="{{ asset('public/'.$prescription->path) }}" alt="{{ $prescription->name }}" style="width:100px; height:100px;"/>
                                            @else
                                            -----
                                            @endif
                                        </td>
                                        <td>{{ $prescription->name }}</td>
                                        <td>{{ $prescription->mobile }}</td>
                                        <td>{{ $prescription->message }}</td>
                                        <td>{{ $prescription->delivery_address }}</td>
                                        <td>{{ $prescription->created_at }}</td>
                                        <td>
                                            <button class="btn btn-danger btnDelete" data-id="{{ $prescription->id }}"><i
                                                    class="fa fa-trash"></i>
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

    <div id="deleteModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="{{ route('prescription.delete') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Prescription</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to delete prescription?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="text" name="id" style="display: none;" id="deletePid" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#patientTable').dataTable();

        $(document).on('click', '.btnDelete', function() {
            let id = $(this).data('id');
            $('#deletePid').val(id);
            $('#deleteModal').modal('show');
        });
    </script>
@endsection
