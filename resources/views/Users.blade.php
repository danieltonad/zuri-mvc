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

    <div class="col-10 my-5 py-5 mx-auto">
        <div class="container text-center mb-3 display-4">
            User List
        </div>
        <div class="col text-center text-primary daisplay-5">
            {{ $errors->first('msg') }}
        </div>
        <table class="table table-responsive">
            <thead class="table-dark">
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col text-center">Action</th>
            </thead>
            <tbody>

                @if (count($users) > 0)
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            {{-- action --}}
                            <td>
                                <a href="/delete-user/{{ $user->id }}" class="btn btn-outline-danger my-2">Del</a>
                                <a href="/edit-user/{{ $user->id }} " class="btn btn-outline-dark my-2">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center py-3" colspan="5">
                            User List Empty
                        </td>
                    </tr>
                @endif


            </tbody>
        </table>
    </div>
</body>

</html>
