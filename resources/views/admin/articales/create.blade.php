@extends('layouts.admin')

@section('content')
    <form action="{{ route('articales.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.articales._form',['btn_submit' => 'create'])

    </form>
@endsection
