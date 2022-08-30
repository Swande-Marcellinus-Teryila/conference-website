@extends('mylayouts.adminapp')
@section('content')
<
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Books and Brochures</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route("admin/") }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin/books') }}">Book/brochures</a></li>
        
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
            <h5 class="card-title"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                Add book
              </button></h5>
           
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr> 
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Authour</th>
                  <th scope="col">Cover page</th>
                  <th scope="col">Book</th>
                  <th scope="col"> </th>
                </tr>
              </thead>
              <tbody>
                @php
                  $i=0;
                @endphp
                @foreach ($books as $book )
                @php
                $i+=1;
              @endphp
                <tr>
                  <th scope="row">{{ $i }}</th>
                  <td>{{ $book['title'] }}</td>
                  <td>{{ $book['authour'] }}</td>
                  <td><a href="{{ $book['book_file'] }}">{{ $book['title'] }}</a></td>
                  <td><img src="{{ Storage::url($book->cover_page) }}" style="width:50px; height:60px;"></td>
                  <td>
                    <form method="post" action="books/{{ $book->id }}">
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

  <div class="modal fade" id="smallModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title d-none d-lg-block">Add Books</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    
         <form method="post" action="{{route('admin/books')}}" enctype="multipart/form-data">
            @csrf
            
                <div class="row mb-12">
                  <label for="inputText" class="col-sm-5 col-form-label">Book Title</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="title">
                  </div>
                </div>

                  <div class="row mb-12">
                    <label for="inputText" class="col-sm-5 col-form-label">Authour</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="authour">
                      @error('authour')
                      <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                    </div>
                  </div>

                  <div class="row mb-12">
                    <label for="inputText" class="col-sm-12 col-form-label">Upload book/brochure</label>
                    <div class="col-sm-12">
                      <input type="file" class="form-control" name="book_file">
                      @error('book_file')
                      <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                    </div>
                </div>

                    <div class="row mb-12">
                        <label for="inputText" class="col-sm-12 col-form-label">Cover Page</label>
                        <div class="col-sm-12">
                          <input type="file" class="form-control" name="cover_page">
                          @error('cover_page')
                      <p class="alert alert-danger">{{ $message }}</p>
                    @enderror
                        </div>
                    </div>
                    
                    


      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div><!-- End Small Modal-->

</main><!-- End #main -->
@endsection