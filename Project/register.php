<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        body {
        background: #007bff;
        background: linear-gradient(to right, #0062E6, #33AEFF);
        }
    </style>
</head>
<body>
    <?php
        if( isset($_SESSION["username"]) )
        {
            header("Location: ./index.php");
            exit;
        }
    ?>
    <header>
        <div class="card-body">
            <a class="text-white" href="/project/index"><h1>Toko Komputer A</h1></a>
        </div>
        <!-- <h1>Build a PC</h1> -->
    </header>
    <div class="container">
    <!-- <br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
    <hr> -->
    <br>
    
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <a href="./login" class="float-right btn btn-outline-primary mt-1">Log In</a>
        <h4 class="card-title mt-2">Sign Up</h4>
    </header>
    <article class="card-body">
    <form action="./controller/doRegister.php" method="POST">
        <div class="form-row">
            <div class="col form-group">
                <label>First name </label>   
                  <input type="text" class="form-control" name="firstName">
            </div> <!-- form-group end.// -->
            <div class="col form-group">
                <label>Last name</label>
                  <input type="text" class="form-control" name="lastName">
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="email">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div> <!-- form-group end.// -->
        <div class="form-group">
                <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="Male">
              <span class="form-check-label"> Male </span>
            </label>
            <label class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" value="Female">
              <span class="form-check-label"> Female</span>
            </label>
        </div> <!-- form-group end.// -->
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control" name="city">
            </div> <!-- form-group end.// -->
            <!-- <div class="form-group col-md-6">
              <label>Country</label>
              <select id="inputState" class="form-control">
                <option> Choose...</option>
                  <option>Uzbekistan</option>
                  <option>Russia</option>
                  <option selected="">United States</option>
                  <option>India</option>
                  <option>Afganistan</option>
              </select>
            </div> form-group end.// -->
        </div> <!-- form-row.// -->
        <div class="form-group">
            <label>Create password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <label>Confirm password</label>
            <input class="form-control" type="password" name="confirmPassword">
        </div> <!-- form-group end.// -->  
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Sign Up  </button>
        </div> <!-- form-group// -->      
        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
    </form>
    <div class="errorMessage">
        <!-- Show Error Message -->
        <?php if( isset($_SESSION["error"]) ){ ?>
            <p style="color: red;"> <?php 
                if( isset($_SESSION["error"]) ){
                    echo $_SESSION["error"];
                }
                unset($_SESSION["error"]);
            ?> </p>
            <?php }else{?>
                <p style="color: green;"> <?php 
                if( isset($_SESSION["success"]) ){
                    echo $_SESSION["success"];
                }
                unset($_SESSION["success"]);
            ?> </p>
        <?php }?>
    </div>
    </article> <!-- card-body end .// -->
    <div class="border-top card-body text-center">Have an account? <a href="./test">Log In</a></div>
    </div> <!-- card.// -->
    </div> <!-- col.//-->
    
    </div> <!-- row.//-->
    
    
    </div> 
    <!--container end.//-->
    
    <br><br>
    <footer>
    <article class="bg-secondary">  
        <div class="card-body text-center">
            <p class="h5 text-white mt-4"><a class="text-white" href="/project/index">Toko Komputer A</a></p>
            <p class="text-white">© 2020 All rights reserved.</p>
        </div>
    </article>
    </footer>
</body>
</html>