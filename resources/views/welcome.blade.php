@extends('layout')

@section('title','Index Page')
        
@section('Content')
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                Users Simple
            </div>

            <p>
                <div class="card">
                    <div class="card-body">
                    <span class="font">
                        Users. AddUser
                    </span>
                    <form action="./adduser" method="post">
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
            
            <p>
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
                                        <input type="text" class="form-control" placeholder="Enter Account" required>
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
            </p>
        </div>
    </div>

    <div class="container">
        <table class="table table-dark" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Create Date</th>
                </tr>
            </thead>
            
            <tbody>
                @for ($i = 0; $i < count($data); $i++)
                    <tr>
                        <th scope="row">{{$data[$i]->id}}</th>
                        <td>{{$data[$i]->username}}</td>
                        <td>{{$data[$i]->date}}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
