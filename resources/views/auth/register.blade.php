@extends('mylayouts.app')
@section('metadata')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Apostolic ministers conference">

<meta name="author" content="
Apostolic Ministers Conference Registration, amc registration  for 2022 is ongoing">

@endsection

@section('content')
<div class="container bg-grey ">
    <div class="row">
        <div class="col-md-3">
            
            <div class="" style="border-width: 4px; border-style:outset; font-size:16px">
                <h3 class="reg-title-red"><br>Important Info!</h3>
            The Apostolic Ministers Conference scheduled for <b>16 - 18/3/22</b>@ Barpec Hotel Otukpo 
            has secured discounted daily room rates at N8000 for Barpec, N7000 - N7500 for 
            Double K, Abglo & Golden Palm, 
            and N2500 - N3000 for Goodnews & Diamond hotels for those attending the Conference. 

  Kindly make payments ahead or on arrival at the hotel as rooms are limited.


  For reservations or inquiry call <i class="fa fa-phone text-blue-600"></i> <a href="tel:08039732022">08039732022</a>
</div>
        </div>
        <div class="col-md-7 reg-section bg-white">
            <div class="col-md-12"> 
                <br>
                <h3 class="reg-title">
                    <br><center>Conference Registration</center>
                </h3>
                <br>
               
            
                </div>

            <div id="processingbar"><center><i class="fa fa-spinner fa-spin fa-4x"></i>
            <br>Processing...</center></div>
            @if(session()->has('status'))
            <div class="alert alert-warning">{{ session('status') }}</div>
            @endif
            <form  method="post" action="{{ route('register') }}" class="form-group" id="regform">
                @csrf
                <div class="col-md-6 reg-div-mt">
                    <input type="hidden" value="<?php echo(date("y")."/".rand(1000000,9999999)."/amc"); ?>" name="password" id="password">
                
            
                    <input type="text" class="form-control input-lg" placeholder="Surname" name="sname" id="sname" value="{{ old('sname') }}" required>
                </div>
                <div class="col-md-6 reg-div-mt">
                    <input type="text" class="form-control input-lg" placeholder="First Name" name="fname" id="fname" value="{{ old('fname') }}" required>
                </div>
                 <div class="col-md-6 reg-div-mt">
                <input type="text" class="form-control input-lg" placeholder="Other Names" name="othernames" value="{{ old('othernames') }}" id="othernames">
                </div>
               
                 <div class="col-md-6 reg-div-mt">
                    <input type="number" placeholder="Age" class="form-control input-lg" required="required" name="age" value="{{ old('age') }}" id="age">
                    </div>
                    <div class="col-md-6 reg-div-mt">
                        <input type="text" class="form-control input-lg" placeholder="Denomination" name="deno" value="{{ old('deno') }}" id="deno" required>
                        </div>
                        <div class="col-md-6 reg-div-mt ">
                            <select class="forselect" name="gender" id="gender" required>
                                <option value="">Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                         </div>

                         <div class="col-md-6 reg-div-mt">
                            <input @error('phone')
                            style="border:1px solid red"
                            @enderror  type="tel" placeholder="Phone Number" value="{{ old('phone') }}" class="form-control input-lg" required="required" name="phone" id="phone">
                           
                        </div>
                            <div class="col-md-6 reg-div-mt">
                                <input @error('email')
                                style="border:1px solid red"
                                @enderror  type="email" placeholder="Email" class="form-control input-lg" required="required" name="email" value="{{ old('email') }}" id="email">
                               
                                </div>
        
                    <div class="col-md-6 reg-div-mt">
                        <select name="title" class="forselect" id="title" required>
                            <option value="">Title</option>
                             <option value="Pastor">Pastor</option>
                              <option value="Bishop">Bishop</option>
                              <option value="Archbishop">Archbishop</option>
                              <option value="Evangelist">Evangelist</option>             
                               <option value="Reverend">Reverend</option>
                               <option value="Deacon">Deacon</option>
                              <option value="Deaconess">Deaconess</option>
                               <option value="Elder">Elder</option>
                                <option value="Brother">Brother</option>
                                 <option value="Sister">Sister</option>
                           </select>
                    </div>
                   
                        <div class="col-md-6 reg-div-mt">
                            <select id="state" name="state" class="forselect" id="state" onchange="checkState()" required  >
                                <option value="">State</option>
                                <option value="OUTSIDE NIGERIA">Outside Nigeria</option>
                                <option value="ABUJA FCT">ABUJA FCT</option>
                                <option value="ABIA">ABIA</option>
                                <option value="ADAMAWA">ADAMAWA</option>
                                <option value="AKWA IBOM">AKWA IBOM</option>
                                <option value="ANAMBRA">ANAMBRA</option>
                                <option value="BAUCHI">BAUCHI</option>
                                <option value="BAYELSA">BAYELSA</option>
                                <option value="BENUE">BENUE</option>
                                <option value="BORNO">BORNO</option>
                                <option value="CROSS RIVER">CROSS RIVER</option>
                                <option value="DELTA">DELTA</option>
                                <option value="EBONYI">EBONYI</option>
                                <option value="EDO">EDO</option>
                                <option value="EKITI">EKITI</option>
                                <option value="ENUGU">ENUGU</option>
                                <option value="GOMBE">GOMBE</option>
                                <option value="IMO">IMO</option>
                                <option value="JIGAWA">JIGAWA</option>
                                <option value="KADUNA">KADUNA</option>
                                <option value="KANO">KANO</option>
                                <option value="KATSINA">KATSINA</option>
                                <option value="KEBBI">KEBBI</option>
                                <option value="KOGI">KOGI</option>
                                <option value="KWARA">KWARA</option>
                                <option value="LAGOS">LAGOS</option>
                                <option value="NASSARAWA">NASSARAWA</option>
                                <option value="NIGER">NIGER</option>
                                <option value="OGUN">OGUN</option>
                                <option value="ONDO">ONDO</option>
                                <option value="OSUN">OSUN</option>
                                <option value="OYO">OYO</option>
                                <option value="PLATEAU">PLATEAU</option>
                                <option value="RIVERS">RIVERS</option>
                                <option value="SOKOTO">SOKOTO</option>
                                <option value="TARABA">TARABA</option>
                                <option value="YOBE">YOBE</option>
                                <option value="ZAMFARA">ZAMFARA</option>
                                </select>
                        </div>

                        <div class="col-md-6 reg-div-mt">
                            <select  id="african-countries" name="country"  required="required" class="forselect" onchange="checKCountry()" >
                                <option value="">Country</option>
                                <option value="algeria">Algeria</option>
                                <option value="angola">Angola</option>
                                <option value="benin">Benin</option>
                                <option value="botswana">Botswana</option>
                                <option value="burkina Faso">Burkina Faso</option>
                                <option value="burundi">Burundi</option>
                                <option value="cameroon">Cameroon</option>
                                <option value="cape-verde">Cape Verde</option>
                                <option value="central-african-republic">Central African Republic</option>
                                <option value="chad">Chad</option>
                                <option value="comoros">Comoros</option>
                                <option value="congo-brazzaville">Congo - Brazzaville</option>
                                <option value="congo-kinshasa">Congo - Kinshasa</option>
                                <option value="ivory-coast">Côte d’Ivoire</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="egypt">Egypt</option>
                                <option value="equatorial-guinea">Equatorial Guinea</option>
                                <option value="eritrea">Eritrea</option>
                                <option value="ethiopia">Ethiopia</option>
                                <option value="gabon">Gabon</option>
                                <option value="gambia">Gambia</option>
                                <option value="ghana">Ghana</option>
                                <option value="guinea">Guinea</option>
                                <option value="guinea-bissau">Guinea-Bissau</option>
                                <option value="kenya">Kenya</option>
                                <option value="lesotho">Lesotho</option>
                                <option value="liberia">Liberia</option>
                                <option value="libya">Libya</option>
                                <option value="madagascar">Madagascar</option>
                                <option value="malawi">Malawi</option>
                                <option value="mali">Mali</option>
                                <option value="mauritania">Mauritania</option>
                                <option value="mauritius">Mauritius</option>
                                <option value="mayotte">Mayotte</option>
                                <option value="morocco">Morocco</option>
                                <option value="mozambique">Mozambique</option>
                                <option value="namibia">Namibia</option>
                                <option value="niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="rwanda">Rwanda</option>
                                <option value="reunion">Réunion</option>
                                <option value="saint-helena">Saint Helena</option>
                                <option value="senegal">Senegal</option>
                                <option value="seychelles">Seychelles</option>
                                <option value="sierra-leone">Sierra Leone</option>
                                <option value="somalia">Somalia</option>
                                <option value="south-africa">South Africa</option>
                                <option value="sudan">Sudan</option>
                                <option value="south-sudan">Sudan</option>
                                <option value="swaziland">Swaziland</option>
                                <option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
                                <option value="tanzania">Tanzania</option>
                                <option value="togo">Togo</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="uganda">Uganda</option>
                                <option value="western-sahara">Western Sahara</option>
                                <option value="zambia">Zambia</option>
                                <option value="zimbabwe">Zimbabwe</option>
                                </select>
                        </div>

                        <div class="col-md-6 reg-div-mt">
                            <select name="hotel_id" class="forselect" id="hotel_id">
                                <option value="">Hotel Reservation(optional)</option>
                                @foreach ($hotels as $hotel )
                                @if ($hotel->hotel_name!='Nill')
                                <option value="{{ $hotel->id }}">{{ $hotel->hotel_name }}(N{{ $hotel->price }})</option>  
                                @endif
                                
                                @endforeach
                                
                               </select>
                        </div>
                        <div class="col-md-12"> &nbsp;<br></div>
                        <div class="col-md-12">
            <button type="submit"  id ="submit" style=" float:right; background-color:rgb(55, 55, 170); 
            color:white; height:40px; width:80px; border-radius:4px">
            Submit
        </button>
                            
                        </div>
            </form>
        </div>
        <div class="col-md-2 bg bg-dark">&nbsp;</div>
        <div id="demo"></div>
    </div>
