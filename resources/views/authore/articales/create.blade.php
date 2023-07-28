@extends('layouts.admin')

@section('content')
    <form action="{{ route('MyArticale.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('authore.articales._form',['btn_submit' => 'create'])

    </form>
@endsection
