@extends('layout')
@section('content')


<section class="">
    <div style="margin: auto; hight:5rem">
        <h1 class="align-center">message</h1>

        <form action="{{ route ('message') }} " method="POST"> @csrf
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Receiver" class="col-sm-2 col-form-label">Receiver</label>
                <div class="col-sm-10">
                    <input type="post" name="content" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="message" class="col-sm-2 col-form-label">write message</label>
                <div class="col-sm-10">
                    <input type="post" name="content" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Send</button>
        </form>
    </div>

</section>
@endsection
