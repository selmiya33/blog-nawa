@extends('layouts.admin')
@section('content')

    @if (session()->has('success'))
    <div id="flash-message" class="alert alert-success ">
      {{session('success')}}
    </div>
    @endif

    <h2 class="mb-4 fs-2 ">Site Inforamtion</h2>
    <a class="btn btn-primary mb-2" href="{{ route('site.create') }}" role="button">Add Site Inforamtion</a>


    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>icon</th>
                <th>created at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($settings as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                  <a href="{{ $item->image_icon }}">
                      <img src="{{ $item->image_icon }}" alt="#" srcset="" high =60 width=60>
                  </a>
               </td>
                <td>{{  $item->created_at->format('d F Y ')}}</td>
                <td></td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <a href="{{ route('site.edit',$item->id) }}" class="btn btn-success">EDIT</a>
                  <form action="{{ route('site.destroy',$item->id) }}" method="POST">
                    @csrf @method("DELETE")
                    <button type="submit"  class="btn btn-danger">DELETE</button>
                </form>
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
