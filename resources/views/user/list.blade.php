@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>Status</th>
                @if( $auth->isOperator() )
                    <th>Edit</th>
                @endif
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->status }}</td>

                    @if( $auth->isOperator() )
                        <td>
                            <form>
                                <a class="btn btn-sm btn-default" href="/user/{{ $user->id }}/edit" role="button">Edit</a>
                                <button 
                                    type="submit" 
                                    class="btn btn-sm btn-danger" 
                                    href="#" 
                                    role="button">Delete</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
