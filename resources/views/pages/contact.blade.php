@extends('layouts.app')

@section('content')

    <div class="card mr-8 ml-8">

    <form method="POST" action="{{ route('contact.save') }}">
        {{ csrf_field() }}
        <div class="form-group mr-4 ml-4">
            <label for="name">Name</label>
            <input name="name" class="form-control" id="name">
        </div>
        <div class="form-group mr-4 ml-4">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group mr-4 ml-4">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group mr-4 ml-4">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>

@endsection