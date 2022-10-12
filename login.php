<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>MYSQL Test</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-xxl">
            <a href="#intro" class="navbar-brand">
                <span class="fw-bold text-secondary">
                    <i class="bi bi-motherboard-fill"></i>
                    MYSQL DEMO
                </span>
            </a>
            <!--Toggle Buttons for Mobile Nav-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--Navbar Links-->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-2 d-none d-md-inline">
                        <a href="./register.php" class="btn btn-secondary">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Register Box-->
    <!--Contact Forms-->
    <!--form-control, form-label, form-select, input-group, input-group-text-->
    <section id="contact">  
        <div class="container-lg">
            <div class="text-center">
                <h2>Login</h2>
                <p class="lead">Login to your Demo Account</p>
            </div>

            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <form action="./signin.inc.php" method="POST">
                        <label class="form-label">Name: </label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" name="name" class="form-control" placeholder="eg. Mario">
                        </div>
                        <label class="form-label">Password: </label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" name="pass" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-4 text-center">
                            <button type="submit" name="signin-submit" class="btn btn-secondary">Login</button>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>