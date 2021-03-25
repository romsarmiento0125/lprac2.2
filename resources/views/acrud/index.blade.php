@extends('layout')

@section('content')
    <h1>This is index</h1>
    <a class="btn btn-primary" href="{{ route('acrud.create') }}">Create new data</a>
    <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($mydata as $data)
            <tr>
              <th scope="row">{{ $data->id }}</th>
              <td>{{ $data->name }}</td>
              <td>{{ $data->description }}</td>
              <td>
                <a class="btn btn-primary" href="{{ route('acrud.show', $data->id) }}">show</a>
              </td>
            </tr>
              
          @endforeach
      </tbody>
    </table>
@endsection