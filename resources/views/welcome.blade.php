<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital@1&display=swap" rel="stylesheet">
    <title>bootsrap ui page for training </title>
</head>

<body>
      <header class="navbar navar-expand-lg  sticky-top   navbar1 ">
        <div class="container-fluid ">
            <img src="{{ asset('img/joystick.svg') }}" class="img1">
            <div class="d-flex align-items-baseline px-4"> 
            <a href="" class="navbar-brand px-3">mycrud</a>
            <a href="" class="navbar-brand px-3">home</a>
            <a href="" class="navbar-brand px-3">about me </a>
           </div>
        </div>
      </header>


    <section>
        <h3 class="container-fluid text1  "> ! dear users <br> <span class="opacity-75">i make crud for free Yeap</span>
        </h3>
        <div class="div1"> <a href="" class="btn btn2 rounded-pill">get started</a> <a href=""
                class="btn btn3 rounded-pill">try now</a>
        </div>
        <img src="{{ asset('img/pexels-eda-11482477.jpg') }}" class="img-fluid  img2">
    </section>



    <article  >
      <div class="article-text text-center">our product</div>
      <div class="d-flex text-center justify-content-center justify-content-evenly"> 
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/dollar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">first month trial</h5>
                <p class="card-text"> only pay 5$ month
                     </p>
                <a href="#" class="btn btn-primary">  go</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/dollar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">perimium pack</h5>
                <p class="card-text"> 9.99$ per month with 12 hours support
                   </p>
                <a href="#" class="btn btn-primary">Go</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/dollar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">golden pack</h5>
                <p class="card-text"> 24.99$ dollars 24 hours support extra extention
                     </p>
                <a href="#" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>
    </article>



    <aside class="container-fluid">
        <h1 class="aside-text">well we are doing this <br> for years now</h1>

        <div class="container-fluid divimg">
            <div>
                <p>its easy to use</p>
                <img src="{{ asset('img/emoji-smile.svg') }}">
            </div>
            <div>
                <p>24 hourse cash money back</p>
                <img src="{{ asset('img/cash.svg') }}">
            </div>
            <div>
                <p>its safe and secure</p>
                <img src="{{ asset('img/file-lock-fill.svg') }}">
            </div>
            <div>
                <p>its fast</p>
                <img src="{{ asset('img/fast-forward-btn.svg') }}">
            </div>
        </div>


    </aside>

    <footer class="container-fluid bg-dark text-center">
        <div class="divfooter">
            <div class="conteainer">
                <div>
                    <ul class="list-unstyled mb-0 ul1">
                        <div class="text-light fs-4">about us</div>
                        <li> <a href="" class=" ">about us</a></li>
                        <li> <a href="">join now</a></li>
                        <li> <a href="">about crud</a></li>
                        <li> <a href="">learn more</a></li>
                    </ul>
                </div>

            </div>
            <ul class="list-unstyled mb-0 ">
                <div class="text-light fs-4">connect us</div>
                <li> <a href="">contect us</a></li>
                <li> <a href="">need more workers</a></li>
                <li> <a href="">carees</a></li>
        </div>
        </ul>
        </div>

        <div>
            <h5 class="text-light last-text"> all content are belong to this website arun.saboori 2012 - 2022</h5>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
