@extends('layout')

@section('content')
  <form action="{{ route('acrud.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input name="name" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name="description" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection