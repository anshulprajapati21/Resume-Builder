<?php
$title = "Profile | Resume Builder";
require './assests/includes/header.php';
require './assests/includes/navbar.php';

$fn->authPage();   // non access dircetly by url
$user = $db->query("SELECT full_name,email_id FROM users WHERE id = '".$fn->Auth()['id']."'");
$user = $user->fetch_assoc();

?>
  
    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Edit Profile</h5>
                <div>
                    <a class="text-decoration-none" onclick = 'history.back()'><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form action ="actions/updateprofile.action.php" method = "post"class="row g-3 p-3">

                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" placeholder="Enter name" name="full_name" value="<?=@$user['full_name']?>" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" placeholder="Enter new email" name=" email_id" value="<?=@$user['email_id']?>" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">New Password</label>
                        <input type="text" min="1111111111" placeholder="Enter new Password" name="password" class="form-control">
                    </div>




                    <div class="col-12 text-end"  style="left:912px ; top:10px">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Update
                            Profile</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    
<?php
require './assests/includes/footer.php';
?>