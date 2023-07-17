@extends('layouts.admin')

@section('content')
    <form action="{{ route('site.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('admin.siteSetting._form',['btn_submit' => 'create'])

    </form>
@endsection
