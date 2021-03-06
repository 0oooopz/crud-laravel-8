@extends('layouts.index')
@section('h1')
  Add User
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <form action="{{ route('users.store') }}" method="POST">
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>User added successfully</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div><!-- /.form-group -->
          @endif
          @csrf
          <div class="form-group">
            <label for="">First name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter user name">
            @error('first_name')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div><!-- /.form-group -->
          <div class="form-group">
            <label for="">Last name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter user surname">
            @error('last_name')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div><!-- /.form-group -->
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Example@gmail.com">
            @error('email')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div><!-- /.form-group -->
          <button type="submit" class="btn btn-success" name="submit_create">Create User</button>
          <a class="btn btn-danger" href="{{ route('users.index') }}">Cancel</a>
        </form><!-- /. -->
      </div><!-- /.col-md-5 mx-auto -->
    </div><!-- /.row -->
  </div><!-- /.container -->
@endsection