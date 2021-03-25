@extends('layout')

@section('content')
  <form action="{{ route('acrud.update', $acrud->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input name="name" type="text" value="{{ $acrud->name }}" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea name="description" class="form-control">{{ $acrud->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection