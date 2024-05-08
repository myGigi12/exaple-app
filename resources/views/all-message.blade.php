@extends('layout')
@section('content')

<div class="row">
    @foreach ($message as $post)
    <div class="col-md-4">
        <div class="card card-body">
            <h4>{{$post->sender}}</h4>
            <h4>{{$post->reciever}}</h4>
            <p>{{$post->message}}</p>
            <span>{{$post->created_at->format('d M Y, h:ia')}}</span>
            <span>{{$post->created_at->diffForHumans()}}</span>
        </div>
    </div>
    @endforeach

</div>

@endsection
