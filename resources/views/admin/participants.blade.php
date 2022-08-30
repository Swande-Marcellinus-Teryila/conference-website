@extends('mylayouts.adminapp')
@section('content')
<
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Participants</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route("admin/") }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin/participants') }}">participants</a></li>
        
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Oops Something went wrong</strong></p>
           
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            
        </div>
    @endif
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $participants->count() }} registered!</h5>
           
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr> 
                  <th scope="col">#</th>
                  
                  <th scope="col">Full Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Denomination</th>
                  <th scope="col">State</th>
                  <th scope="col">Country</th>
                  <th scope="col">Email</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @php
                  $i=0;
                @endphp
                @foreach ($participants as $participant )
                @php
                $i+=1;
              @endphp
                <tr>
                  <th scope="row">{{ $i }}</th>
                  
                  <td>{{ $participant['title'] }}, {{ $participant['sname'] }} {{ $participant['fname'] }} {{ $participant['othernames'] }}</td>
                  <td>{{ $participant['age'] }}</td>
                  <td>{{ $participant['phone'] }}</td>
                  <td>{{ $participant['denomination'] }}</td>
                  <td>{{ $participant['state'] }}</td>
                  <td>{{ $participant['country'] }}</td>
                  <td>{{ $participant['email'] }}</td>
                    <td>
                    <form method="post" action="participants/{{ $participant->id }}">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form> </td>
                </tr>
                @endforeach
               
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

  
      </div>
    </div>
  </div><!-- End Small Modal-->

</main><!-- End #main -->
@endsection