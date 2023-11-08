<@php
    session_start();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Custom User Registration & Login Tutorial - AllPHPTricks.com</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

<body>
    <div id="navbar-container">
        <div id="navbar">
            <h4>PORTOFOLIO WEBSITE</h4>
            <ul id="list-konten">
                <li><a href="">Home</a></li>
                <li><a href="">About Me</a></li>
                <li><a href="">Portofolio</a></li>
                <li><a href="">Contact</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
            </ul>
        </div>
    </div>

    <section id="data-diri">

        <div id="container-1">

            <div id="content1-kiri">
                    <h4>Hello, </h4>
                    <h1>I'm Sandi Aji </h1>


                <div class="d-block p-2  start-50 top-0">
                    <div class="d-inline p-2  start-50 top-0">
                        <img id="images-1" src="images/gmail.png" class="img-thumbnail" alt="...">
                    </div>
                    <div class="d-inline p-2  start-50 top-0">
                        <img id="images-1" src="images/linkedin.png" class="img-thumbnail" alt="...">
                    </div>
                    <div class="d-inline p-2  start-50 top-0">
                        <img id="images-1" src="images/discord.png" class="img-thumbnail" alt="...">
                    </div>
                </div>

            </div>

            <div id="content1-kanan">
                <div>
                    <img src="{{ asset('storage/photos/'.$images->image_profile) }}" class="w-100 rounded" width="300" height="300">
                </div>
            </div>

        </div>

    </section>

    <section id="latar-belakang">
        <h2>About Me</h2>
        <div id="container-2">

            <div id="content-2">
                <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Similique animi veritatis debitis repellendus obcaecati veniam itaque autem.
                    Quisquam iure expedita perspiciatis distinctio officia cumque repellendus atque mollitia!
                    Ut, in doloremque.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Similique animi veritatis debitis repellendus obcaecati veniam itaque autem.
                    Quisquam iure expedita perspiciatis distinctio officia cumque repellendus atque mollitia!
                    Ut, in doloremque.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Similique animi veritatis debitis repellendus obcaecati veniam itaque autem.
                    Quisquam iure expedita perspiciatis distinctio officia cumque repellendus atque mollitia!
                    Ut, in doloremque.</h2>
                </h2>
                </h2>
                </div>
        </div>

        <button id="button-more1" type="button" class="btn btn-secondary">More..</button>

    </section>

    <section id="portofolio">
        <h2>My Portofolio</h2>
        <div id="content-3">
            <div class="card text-bg-light text-center mb-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Portofolio1</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="btn btn-outline-secondary">View</a>
                </div>
            </div>
            <div class="card text-center text-bg-light mb-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Portofolio2</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="btn btn-outline-secondary">View</a>
                </div>
            </div>
            <div class="card text-center text-bg-light mb-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Portofolio3</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="btn btn-outline-secondary">View</a>
                </div>
            </div>
        </div>
        <button id="button-more2" type="button" class="btn btn-secondary">More..</button>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
