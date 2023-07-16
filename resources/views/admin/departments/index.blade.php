@extends('layouts.admin')
@section('content')

    @if (session()->has('success'))
    <div id="flash-message" class="alert alert-success ">
      {{session('success')}}
    </div>
    @endif

    <h2 class="mb-4 fs-2 ">Departments</h2>
    <a class="btn btn-primary mb-2" href="{{ route('departments.create') }}" role="button">Add Department</a>


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>created at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
                <td>
                  <a href="#">
                      <img src="{{ $department->image_link }}" alt="#" srcset="" high =60 width=60>
                  </a>
               </td>
               <td >{{ $department->description }}</td>
                <td>{{  $department->created_at->format('d F Y ')}}</td>
                <td></td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a href="{{ route('departments.edit',$department->id) }}" class="btn btn-success">EDIT</a>
                  <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
                    @csrf @method("DELETE")
                    <button type="submit"  class="btn btn-danger">DELETE</button>
                </form>
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$departments->links()}}
    @endsection
