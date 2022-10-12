# MYSQLWorkshop
MYSQL Demo for a MYSQL Workshop i held. it is a simple login in, register system that shows basic functionality of MYSQL.

## Content of Project

There are 6 Files in the project.  
		-home.php  
		-register.php  
		-login.php  
		-connect.inc.php  
		-signup.inc.php  
		-singin.ing.php  
		
## Starting with home.php

Our home file is the page users are sent to when they are logged in successfuly. I used the Bootstrap to format the pages of the project.  
Each page had a Navbar and for our home page we had a message that says "welcome 'name of user' ". 

The code for it will be gives below:  

```html
<?php 
session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        section{
            padding: 60px 0;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                        <a href="./login.php" class="btn btn-secondary">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Main Image & Intro Text-->
    <section id="intro">
        <div class="container-lg align-content-center text-center justify-content-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1 class="text-center">
                        <div class="display-2">Welcome <?php echo $_SESSION['userUID']  ?></div>
                        <div class="display-5 text-muted">Have a Good Day</div>
                    </h1>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>
```
### Explaination

