<?php
$title = "Create Resume | Resume Builder";
require './assests/includes/header.php';
require './assests/includes/navbar.php';
$fn->authPage();   // non access dircetly by url
?>

    <div class="container">

        <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
            <div class="d-flex justify-content-between border-bottom">
                <h5>Create Resume</h5>
                <div>
                <a class="text-decoration-none" onclick = 'history.back()'><i class="bi bi-arrow-left-circle"></i> Back</a>
                </div>
            </div>

            <div>

                <form class="row g-3 p-3">
                    <div class="col-md-12">
                    <h5 class="mt-3 text-secondary"><i class="bi bi-person-badge"></i> Personal Information</h5>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" placeholder="Dev Ninja" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" placeholder="dev@abc.com" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Mobile No</label>
                        <input type="number" min="1111111111" placeholder="9569569569" max="9999999999"
                            class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Gender</label><br>
                        <select class="form-select col-md-12">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Transgender</option>

                        </select>
                    </div>
            
                    <div class="col-md-6">
                        <label class="form-label">Religion</label>
                        <select class="form-select col-md-12">
                            <option>Hindu</option>
                            <option>Muslim</option>
                            <option>Sikh</option>
                            <option>Christian</option>

                            
                        </select>
                    </div>

                    
                    <div class="col-md-6">
                        <label class="form-label">Nationality</label>
                        <select class="form-select col-md-12">
                            <option>Indian</option>
                            <option>Non Indian</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select col-md-12">
                            <option>Married</option>
                            <option>Single</option>
                            <option>Divorced</option>
                            <option>Bhadwa</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Hobbies</label>
                        <input type="text" placeholder="Reading Books, Watching Movies" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Languages Known</label>
                        <input type="text" placeholder="Hindi,English" class="form-control">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between col-md-12">
                        <h5 class=" text-secondary"><i class="bi bi-briefcase" style="left:200px"></i> Experience</h5>
                        <div>
                            <a href="" class="text-decoration-none"><i class="bi bi-file-earmark-plus" ></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">



                        <div class="col-6 col-md-8 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Web Developer Consultant (2+ Years)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-buildings"></i> Dominos,New Delhi (October 2020 - Currently
                                    Pursuing)
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Handling customers and fulfilling their needs
                                </p>

                            </div>
                        </div>
                        <div class="col-6 col-md-8 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Web Developer Consultant (2+ Years)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-buildings"></i> Dominos,New Delhi (October 2020 - Currently
                                    Pursuing)
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Handling customers and fulfilling their needs
                                </p>

                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="d-flex justify-content-between col-md-12">
                        <h5 class=" text-secondary"><i class="bi bi-journal-bookmark"></i> Education</h5>
                        <div>
                            <a href="" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">



                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Completed 12th Class (Arts Stream)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-book"></i> Central Board Of Secondary Education, New Delhi
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Passed / Completed In 2023
                                </p>

                            </div>
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between">
                                    <h6>Completed 12th Class (Arts Stream)</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>

                                <p class="small text-secondary m-0" style="">
                                    <i class="bi bi-book"></i> Central Board Of Secondary Education, New Delhi
                                </p>
                                <p class="small text-secondary m-0" style="">
                                    Passed / Completed In 2023
                                </p>

                            </div>
                        </div>


                    </div>

                    <hr>
                    <div class="d-flex justify-content-between col-md-12">
                        <h5 class=" text-secondary"><i class="bi bi-boxes"></i> Skills</h5>
                        <div>
                            <a href="" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Add New</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">



                        <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> Basic Knowledge in Computer & Internet</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="p-2 border rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6><i class="bi bi-caret-right"></i> Basic Knowledge in Computer & Internet</h6>
                                    <a href=""><i class="bi bi-x-lg"></i></a>
                                </div>
                            </div>
                        </div>




                    </div>



                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Save
                            Resume</button>
                    </div>
                </form>
            </div>





        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>