<?php
$title = "Forgot Password | Resume Builder";
require './assests/includes/header.php';
$fn->nonAuthPage();
?>

<style>
.form-signin{
			max-width: 550px;
			padding: 1rem;
		}
</style>

<div class ="d-flex align-items-center p-3" style ="height:100vh">
    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form method ="post" action ="actions/sendcode.action.php">
                <div class="d-flex gap-2 justify-content-center">
                <img class ="mb-4" src="./assests/images/bookLogo.png" alt="" height="70" style="padding-right: 20px;">

                    <div>
                        <h1 class="h3 fw-normal my-1"><b>Resume</b> Builder</h1>
                        <p class="m-0">Forgot your password</p>

                    </div>
                </div>



                <div class="form-floating mb-4">
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Enter registered email" name="email_id" required>
                    
                </div>



                <button class="btn btn-primary w-100 py-2" type="submit"><i class="bi bi-send"></i> Send Verification
                    Code

                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="register.php" class="text-decoration-none">Register</a>
                    <a href="login.php" class="text-decoration-none">Login</a>

                </div>

            </form>
        </main>

    </div>

</div>

<?php
require './assests/includes/footer.php';
?>