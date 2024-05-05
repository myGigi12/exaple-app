@extends('layout')
@section('content')

<div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4">
        <div class="card card-body">
            <h4>{{$post->name}}</h4>
            <p>{{$post->content}}</p>
            <span>{{$post->created_at->format('d M Y, h:ia')}}</span>
            <span>{{$post->created_at->diffForHumans()}}</span>
        </div>
    </div>
    @endforeach

</div>

@endsection
