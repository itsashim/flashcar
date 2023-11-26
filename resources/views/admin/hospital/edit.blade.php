@extends('admin.layout')
@section('title')
    Edit Hospital
@stop
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/summernote/summernote.min.css') }}">
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Service Provider</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ url('admin/city') }}">{{ __('messages.Cities') }}</a></li>
                        <li class="active">Edit Hospital</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal -->
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> {{-- id="exampleModal" --}}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are You Sure You Want To Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
          <!--&times;-->
        </button>
      </div>
      <div class="modal-body">
            <form method="post" id="banner-form">
                <span class="text-light bg-info p-2 m-1" style="border-radius:10px;position:relative;text-align:center">Banner Image Will Get Permanently Deleted!</span><br><br>
                @csrf
                <div id="banner_content"></div>    
                <button type="submit" class="btn btn-danger ">Yes Remove</button>
            </form>
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-secondary float-right p-1 m-1" onclick="removeElement();" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row rowcenter">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            @if (Session::get('message'))
                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                    {{ Session::get('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('serviceProvider.update', ['serviceProvider' =>$hospital->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Logo</label><br />
                                            @if ($hospital->logo)
                                                <img src="{{ asset('public' . $hospital->logo) }}" height="200px" />
                                            @else
                                                <img src="{{ asset('public/images/hospital.png') }}" height="200px" />
                                            @endif
                                            <input type="file" name="logo" placeholder="Select Logo">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Enter Hospital Name" value="{{ $hospital->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">FirstName</label>
                                            <input class="form-control" type="text" name="first_name"
                                                placeholder="Enter Hospital FirstName" value="{{ $hospital->first_name }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">LastName</label>
                                            <input class="form-control" type="text" name="last_name"
                                                placeholder=" Enter Hospital LastName" value="{{ $hospital->last_name }}"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="appointment_fee">Appointment Fee</label>
                                            <input class="form-control" type="text" name="appointment_fee"
                                                placeholder="Enter Appointment Fee"
                                                value="{{ $hospital->appointment_fee }}" >
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">City</label>
                                            <select name="city_id" class="form-control" required>
                                                <option disabled>Select City</option>
                                                @foreach ($cities as $city)
                                                    <option @if ($city->id == $hospital->city_id) selected="selected" @endif
                                                        value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="facebook_url">Facebook</label>
                                            <input type="text" name="facebook_url" class="form-control"
                                                value="{{ $hospital->facebook_url }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="twitter_url">Twitter</label>
                                            <input type="text" name="twitter_url" class="form-control"
                                                value="{{ $hospital->twitter_url }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="instagram_url">Instagram</label>
                                            <input type="text" name="instagram_url" class="form-control"
                                                value="{{ $hospital->instagram_url }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="linkedin_url">LinkedIn</label>
                                            <input type="text" name="linkedin_url" class="form-control"
                                                value="{{ $hospital->linkedin_url }}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="department">Select Department</label>
                                            <?php
                                            $department_ids = [];
                                            $department_ids = json_decode($hospital->department_ids);
                                            ?>
                                            @if ($department_ids != null)
                                                <select name="department_ids[]" required class="form-control select2" multiple >
                                                    @foreach ($departments as $department)
                                                        <option @if (in_array($department->id, $department_ids)) selected="selected" @endif
                                                            value="{{ $department->id }}">{{ $department->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <select name="department_ids[]" required class="form-control select2" multiple>
                                                    @foreach ($departments as $department)
                                                        <option value="{{ $department->id }}">{{ $department->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="department">Select Facilities</label>
                                            <?php
                                            $facility_ids = [];
                                            $facility_ids = json_decode($hospital->facility_ids);
                                            ?>
                                            @if ($facility_ids != null)
                                                <select name="facility_ids[]" class="form-control select2" multiple>
                                                    @foreach ($facilities as $facility)
                                                        <option @if (in_array($facility->id, $facility_ids)) selected="selected" @endif
                                                            value="{{ $facility->id }}">{{ $facility->name }}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <select name="facility_ids[]" class="form-control select2" multiple>
                                                    @foreach ($facilities as $facility)
                                                        <option value="{{ $facility->id }}">{{ $facility->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @endif
                                        </div>
                                    </div> --}}

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input class="form-control" type="text" name="phone"
                                                placeholder="Enter Phone Number" value="{{ $hospital->phone }}">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <input class="form-control" type="text" name="address"
                                                placeholder="Enter Address" value="{{ $hospital->address }}">
                                        </div>
                                    </div>
                                    <select class="form-control" id="type" name="partner_type">
                                        <option value="lab">Lab</option>
                                        <option value="clinic">PolyClinic</option>
                                        <option value="pharmacy">Pharmacy</option>
                                    </select>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Enter Email" required value="{{ $hospital->email }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Password( Only fill to update new password )</label>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Enter Password">
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Banner Images</label>
                                            <input type="file" name="gallery[]" multiple class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                            <div class="card__container" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem;">
                                        @foreach ($hospitalGalleries as $gallery)
                                        <!-- card -->
                                                <div class="card my-3" >
                                                  <img class="card-img-top" src="{{ asset('public/storage/'.$gallery->image_path) }}" height="200px" alt="Hospital Banner Image">
                                                  <div class="card-body text-center">
                                                        <a href="javascript:void(0)" class="btn btn-danger" id="banner-{{ $gallery->id }}" data="{{ $gallery->id }}" data-toggle="modal" data-target="#exampleModal-{{ $gallery->id }}" >Delete</a>
                                                  </div>
                                                </div>

                                            <script>
                                                let banner_{{ $gallery->id }} = document.querySelector('#banner-{{ $gallery->id }}')
                                                let data_{{ $gallery->id }} = banner_{{ $gallery->id }}.getAttribute('data')
                                                let modal_{{ $gallery->id }} = document.querySelector('.modal')
                                                let form_{{ $gallery->id }} = document.querySelector("#banner-form")
                                                let banner_content_{{ $gallery->id }} = document.querySelector("#banner_content")
                                                let url_{{ $gallery->id }} = "{{ route('remove.banner',['id'=> $gallery->id]) }}"
                                                banner_{{ $gallery->id }}.addEventListener("click",()=>{
                                                    modal_{{ $gallery->id }}.setAttribute("id","exampleModal-{{ $gallery->id }}")
                                                    form_{{ $gallery->id }}.setAttribute("action",url_{{ $gallery->id }})
                                                    let input = document.createElement("input")
                                                    input.setAttribute("type","hidden")
                                                    input.setAttribute("id","img_data_{{ $gallery->id }}")
                                                    input.setAttribute("name","img_data")
                                                    input.setAttribute("class","banner-form-data")
                                                    input.setAttribute("value",data_{{ $gallery->id }})
                                                    banner_content_{{ $gallery->id }}.appendChild(input)
                                                    // console.log(data_{{ $gallery->id }})
                                                });
                                            </script>
                                            <!-- card end -->
{{--
                                            <img src="{{ asset('public/storage/' . $gallery->image_path) }}"
                                                height="200px" />
--}}
                                        @endforeach
                                            </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Detail</label>
                                            <textarea name="detail" class="form-control summernote" id="" cols="30" rows="10">{{ $hospital->detail }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Document <a href="{{ asset('public/'.$hospital->document) }}">View Document</a> </label>
                                            <input type="file" name="document" placeholder="Select Document" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12" @if (auth()->user()->usertype == 4) style="display:none;" @endif>
                                        <div class="form-group">
                                            <label for="name">Status</label>
                                            <select name="status" class="form-control">
                                                <option @if ($hospital->status == 'Pending') selected="selected" @endif>Pending
                                                </option>
                                                <option @if ($hospital->status == 'Approved') selected="selected" @endif>
                                                    Approved</option>
                                                <option @if ($hospital->status == 'Disabled') selected="selected" @endif>
                                                    Disabled</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <button class="btn btn-primary">Save</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>



@stop
@section('footer')
    <script src="{{ asset('public/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('public/summernote/summernote.min.js') }}"></script>
    <script>
        $('.select2').select2({
            "tags": true,
        });

        $('.summernote').summernote();
    </script>
    <script>
         const removeElement = ()=>{
            let inputs = document.querySelectorAll(".banner-form-data")
            inputs.forEach(input => {
                input.remove()
            })
        }
    </script>
    
@endsection
