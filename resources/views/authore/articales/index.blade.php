@extends('layouts.authore')
@section('content')
    @if (session()->has('success'))
        <div id="flash-message" class="alert alert-success ">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mb-4 fs-2 ">Articales</h2>
    <a class="btn btn-primary mb-2" href="{{ route('MyArticale.create') }}" role="button">Add Articales</a>


    <table class="table">
        <thead>
            <tr>
                <th>Authore ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>created at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                @foreach ( $articales as $articale)
                    <tr>
                        <td>{{ $articale->authore_id }}</td>
                        <td>{{ $articale->title }}</td>
                        <td>
                            <a href="{{ $articale->image_link }}">
                                <img src="{{ $articale->image_link }}" alt="#" srcset="" high=60 width=60>
                            </a>
                        </td>
                        <td>{{ $articale->description }}</td>
                        <td>{{ $articale->created_at->format('d F Y ') }}</td>
                        <td></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route('MyArticale.edit', $articale->id) }}" class="btn btn-success">EDIT</a>
                                <form action="{{ route('MyArticale.destroy', $articale->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    {{ $articales->links() }}
@endsection
