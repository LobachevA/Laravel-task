@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your saved hashes</div>
                @foreach($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">#{{$post->id}}</div>
                        <div class="panel-body">
                            {!! $post->content !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
