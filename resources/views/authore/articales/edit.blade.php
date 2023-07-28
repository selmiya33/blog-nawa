@extends('layouts.admin')

@section('content')
    <form action="{{ route('MyArticale.update',$articale->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        @include('authore.articales._form',['btn_submit' => 'update'])

    </form>

@endsection
