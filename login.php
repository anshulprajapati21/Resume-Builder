<?php
$title = "Login | Resume Builder";
require './assests/includes/header.php';
$fn->nonAuthPage();
?>
<div class ="d-flex align-items-center" style ="height:100vh">
    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form method ="post" action ="actions/login.action.php">
                <div class="d-flex gap-2 justify-content-center">
                <img class ="mb-4" src="./assests/images/bookLogo.png" alt="" height="70" style="padding-right: 20px;">

                    <div>
                    <h1 class="h3 fw-normal my-1"><b>Resume</b> Builder</h1>
                        <p class="m-0">Login to your account</p>

                    </div>
                </div>



                <div class="form-floating">
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                    <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name = "email_id" required>
                    
                </div>
                <div class="form-floating">
                    <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"  name ="password" required>
                    
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit">Login
                    <i class="bi bi-box-arrow-in-right"></i>
                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="forgot-password.php" class="text-decoration-none">Forgot Password ?</a>
                    <a href="register.php" class="text-decoration-none">Register</a>

                </div>

            </form>
        </main>

    </div>
</div>

<?php
require './assests/includes/footer.php';
?>
    