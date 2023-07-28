@extends('layouts.authore')
@section('content')
    @if (session()->has('success'))
        <div id="flash-message" class="alert alert-success ">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mb-4 fs-2 ">accounts</h2>
    <a class="btn btn-primary mb-2" href="{{ route('MyAccounts.create') }}" role="button">Add accounts</a>


    <table class="table">
        <thead>
            <tr>
                <th>platform</th>
                <th>Link</th>
                <th>icon</th>
                <th>created at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                @foreach ( $accounts as $account)
                    <tr>
                        <td>{{ $account->platform }}</td>
                        <td>{{ $account->Link }}</td>
                        <td>{{ $account->icon }}</td>
                        <td>{{ $account->created_at->format('d F Y ') }}</td>
                        <td></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="{{ route('MyAccounts.edit', $account->id) }}" class="btn btn-success">EDIT</a>
                                {{-- <form action="{{ route('Myaccount.destroy', $account->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    {{-- {{ $accounts->links() }} --}}
@endsection
