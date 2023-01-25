<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <section>
        <div class="row">
            <div class="col-md-12" style="background-color: #7950f2">
                <div class="d-flex justify-content-center mt-5 mb-5" style="color: aliceblue"><h1>Titulo</h1></div>
            </div>

        </div>
    </section>
    <section>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #ced4da">
                <div class="d-flex flex-column align-items-center  px-3 pt-2 text-white min-vh-100">     
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center " id="menu">
                        <li class="nav-item d-flex justify-content-center">                        
                                <h3 style="color: black">Sidebar</h3>                 
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                            <a href="#" class="nav-link align-middle px-0">
                                <a class="btn btn-success" href="{{route('start')}}">start</a>
                            </a>
                        </li>                                  
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>
</section>
</body>
</html>