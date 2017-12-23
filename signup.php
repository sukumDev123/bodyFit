<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php require_once 'link/link.php' ?>
    
</head>
<body>
<?php require_once 'hf/header.php' ?>

<div class="container" style='position:relative;top:70px;'>

   <div class="row" style='margin:0 auto;'>
    <div class="col-12 col-md-6 col-sm-8" style='margin:0 auto; '>
    <section class="form-simple">
        <form action="forForm/signupForm.php" method='POST'>
             <!--Form with header-->
    <div class="card">

        <!--Header-->
        <div class="header pt-3 special-color-dark lighten-2 " style='color:white;'>

            <div class="row d-flex justify-content-start">
                <h3 class="deep-grey-text mt-3 mb-4 pb-1 mx-5" > SIGN UP </h3>
            </div>

        </div>
        <!--Header-->

        <div class="card-body mx-4 mt-4">

            <!--Body-->
            <div class="md-form">
                 <i class="fa fa-user prefix grey-text"></i>                
                <input type="text" id="Form-name" name='name' class="form-control">
                <label for="Form-name">Your Name</label>
              
            </div>
            <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
                <input type="text" id="Form-email4" name='email' class="form-control">
                <label for="Form-email4">Your email</label>
            </div>

            <div class="md-form pb-3">
            <i class="fa fa-lock prefix grey-text"></i>
            
                <input type="password" id="Form-pass4" name='password' class="form-control">
                <label for="Form-pass4">Your password</label>
              
            </div>
         
    
            <div class="text-center mb-4">
                <button type="submit" onclick="testSignup()" class="btn btn-danger btn-block z-depth-2">   Signup </button>
            </div>
            <p class="font-small grey-text d-flex justify-content-center">Don't have an account? <a href="signin.php" class="dark-grey-text font-bold ml-1"> Sign in</a></p>

        </div>

    </div>
    <!--/Form with header-->

        
        </form>
   
    </section>
    
    
    </div>
   
   </div>

</div>

<div style=' padding:30px; '></div>

<script>

var vali = (vai) => {
    return document.getElementById(vai).value;
}


var testSignup = () => {
    
    if( vali("Form-name") !== "" && vali("Form-email4") !== ""  && vali("Form-pass4") !== "" ){
        return true;
    }
   
    return event.preventDefault();
};

</script>

<?php require_once 'hf/footer.php' ?>

</body>
</html>