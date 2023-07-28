@extends('layouts.authore')

@section('content')
    <form action="{{ route('MyAccounts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('authore.accounts._form',['btn_submit' => 'create'])

    </form>
@endsection
