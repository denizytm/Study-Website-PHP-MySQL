<?php
    require "./views/components/global/navbar.php";
?>
    <?php 
        $integerId = (int)$_COOKIE["login-data"];
        $profileUser = getUserForProfile($integerId);
    
        $profileUserName = $profileUser["username"];
        $profileFirstName = $profileUser["firstName"];
        $profileLastName = $profileUser["lastName"];
        $profileEmail = $profileUser["email"];
        $profileLevel = $profileUser["level"];
        $profileTotalPost = $profileUser["totalPost"];
        $profilehtml = $profileUser["html"];
        $profilecss = $profileUser["css"];
        $profilejavascript = $profileUser["javascript"];
        $profilec = $profileUser["c"];
        $profilecpp = $profileUser["cpp"];
        $profilepython = $profileUser["python"];

        echo "
        <div class='container'>
            <div class='main-body'>
                <div class='row'>
                    <div class='col-lg-4'>
                        <div class='card'>
                            <div class='card-body'>
                                <div class='d-flex flex-column align-items-center text-center'>
                                    <img src='./views/assets/person.png' class='rounded-circle p-1 bg-primary'>
                                    <div class='mt-3'>
                                        <h4>$profileFirstName $profileLastName</h4>
                                        <h5>Level : $profileLevel</h5>
                                        <h5>Total Post : $profileTotalPost </h5>";

                                            

                                        echo "
                                        <button class='btn btn-primary' disabled>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class='col-lg-8'>
                        <div class='card'>
                            <form class='card-body' method='GET'>
                                <div class='row mb-3'>
                                    <div class='col-sm-3'>
                                        <h6 class='mb-0'>First Name</h6>
                                    </div>
                                    <div class='col-sm-9 text-secondary'>
                                        <input name='firstname' type='text' class='form-control' value='$profileFirstName'>
                                    </div>
                                </div>
                                <div class='row mb-3'>
                                    <div class='col-sm-3'>
                                        <h6 class='mb-0'>Last Name</h6>
                                    </div>
                                    <div class='col-sm-9 text-secondary'>
                                        <input name='lastname' type='text' class='form-control' value='$profileLastName'>
                                    </div>
                                </div>
                                <div class='row mb-3'>
                                    <div class='col-sm-3'>
                                        <h6 class='mb-0'>Email</h6>
                                    </div>
                                    <div class='col-sm-9 text-secondary'>
                                        <input name='email' type='text' class='form-control' value='$profileEmail'>
                                    </div>
                                </div>
                                <div class='row mb-3'>
                                    <div class='col-sm-3'>
                                        <h6 class='mb-0'>Username</h6>
                                    </div>
                                    <div class='col-sm-9 text-secondary'>
                                        <input name='username' type='text' class='form-control' value='$profileUserName'>
                                    </div>
                                </div>";
                            
                                echo "
                                <div class='row'>
                                    <div class='col-sm-3'></div>
                                    <div class='col-sm-9 text-secondary'>
                                        <input type='button' class='btn btn-primary px-4' value='Save Changes'>
                                    </div>
                                </div>";

                                echo "
                            </form>
                        </div>
                        <div class='row'>
                            <div class='col-sm-12'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <h5 class='d-flex align-items-center mb-3'>Lessons</h5>
                                        <p>Html</p>
                                        <div class='progress mb-3'>
                                            <div class='progress-bar' role='progressbar' style='width: $profilehtml%' aria-valuenow='$profilehtml' aria-valuemin='0' aria-valuemax='100'></div>
                                        </div>
                                        <p>Css</p>
                                        <div class='progress mb-3'>
                                            <div class='progress-bar' role='progressbar' style='width: $profilecss%' aria-valuenow='$profilecss' aria-valuemin='0' aria-valuemax='100'></div>
                                        </div>
                                        <p>Javascript</p>
                                        <div class='progress mb-3'>
                                            <div class='progress-bar' role='progressbar' style='width: $profilejavascript%' aria-valuenow='$profilejavascript' aria-valuemin='0' aria-valuemax='100'></div>
                                        </div>
                                        <p>C</p>
                                        <div class='progress mb-3'>
                                            <div class='progress-bar' role='progressbar' style='width: $profilec%' aria-valuenow='$profilec' aria-valuemin='0' aria-valuemax='100'></div>
                                        </div>
                                        <p>Cpp</p>
                                        <div class='progress mb-3'>
                                            <div class='progress-bar' role='progressbar' style='width: $profilecpp%' aria-valuenow='$profilecpp' aria-valuemin='0' aria-valuemax='100'></div>
                                        </div>
                                        <p>Python</p>
                                        <div class='progress mb-3'>
                                            <div class='progress-bar' role='progressbar' style='width: $profilepython%' aria-valuenow='$profilepython' aria-valuemin='0' aria-valuemax='100'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    ?>


<?php 
    require "./views/components/global/footer.php";
?>

<script src="./views/script/global/button.js" ></script>
<script src="./views/script/global/navbar.js" ></script>