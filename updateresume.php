
<?php
require './assests/class/database.class.php';
require './assests/class/function.class.php';
$fn->authPage();
$slug = $_GET['resume']??'';
$resumes =  $db->query("SELECT * FROM resumes WHERE ( slug = '$slug' AND user_id =".$fn->Auth()['id'].")");
$resume = $resumes->fetch_assoc();   
if(!$resume){
    $fn->redirect('myresumes.php');
}

$exps = $db->query("SELECT * FROM experience WHERE (resume_id = ".$resume['id'].")");
$exps = $exps->fetch_all(1);

$edus = $db->query("SELECT * FROM educations WHERE (resume_id = ".$resume['id'].")");
$edus = $edus->fetch_all(1);

$skills = $db->query("SELECT * FROM skills WHERE (resume_id = ".$resume['id'].")");
$skills = $skills->fetch_all(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update resume | Resume Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="icon" href="./assests/images/bookLogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            height: 100vh;
            background: rgb(249, 249, 249);
            background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);

        }
    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assests/images/bookLogo.png" alt="Logo" height="24" class="d-inline-block align-text-top">
                Resume Builder
            </a>
            <div>
            <a href="profile.php" class="btn btn-sm btn-dark"><i class="bi bi-person-circle"></i> My Profile</a>
            <a href="actions/logout.action.php" class="btn btn-sm btn-danger"><i class="bi bi-box-arrow-left"></i> Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Update Resume</h5>
                <div>
                <a href ="myresumes.php" class="text-decoration-none" ><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form method ="post"  action="actions/updateresume.action.php" class="row g-3 p-3">
                <input type="hidden" name="id" value="<?=$resume['id']?>"/>
                <input type="hidden" name="slug" value="<?=$resume['slug']?>"/>
                    <div class="col-md-6">
                        <label class="form-label">Resume Title</label>
                        <input type="text" name="resume_title" placeholder="Web Developer Consultant" value ="<?=@$resume['resume_title']?>" class="form-control" required>
                    </div>
                    <h5 class="mt-3 text-secondary"><i class="bi bi-person-badge"></i> Personal Information</h5>
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_name" placeholder="Dev Ninja" class="form-control" value ="<?=@$resume['full_name']?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email_id" placeholder="dev@abc.com" class="form-control"  value ="<?=@$resume['email_id']?>" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Objective</label>
                        <textarea type="text" class="form-control" name ="objective" id="inputAddress" placeholder=""  required><?=@$resume['objective']?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mobile No</label>
                        <input type="number" min="1111111111" name="mobile_no" placeholder="9569569569" max="9999999999"  value ="<?=@$resume['mobile_no']?>" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Of Birth</label>
                        <input type="date" name = "dob" class="form-control"  value ="<?=$resume['dob']?>" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option <?=($resume['gender']== 'Male')?'selected':''?>>Male</option>
                            <option <?=($resume['gender'] == 'Female')?'selected':''?>>Female</option>
                            <option <?=($resume['gender'] == 'Transgender')?'selected':''?>>Transgender</option>

                            
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Religion</label>
                        <select class="form-select" name="religion">
                            <option <?=($resume['religion']== 'Hindu')?'selected':''?>>Hindu</option>
                            <option <?=($resume['religion']== 'Muslim')?'selected':''?>>Muslim</option>
                            <option <?=($resume['religion']== 'Sikh')?'selected':''?>>Sikh</option>
                            <option <?=($resume['religion']== 'Christian')?'selected':''?>>Christian</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Nationality</label>
                        <select class="form-select" name="nationality">
                            <option <?=($resume['nationality']== 'Indian')?'selected':''?>>Indian</option>
                            <option <?=($resume['nationality']== 'Non Indian')?'selected':''?>>Non Indian</option>


                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select" name="marital_status">
                            <option <?=($resume['marital_status']== 'Married')?'selected':''?>>Married</option>
                            <option <?=($resume['marital_status']== 'Single')?'selected':''?>>Single</option>
                            <option <?=($resume['marital_status']== 'Divorced')?'selected':''?>>Divorced</option>
                            

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Hobbies</label>
                        <input type="text" name="hobbies" placeholder="Reading Books, Watching Movies" value ="<?=@$resume['hobbies']?>" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Languages Known</label>
                        <input type="text" name ="languages" placeholder="Hindi,English" value ="<?=@$resume['languages']?>" class="form-control" required>
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Address</label>
                        <input type="text" class="form-control" name ="address" id="inputAddress" value ="<?=@$resume['address']?>" placeholder="1234 Main St" required>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-briefcase"></i> Experience</h5>
                        <div>
                            <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addexp"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

 

                    <div class="d-flex flex-wrap">

