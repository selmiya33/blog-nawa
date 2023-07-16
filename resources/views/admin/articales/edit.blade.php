@extends('layouts.admin')

@section('content')
    <form action="{{route('articales.update',$articale?->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("put")

        @include('admin.articales._form',['btn_submit' => 'update'])

    </form>

@endsection
