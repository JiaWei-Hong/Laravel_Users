@extends('layout')

@section('title','Index Page')
        
@section('Content')
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                Users Simple
            </div>

            <div class="container">
                <table class="table table-dark" style="text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Features</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($data as $items)
                            <tr>
                                <th scope="row">{{$items['id']}}</th>
                                <td>{{$items['username']}}</td>
                                <td>{{$items['date']}}</td>
                                <td>
                                    {{ method_field('PUT') }}
                                    <a id="{{$items['id']}}" value={{ csrf_token() }} class="btn btn-warning modify" style="color:white;">Update</a>
                                    <a href="./delete/{{$items['id']}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <p>
                <div class="card">
                    <div class="card-body">
                    <span class="font">
                        Users. AddUser
                    </span>
                    <form action="./adduser" method="POST">
                        @csrf
                        <div class="container">
                            <div class="form-group">
                                <p>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                                </p>
                                <p>
                                    <input type="text" class="form-control" name="account" placeholder="Enter Account" required>
                                </p>
                                <p>
                                    <input type="password" class="form-control" name="pwd" placeholder="Enter Password" required>
                                </p>
                                <p>
                                    <button type="submit" class="btn btn-success btn-lg btn-block">新增</button>
                                    <button type="reset" class="btn btn-secondary btn-lg btn-block">重設</button>
                                </p>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </p>
            
                <div class="card">
                    <div class="card-body">
                    <span class="font">
                        Users. Search
                    </span>
                    <form action="./search" method="post">
                            @csrf
                            <div class="container">
                                <div class="form-group">
                                    <p>
                                        <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                                    </p>
                                    <p>
                                        <button type="submit" class="btn btn-success btn-lg btn-block">查詢</button>
                                        <button type="reset" class="btn btn-secondary btn-lg btn-block">重設</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection
