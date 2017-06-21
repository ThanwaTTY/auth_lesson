@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a class="btn btn-primary" href="/posts/create" role="button">New Post</a>
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Body</th>
                <th>PostedBy</th>
                <th>Edit</th>
  
            </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>
                        <form method="post" action="/posts/{{ $post->id }}/delete">
                            {{ csrf_field() }}
                            <a class="btn btn-sm btn-default" href="/posts/{{ $post->id }}/edit" role="button">Edit</a>
                            <button 
                                type="submit" 
                                class="btn btn-sm btn-danger" 
                                href="#" 
                                role="button">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </table>
    </div>
</div>
@endsection
