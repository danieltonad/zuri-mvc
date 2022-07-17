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
        <div class="container text-center mb-3 display-4">
            Edit User
        </div>
        <form action="/update-user" method="post">
            @csrf

            @if ($errors)
                <div class="py-2">
                    {{ $errors->first('name') }}
                </div>
                <div class="py-2">
                    {{ $errors->first('email') }}
                </div>
                <div class="py-2">
                    {{ $errors->first('phone') }}
                </div>
            @endif

                <input type="hidden" name="id" value={{$user->id}}>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Eg: John Doe" value={{$user->name}}>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" value={{$user->email}}>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number E.g +234 XXXXXXXX" value={{$user->phone}}>
            </div>

            <div class="mb-3">
                <button class="btn btn-dark" type="submit">Update Details </button>
            </div>

        </form>
    </div>
</body>

</html>
