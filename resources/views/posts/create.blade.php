@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/posts">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="body" class="col-md-4 control-label">Body</label>

                            <div class="col-md-6">
                                <textarea id="body" class="form-control" name="body" >
                                    {{ old('body') }}
                                </textarea>
                            </div>
                        </div>    
                    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
