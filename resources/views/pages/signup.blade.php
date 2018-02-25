@extends('layouts.default')

@section('content')


        <div class="card mt-3 pl-2 pr-2">
                <form action="/signup" method="post">
                        <div class="form-group">
                                @csrf
                                <label for="Name">Name</label>
                                <input type="name" class="form-control" id="Name"
                                       placeholder="Name">
                        </div>
                        <div class="form-group">
                                @csrf
                                <label for="Email">Email address</label>
                                <input type="email" class="form-control" id="Email"
                                       aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.
                                </small>
                        </div>
                        <div class="form-group">
                                @csrf
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" id="Password"
                                       placeholder="Password">
                        </div>
                        <div class="form-group">
                                @csrf
                                <label for="Password">Confirm The Password</label>
                                <input type="password" class="form-control" id="Password"
                                       placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>

@endsection


