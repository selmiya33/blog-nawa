@extends('layouts.admin')

@section('content')
    <form action="{{ route('departments.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.departments._form',['btn_submit' => 'create'])

    </form>
@endsection
