<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Chat App -Login</title>
    <link link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="d-flex
            justify-content-center
            align-items-center
            vh-100">
    <div class="w-400 p-5 shadow rounded">
        <form method="post" action="app/http/auth.php">
            <div class="d-flex
                        justify-content-center
                        align-items-center
                        flex-column">
                <img src="img/chat.png">
                <h3 class="display-4 fs-1 text-center">
                    LOGIN</h3>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    User name</label>
                <input type="text" class='form-control'>
            </div>

            <div class="mb-3">
                <label class="form-label"> Password</label>
                <input type="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <a href="signup.php">Sign Up</a>
        </form>
    </div>
</body>

</html>