<?php
    if($exps){
        foreach($exps as $exp){
            ?>
                    <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6><?=$exp['position']?></h6>
                                    <a href="actions/deleteexp.action.php?id=<?=$exp['id']?>&resume_id=<?=$resume['id']?>&slug=<?=$resume['slug']?>"><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-buildings"></i><?=$exp['company']?>(<?=$exp['started'].' - '.$exp['ended']?>)
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    <?=$exp['job_dec']?>
                                </p>

                            </div>
                        </div>
                        
            <?php
        }
    }else{
        ?>
            <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>I am Freshaer</h6>
                                    
                                </div>
                                <p class="small text-secondary m-0" style="">
                                    If you have experience , you can add
                                </p>

                            </div>
                        </div>
                        

<?php

    }
?>

                        

                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-journal-bookmark"></i> Education</h5>
                        <div>
                            <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addedu"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">

<?php
    if($edus){
        foreach($edus as $exp){
?>
                    <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6><?=$exp['course']?></h6>
                                    <a href="actions/deleteedu.action.php?id=<?=$exp['id']?>&resume_id=<?=$resume['id']?>&slug=<?=$resume['slug']?>"><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                <i class="bi bi-book"></i><?=$exp['institute']?>
                                </p>
                                <p class="small text-secondary m-0" style="">
                                <?=$exp['started'].' - '.$exp['ended']?>
                                </p>

                            </div>
                        </div>
                        
            <?php
        }
    }else{
        ?>
            <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>I have no eduaction</h6>
                                    
                                </div>
                                <p class="small text-secondary m-0" style="">
                                    If you have education , you can add
                                </p>

                            </div>
                        </div>
                        

<?php

    }
?>


                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <h5 class=" text-secondary"><i class="bi bi-boxes"></i> Skills</h5>
                        <div>
                            <a href="" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#addskill"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">
<?php
if($skills){
    foreach($skills as $skill){
        ?>

                        <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> <?=$skill['skills']?></h6>
                                    <a href="actions/deleteskill.action.php?id=<?=$skill['id']?>&resume_id=<?=$resume['id']?>&slug=<?=$resume['slug']?>"><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>
        <?php
    }
}else{
    ?>
                    <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> I have no skills</h6>
                                    
                                </div>
                            </div>
                        </div>
<?php
}

?>


                        

                    </div>



                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Update Resume</button>
                    </div>
                </form>
            </div>





        </div>

    </div>

    <!-- //model exp-->

 <div class="modal fade" id="addexp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Experience</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method ="post" action="actions/addexperience.action.php"class="row g-3">
            <input type="hidden" name="resume_id" value="<?=$resume['id']?>"/>
            <input type="hidden" name="slug" value="<?=$resume['slug']?>"/>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Position /Job Role</label>
                    <input type="text" class="form-control" name="position" id="inputEmail4" placeholder="Web Developer Consultant (2+ Years)" required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Company</label>
                    <input type="text" class="form-control" name="company" id="inputPassword4" placeholder=" Dominos,New Delhi" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Joined</label>
                    <input type="text" class="form-control" name="started" id="inputPassword4" placeholder="January 2022" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Resigned</label>
                    <input type="text" class="form-control" name="ended" id="inputPassword4" placeholder="Currently Pursuing"required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword" class="form-label">Job Descripion</label>
                    <textarea class="form-control" name="job_dec" required></textarea>
                </div>

                
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Add Experience</button>
                </div>
            </form>
      
      </div>
      
    </div>
  </div>
</div>
 <!-- //model experience-->

 <!-- //model Education-->

 <div class="modal fade" id="addedu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Education</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method ="post" action="actions/addeducation.action.php"class="row g-3">
            <input type="hidden" name="resume_id" value="<?=$resume['id']?>"/>
            <input type="hidden" name="slug" value="<?=$resume['slug']?>"/>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Course / Degree</label>
                    <input type="text" class="form-control" name="course" id="inputEmail4" placeholder="Completed 12th Class (Arts Stream)" required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Institute /Board</label>
                    <input type="text" class="form-control" name="institute" id="inputPassword4" placeholder=" Central Board Of Secondary Education, New Delhi" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Started</label>
                    <input type="text" class="form-control" name="started" id="inputPassword4" placeholder="January 2022" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Ended</label>
                    <input type="text" class="form-control" name="ended" id="inputPassword4" placeholder="Currently Pursuing"required>
                </div>
                

                
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Add Education</button>
                </div>
            </form>
      
      </div>
      
    </div>
  </div>
</div>
 <!-- //model education-->

 <!-- //model skill-->

 <div class="modal fade" id="addskill" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Skills</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method ="post" action="actions/addskill.action.php"class="row g-3">
            <input type="hidden" name="resume_id" value="<?=$resume['id']?>"/>
            <input type="hidden" name="slug" value="<?=$resume['slug']?>"/>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Skill</label>
                    <input type="text" class="form-control" name="skills" id="inputEmail4" placeholder="Basic Knowledge in Computer & Internet" required>
                </div>
                
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Add Skills</button>
                </div>
            </form>
      
      </div>
      
    </div>
  </div>
</div>
 <!-- //model skill-->
 <?php
require './assests/includes/footer.php';
?>