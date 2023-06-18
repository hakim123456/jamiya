@extends('home') @section('content')
 @if ($errors->any())
  <div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> 
        @endforeach </ul>
  </div> 
  @endif @if (session('success')) 
  <div class="alert alert-success">
    {{ session('success') }}
  </div class="col-lg-6">
   @endif
   <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card mt-5">
          <div class="card-header bg-primary text-white">
            <h4></h4>
          </div>
          <div class="card-body">
            <form action="{{ route('factures.result_date') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
              </div>
              <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 
  @endsection
  