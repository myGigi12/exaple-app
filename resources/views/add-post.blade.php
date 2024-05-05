@extends('layout')
@section('content')


    <section class="">
        <div style="margin: auto; hight:5rem">
            <h1>lets gossip!</h1>

            <form action="{{ route ('post.store') }} " method="POST"> @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="post" class="col-sm-2 col-form-label">post</label>
                    <div class="col-sm-10">
                        <input type="post" name="content" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Register</button>
            </form>
        </div>

    </section>

    @endsection

