@extends('layouts.default')

@section('content')

        <div class="card mt-3 pl-2 pr-2">
                <form>
                        <div class="form-group">
                                @csrf
                                <label for="exampleInputUsername">Username</label>
                                <input type="username" class="form-control" id="exampleInputUsername"
                                       aria-describedby="usernameHelp" placeholder="Enter username">

                        </div>
                        <div class="form-group">
                                @csrf
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                        </div>
                        <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>

@endsection


