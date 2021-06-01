<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="optional.css">

    <title>SIGN-IN</title>
  </head>
  <style class="text/css">
       body{

        background: url(assets/images/background.jfif) no-repeat ;
    background-size: cover;
}
</style>
  <body>
    <div class="container">
        <div class="row justify-content-center">
           
            <div class="col-12 col-sm col-md-3">                       
                    <form action="../controls/control_login.php" method="post" class="needs-validation" novalidate>
                    <h1 align="center"> Sign-In</h1> 
                    <div class="form-group">
                        <label for="" class ="col-form-label-sm"> username</label>
                        <input type="text" name="username" class="form-control" value="" id="user"/>
                    </div>
                    <div class="form-group">
                        <label for="" class ="col-form-label-sm"> password</label>
                        <input type="password" name="password" class="form-control" value="" id="password"/>
                    </div>
                    <div class="form-group">
                    <input type="checkbox" onclick="lihatpassword()">show password</input>
                    </div> 
                    <center> 
                    <div class="form-group">
                        <input type="submit" name="masuk" value="Sign-in" class="btn btn-primary btn-block" >                       
                    </div>
                    
                    <h3>Or</h3>
                    </center>
                    <a href ="auth.php"><img src="assets/images/loginapi.png" width="300px" height="60px"></a>
                    </form>
                     
                    </div>
                    </div>
                    </div>
                    <script type="text/javascript" scr="bootstrap/js/bootstrap.js"></script>
                    <script >
                    function lihatpassword(){
                        var pass=document.getElementById("password");
                        if(pass.type=="password"){
                            pass.type="text";
                        }
                        else{
                            pass.type="password";
                        }
                    }
                    </script>

