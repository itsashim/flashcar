@extends('front.layout.front')

@section('title', 'Bluebook')



@section('styles')

<style>

/* form{
   margin-top: 50px;
   padding: 50px;
   justify-content: center;
   font-weight: 500;
   width: 100%;
   font-family: Verdana, Tahoma, sans-serif;
} */
form input{
    border-radius: 5px;
    border: 0.5px solid;
    padding-left: 30px;
}
.A h5{
    margin-top: 15px;
    font-size: 20px;
}
.B h5{
    margin-top: 15px;
    font-size: 20px;
}
.C h5{
    margin-top: 15px;
    font-size: 20px;
}
.D h5{
    margin-top: 15px;
    font-size: 20px;
}
.E h5{
    margin-top: 15px;
    font-size: 20px;
}
.parent{
    display: flex;
    gap: 100px;
    
   
}
  </style>

@endsection

@section('content')

<div class="container">
    <form>
       <div class="form1">
           <div class="form-group">
             <label for="exampleFormControlTextarea1"><b>Description</b></label>
             <textarea class="form-control" placeholder="Description" rows="3"></textarea>
             <div class="A">
             <h5>Price *</h5>
             </div>
             <input type="Number" placeholder="Price" size="50">
             <input type="checkbox"> Price negotiable<br>
             <div class="B">
             <h5>Ownership</h5>
             </div>
            
             <div class="form-check-inline">
               <label class="form-check-label">
                 <div class="G">
                 <input type="radio" class="form-check-input" name="optradio">1st
                 </div>
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">2nd
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">3rd
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">4th
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">5th
               </label>
             </div>
          
           <div class="C">
             <h5>Bike Condition</h5>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">Brand new
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">Like new
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">Excellent
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio"  class="form-check-input" name="optradio">Poor
               </label>
             </div>
             <div class="form-check-inline">
               <label class="form-check-label">
                 <input type="radio" class="form-check-input" name="optradio">Fair
               </label>
             </div>
             <div class="p">
             <input type="Number" placeholder="Make year" size="10">
             <input type="Number" placeholder="Mileage" size="10">
             <input type="Number" placeholder="KM run" size="10" style="margin-top: 10px;"><br>
             </div>
             <div class="D">
             <h5>Bikes features</h5>
             </div>
             <div class="parent">
             <div class="C1">
             <input type="checkbox"> Electric Start</label><br>
             <input type="checkbox"> Tubless Tyres</label><br>
             <input type="checkbox"> Projected Headlight</label><br>
             <input type="checkbox"> Rear Disc</label><br>
             <input type="checkbox"> Split Seat</label><br>
             <input type="checkbox"> Low Fuel Indicator</label><br>
             </div>
             <div class="C2">
             <input type="checkbox"> FI ENGINE</label><br>
             <input type="checkbox"> Low Oil Indicator</label><br>
             <input type="checkbox"> Low Battery Indicator</label><br>
             <input type="checkbox"> Alloy Wheels</label><br>
             <input type="checkbox"> Digital Display</label><br>
             <input type="checkbox"> Front Disc</label><br>
             </div>
             <div class="c3">
             <input type="checkbox"> Mono Suspension</label><br>
             <input type="checkbox"> Anti Lock Braking(ADS)</label><br>
             <input type="checkbox"> Tripmeter</label><br>
             <input type="checkbox"> LED Light</label><br>
             <input type="checkbox"> Fuel Saving Modes</label><br>
             <input type="checkbox"> Turn Signal/Pass Light</label><br>
             </div>
         </div>
            <div class="E">
              <h5>Text cleared?</h5>
             <input type="radio" id="css" name="fav_language" value="CSS">
             <label for="css">Yes</label>
             <input type="radio" id="javascript" name="fav_language" value="JavaScript">
             <label for="javascript">No</label><br>
             <input type="Number" placeholder="Mobile Number">
             <input type="checkbox"> Allow calls<br>
           </div>
       </div>
     </form>
  </div>
</div>

@endsection