</div>


        <script>
            var myState=document.getElementById("state");
        
       var myCountry=document.getElementById("african-countries");
       
          function checKCountry(){ 
            try{
      
       
        if(myCountry.value!="Nigeria"){
          //checking wether countery selected is not in nigeria
          
        myState.value="OUTSIDE NIGERIA"; 
      }
      
      }
      catch(err){
        document.getElementById("demo").innerHTML=err.message;
      }
      }
      try{
      
      function checkState(){
        if(myState.value!="OUTSIDE NIGERIA"){
            
          myCountry.value="Nigeria";
         
      }else{
          myCountry.value="";

      }
      }
      }
      catch(error){
        document.getElementById("demo").innerHTML=error.message;
      }




  
        </script>
      
@endsection

@section('js_section')
<script>
    $("#processingbar").hide(); /* hiding the processing bar*/
        $("#submit").click(function(){
            let password =$("#password").val();
    let sname =$("#sname").val();
    let fname =$("#fname").val();
    let othernames =$("#othernames").val();
    let title =$("#title").val();
    let age =$("#age").val();
    let deno =$("#deno").val();
    let state=$("#state").val();
    let country =$("#african_countries").val();
    let hotel_id =$("#hotel_id").val();
    let email = $("#email").val();
    let phone  = $("#phone").val();

        if(sname!="" && fname!="" && deno!="" && state!="" && country!="" && age!="" && phone!="" && email!=""){
$("#regform").hide();
           $("#submit").html('processing');
            $("#processingbar").show();
        }
      
      }); 
   
</script>
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>
@endsection