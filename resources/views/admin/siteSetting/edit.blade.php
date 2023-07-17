@extends('layouts.admin')

@section('content')
    <form action="{{route('site.update',$site->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("put")

        @include('admin.siteSetting._form',['btn_submit' => 'update'])

    </form>

@endsection
