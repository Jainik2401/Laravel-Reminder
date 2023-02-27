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
    <div class=" content">
        <div class="login_Form">
            <form action="#" class="loginform" method="post">
                <div class="imgcontainer">
                    <img src="#" alt="Avatar" class="avatar">
                </div>

                <div class="container-fluid">
                    <hr>
                    <h3>Admin Sign In</h3>
                    <hr>
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uName" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="uPassword" required>

                    <button type="submit" name="signin">Login</button>
                    <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label> -->
                </div>

                <div class="jk" style="background-color:#f1f1f1">

                </div>
            </form>
        </div>
    </div>
</body>

</html>
