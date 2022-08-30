@extends('mylayouts.app')

@section('content')
<div class="container bg-grey ">
    <div class="row">
        <div class="col-md-4 ">&nbsp;</div>
        <div class="col-md-4 reg-section bg-white">
            <div class="col-md-12 reg-title">
                <h2 class="text-center">Login</h2>
                <h2 class="text text-red-400">
                  
                </h2>
                
                </div>
                    
              @if ($errors->any())
              <div class="alert alert-danger">Invalid password or username</div>*
                  
              @endif
            <form  method="post" action="{{ route('login') }}" class="form-group">
                @csrf
                <div class="col-md-12 reg-div-mt">
                <input type="text" class="form-control input-lg" placeholder="Username" name="email" required>
                </div>

                <div class="col-md-12 reg-div-mt">
                    <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                    </div>

                    
                
                        <div class="col-md-6"> &nbsp;<br></div>
                        <div class="col-md-12">
                            <input type="submit" value ="login"
                             style=" float:right;background-color:rgb(55, 55, 170); color:white; height:40px; width:80px; border-radius:4px">
                        </div>
            </form>
        </div>
        <div class="col-md-4 bg bg-dark">&nbsp;</div>
    </div>
</div>
      
@endsection