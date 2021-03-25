@extends('layout')

@section('content')
  <h1>{{ $showdata->name }}</h1>
  <h4>{{ $showdata->description }}</h4>
  <a class="btn btn-primary" href="{{ route('acrud.index') }}">Create</a>
  <a class="btn btn-secondary" href="{{ route('acrud.edit', $showdata->id) }}">Edit</a>
  <form action="{{ route('acrud.destroy', $showdata->id) }}" method="POST">
  @method('DELETE')
  @csrf
  <button type="submit" class="btn btn-danger" >Delete</button>
  </form>
    
@endsection