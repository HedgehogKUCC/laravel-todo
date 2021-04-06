<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | 就此愛上 PhpStorm</title>

        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alphal/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <style>
            body {
                font-family: 'Raleway', sans-serif;
                margin-top: 25px;
            }

            button .fa {
                margin-right: 6px;
            }

            .table-text div {
                padding-top: 6px;
            }

            .form-inline {
                display: inline;
            }

            .check {
                color: #cccccc;
                text-decoration: line-through;
            }
        </style>

        <script>
            $(function () {
                $('#task-name').focus();
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Task 清單</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </body>
</html>
