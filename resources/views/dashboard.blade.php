

@extends('mylayouts.app')

@section('content')

<div class="container bg-grey ">
    <div class="row">
        <div class="col-md-3 ">&nbsp;</div>
        <div class="col-md-6  bg-white">
            <div style="margin-top: 50px"></div>
            <div class="col-md-12 ">
                <h2 class="text-center reg-title">
                    <p></p>
                    <p>You have successfully registered for {{ date('Y') }} AMC!</p></h2>
                </div>
                
                <p class="text text-danger"><b>
                    <i class="fa fa-key"></i> Please copy your <b>password</b>  and <b>username</b>
                    </b>
                    <br>
                </p> <br>
                <div class="col-md-12">
<table class="table_responsive" style="width: 100%">
    <tr>
        <td> <p class="text-center "><b>Name:</b></p>  </td>
        <td>{{ auth()->user()->title }},  {{ auth()->user()->sname }}  {{ auth()->user()->fname }}   {{ auth()->user()->othernames }}</td>
    </tr>
    <tr>
        <td> <p class="text-center"><b>Sex: </b></p> </td>
        <td>{{ auth()->user()->gender }}</td>
    </tr>
    <tr>
        <td> <p class="text-center"><b>Age: </b></p>  </td>
        <td>{{ auth()->user()->age }}</td>
    </tr>


    
    
    <tr>
        <td> <p class="text-center"><b>Phone number: </b></p>  </td>
        <td>{{ auth()->user()->phone }}</td>
    </tr>
    <tr>
        <td> <p class="text-center"><b>Denomination:</b></p> </td>
        <td> {{ auth()->user()->denomination }} </td>
    </tr>
    <tr>
        <td><p class="text-center"><b>State:</b> </p></td>
        <td>{{ auth()->user()->state }}</td>
    </tr>
    <tr>
        <td>  <p class="text-center"><b>Country:</b> </p></td>
        <td>{{ auth()->user()->country }} </td>
    </tr>
    <tr>
        <td> <p class="text-center"><b>Hotel:</b></td>
            <td>{{ auth()->user()->hotel->hotel_name }},
            <b>Price: </b>&#X20A6;{{ auth()->user()->hotel->price }}</td>
    </tr>

    <tr>
        <td><h2 class="text-center"><b>Email(username):</b> </h2></td>
        <td>{{auth()->user()->email }}</td>
    </tr>

    <tr>
        <td>   <h2 class="text-center"><b>Your Password:</b> </h2> </td>
        <td>{{ session('password')}}</td>
    </tr>

    <tr> <td> &nbsp;</td>
        <td>  <button onclick="window.print()" style="background: black; color:white; border-radius:5px; width:70px; height:40px">Print</button></td>
    </tr>
</table>

        </div>
        </div>
    </div></div>
   
      
@endsection