<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zuri MVC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="col-8 my-5 py-5 mx-auto">
        <div class="display-4 text-center mb-4">
            HOME PAGE
        </div>
        <div class="col text-center text-success my-3">
            {{ $errors->first('new_user') }}
            {{ $errors->first('msg') }}
        </div>
        <div class="col-6 mx-auto my-3">
            <div class="container my-3 text-center">
                <a href="/create-user" class="btn btn-primary display-block"> Create User</a>
            </div>
            <div class="container my-3 text-center">
                <a href="/users" class="btn btn-dark display-block"> View All Users</a>
            </div>
        </div>
    </div>
</body>

</html>
