<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>
        
        <!-- script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 25vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }

            .font{
                color: #636b6f;
                padding: 0 25px;
                font-size: 40px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: flex;
                justify-content: left;
            }

            .card-body{
                background-color:antiquewhite;
            }
        </style>
    </head>
    <body>
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
                                        <input type="text" class="form-control" placeholder="Enter Username" required>
                                    </p>
                                    <p>
                                        <input type="text" class="form-control" placeholder="Enter Account" required>
                                    </p>
                                    <p>
                                        <input type="password" class="form-control" placeholder="Enter Password" required>
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
                                            <input type="text" class="form-control" placeholder="Enter Username" required>
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
    </body>
</html>
