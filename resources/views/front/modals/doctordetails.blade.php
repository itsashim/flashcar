<div class="row">
    <div class="col-sm-12">
        <h3 class="text-center text-bold mt-5">Book Appointment Now</h3>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <img style="height: 200px;width:200px;" class="img-thumbnail" src="{{ asset('public/upload/doctor/'.$doctor->image) }}" /><br/>
        <div style="width: 200px;" class="text-center">
            <b style="width: 200px;font-size:20px;" class="text-center">{{ $doctor->name }}</b>
            <span style="width: 200px;">{{ $doctor->department->name }}</span>

            <h6>Booking Date Time: {{ $date }} {{ $time }}</h6>
        </div>

    </div>
    <div class="col-sm-5">
        @if(auth()->check())

        <div class="form-group">
            <label for="">Name</label> {{ auth()->user()->name }}
            <input type="hidden" hidden id="bookAuthId" value="{{ auth()->user()->id }}"/>
        </div>

        @else

        <div class="form-group">
            <label for="">Name</label>
            <input id="book_name" class="form-control" type="text" name="name" placeholder="Enter Name" />
        </div>

        <div class="form-group">
            <label for="">Contact Number</label>
            <input id="book_contact_number" class="form-control" type="text" name="phone_number" placeholder="Enter Phone Number" />
        </div>

        <div class="form-group">
            <label for="">Message</label>
            <input id="book_message" class="form-control" type="text" name="message" placeholder="Enter Message" />
        </div>
        @endif
        <div class="form-group">
            <input hidden type="hidden" id="book_doc_id" value="{{ $doctor->id }}" />
            <input hidden type="hidden" id="book_department_id" value="{{ $doctor->department_id }}" />
            <input hidden type="hidden" id="book_date" value="{{ $date }}" />
            <input hidden type="hidden" id="book_time" value="{{ $time }}" />
            <button id="bookNow" class="btn btn-success">Book Appointment</button>
        </div>
    </div>
</div>