<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <header class="container-fluid header">
        <div class="headers">
            <img src="../assets/image/logo.png" alt="logo">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            <a href="">Logout</a>
        </div>

    </header>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">DashBoard</a></li>
                    <li><a href="#">User</a></li>
                    <li class="active"><a href="#">Reminder</a></li>
                </ul><br>

            </div>

            <div class="col-sm-10">
                <h4><small>Reminder</small></h4>
                <hr>
                dhj


            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <p>Footer Text</p>
    </footer>

</body>

</html>
