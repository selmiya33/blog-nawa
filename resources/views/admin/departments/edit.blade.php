@extends('layouts.admin')

@section('content')
    <form action="{{route('departments.update',$department?->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("put")

        @include('admin.departments._form',['btn_submit' => 'update'])

    </form>

@endsection
