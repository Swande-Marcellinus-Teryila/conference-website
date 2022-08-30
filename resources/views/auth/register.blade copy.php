@extends('mylayouts.app')
@section('content')
<div class="container bg-grey ">
    <div class="row">
        <div class="col-md-3 ">&nbsp;</div>
        <div class="col-md-6 reg-section bg-white">
            <div class="col-md-12 reg-title">
                <h2 class="text-center">Conference Registration</h2>
                </div>
            <form  method="post" action="{{ route('register') }}" class="form-group">
                @csrf
                <div class="col-md-6 reg-div-mt">
                    <input type="hidden" value="<?php echo(date("y")."/".rand(1000000,9999999)."/amc"); ?>" name="password">
                <input type="text" class="form-control input-lg" placeholder="Surname" name="sname">
                </div>
                <div class="col-md-6 reg-div-mt">
                    <input type="text" class="form-control input-lg" placeholder="First Name" name="fname">
                </div>
                 <div class="col-md-6 reg-div-mt">
                <input type="text" class="form-control input-lg" placeholder="Other Names" name="othernames">
                </div>
               
                 <div class="col-md-6 reg-div-mt">
                    <input type="number" placeholder="Age" class="form-control input-lg" required="required" name="age">
                    </div>
                    <div class="col-md-6 reg-div-mt">
                        <input type="text" class="form-control input-lg" placeholder="Denomination" name="deno">
                        </div>
                        <div class="col-md-6 reg-div-mt ">
                            <select class="forselect" name="gender" required>
                                <option value="">Select sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                         </div>
        
                    <div class="col-md-6 reg-div-mt">
                        <select name="title" class="forselect">
                            <option value="">Title</option>
                             <option value="Pastor">Pastor</option>
                              <option value="Bishop">Bishop</option>
                               <option value="Reverend">Reverend</option>
                                <option value="Brother">Brother</option>
                                 <option value="Sister">Sister</option>
                           </select>
                    </div>
                   
                        <div class="col-md-6 reg-div-mt">
                            <select id="select" name="state" class="forselect">
                                <option value="">Select State</option>
                                <option value="outside">Outside Nigeria</option>
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
                            <select  id="african-countries" name="country" required="required" class="forselect" >
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
                                <option value="nigeria">Nigeria</option>
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
                        <div class="col-md-6"> &nbsp;<br></div>
                        <div class="col-md-6">
                            <input type="submit" value ="submit"
                             style="background-color:rgb(55, 55, 170); color:white; height:40px; width:80px; border-radius:4px">
                        </div>
            </form>
        </div>
        <div class="col-md-3 bg bg-dark">&nbsp;</div>
      
@endsection