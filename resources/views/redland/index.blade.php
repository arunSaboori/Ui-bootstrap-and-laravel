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
        <h3>redland</h3>

        <form action="{{ route('redland.index') }}  " class="m-4" method="POST">
            @csrf


            <select name="category_id" class="form-select" name="category_id" aria-label="Default select example">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>

        </form>


        <a href="{{ route('redland.create') }}" class="btn btn-success m-4">create data</a>

        @foreach ($redland as $redlands)
            <table class="table table-dark table-striped">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">category_id</th>
                    <th scope="col">details</th>
                    <th scope="col">action</th>
                </tr>



                <tr>
                    <td>{{ $redlands->id }}</td>
                    <td>{{ $redlands->title }}</td>
                    <td>{{ $redlands->description }}</td>
                    <td>{{ $redlands->category_id }}</td>
                    <td><a href="{{ route('redland.updated',[$redlands->id]) }}" class="btn btn-danger">details</a></td>
                    <td><a href="{{ route('redland.edit', [$redlands->id]) }}" class="btn btn-primary">edit</a>
                        <form action="{{ route('redland.delete', [$redlands->id]) }}" method="post" class="d-inline">
                            @csrf
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            </table>
        @endforeach
    </section>
</body>

</html>
