@extends('layouts.authore')

@section('content')
    <form action="{{ route('MyAccounts.update',$account->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        @include('authore.accounts._form',['btn_submit' => 'update'])

    </form>

@endsection
