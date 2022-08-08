<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>index</title>
</head>

<body>
    <header>
        <a href="#">home</a>
        <a href="{{ route('redland.index') }}">redland</a>
        <a href="{{ route('category.index') }}">category</a>
    </header>



    <section>
        <h3>category</h3>
        <a href="{{ route('category.create') }}" class="btn btn-success">create</a>
        <form action="{{ route('category.index') }}" class="m-4" method="POST">
            @csrf
            <select class="form-select" name="name">
                @foreach ($all as $alls)
                    <option value="{{ $alls->id }}"> {{ $alls->name }} </option>
                @endforeach
            </select>


            @foreach ($all as $alls)
        </form>
        <table class="table table-dark table-striped">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">details</th>
                <th scope="col">action</th>
            </tr>



            <tr>
                <td>{{ $alls->id }}</td>
                <td>{{ $alls->name }}</td>
                <td><a href="{{ route('category.updated',[$alls->id]) }}" class="btn btn-warning">details</a></td>
                <td><a href="{{ route('category.edit', [$alls->id]) }}" class="btn btn-primary">edit</a>
                    <form action="{{ route('category.delete', [$alls->id]) }}" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-danger">delete</button>
                    </form>
                </td>
            </tr>
        </table>
        @endforeach


</body>

</html>
