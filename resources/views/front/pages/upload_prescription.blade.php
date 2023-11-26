<html>

<head>
    <title>Upload Prescription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row">
        <div class="col-sm-12">
            <form action="{{ asset('upload-prescription') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-header" style="background-color:#00be9c">
                    <h5 class="modal-title mt-2">Upload Prescription</h5>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                    <!--    <span aria-hidden="true">&times;</span>-->
                    <!--</button>-->
                </div>
                <div class="modal-body" style="background-color:#f1f1f9">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">

                            @if (auth()->user())
                                <div class="form-group">
                                    <label for="">Name : </label>
                                    <span>{{ auth()->user()->name }}</span>
                                </div>
                                @if (auth()->user()->phone_no)
                                    <div class="form-group">
                                        <label for="">Mobile : </label>
                                        <span>{{ auth()->user()->phone_no }}</span>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="">Email : </label>
                                        <span>{{ auth()->user()->email }}</span>
                                    </div>
                                @endif
                            @else
                                <div class="form-group">
                                    <label for="">Name : </label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Mobile : </label>
                                    <input type="text" name="mobile" class="form-control" required>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="">Message</label>
                                <input type="text" name="message" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Delivery Address</label>
                                <input type="text" name="delivery_address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Profile Image</label>
                                <input type="file" name="path" id="preview_img2" required style="curser:pointer;" />
                                <div id="viewLogo2"></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ml-3 m-2" style="background-color:orange; border:none;">Upload
                            Now</button>
                    </div>
                </div>
                <div class="modal-footer" style="background-color:#00be9c;">

                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if(session()->has('message'))
            toastr.success("{{ session()->get('message') }}");
           
        @endif
    </script>

</body>

</html>
