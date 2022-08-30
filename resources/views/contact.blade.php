@extends('mylayouts.app')
@section('content')



<div class="container">
   <div class="row">

 <div class="col-lg-3 col-md-3 col-sm-3">

 </div>

      <div class="col-lg-6 col-md-6 col-sm-6">
        
        
   
<div class="bg bg-primary h-100 ">
    <br>
    <h1><center>CONTACT US</center> </h1>
<br></div>



    <p><b>Phone no </b>:+234 803 083 3935
    +234 803 588 0735 </p>
    <p>
    <b>Email: </b>apostolicministersconfe@gmail.com </p>

   <p> <b>Address: </b>Tudun Wada Road, off Keffi – Abuja Express Way, Mararaba Abuja  </p>
   <br> <br> 


<div>
@if (session()->has('status'))
  <div class="alert alert-success">{{ session('status') }}</div>
@endif

  <form class="form-horizontal " method="POST" action="{{ route('contact') }}">
    @csrf
   
<div class="form-group" align="center">

<div class="col-sm-10">
<input type="text" name="fullname" class="form-control" id="class" autocomplete="on" placeholder="Name" required="required" >
</div>
</div>






<div class="form-group" align="center">

<div class="col-sm-10">
<input type="email" name="email" class="form-control" id="class" autocomplete="on" placeholder="Email" >
</div>
</div>



<div class="form-group" align="center">

<div class="col-sm-10">
<textarea  class="form-control" name="message" required="required" maxlength="500" cols="50" rows="6" placeholder="Message"></textarea>
</div>
</div>


<div class="form-group" align="center">
<div class="col-sm-10">
<input type="submit" name="submit" value="send"  style=" float:right; background-color:rgb(55, 55, 170); color:white; height:40px; width:80px; border-radius:4px">
</div>
</div>


  </form>
  </div>
</div>
   </div>

@endsection