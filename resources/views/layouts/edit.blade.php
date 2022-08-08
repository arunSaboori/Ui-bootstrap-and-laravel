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
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <title>edit</title>
</head>

<body>
    @yield('edit')
    {{-- <img src="../../../public/img/pexels-karolina-grabowska-8947692.jpg" alt=""> --}}
    <h3>make your changes</h3>
    <a href="{{ route('redland.index') }}" class="btn btn-dark" id="a">back to home</a>

    <section>

        <form action="{{ route('redland.update', [$id->id]) }}" method="POST">
            @csrf

            <div class="mb-3 ">
                <div class="inputs">

                    <input type="text" class="form-control p-3 w-50" placeholder="title" name="title"
                        value="{{ $id->title }}">
                    @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="text" class="form-control  p-3 w-50" placeholder="description" name="description"
                        value="{{ $id->description }}">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <input type="text" class="form-control  p-3 w-50" placeholder="category_id" name="category_id"
                        value="{{ $id->category_id }}">
                    @error('category_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror

                </div>

                <input type="submit" class="btn btn-primary" id="input">
            </div>

        </form>

    </section>





</body>

</html>