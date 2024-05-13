<div class='container'>
    <?php if(!$currentUser['username']) require components("global/alertAfterLogin.php"); ?>
    <div class='main-body'>
        <div class='row'>
            <div class='col-lg-4'>
                <div class='card user-image-container'>
                    <div class='card-body'>
                        <div class='d-flex flex-column align-items-center text-center'>
                            <img id="userImage" src='<?php echo $currentUser['image'] ?? "./views/assets/person.png" ?>' class='rounded-circle p-1 user-image'>
                            <div class='mt-3'>
                                <h4><?php echo $currentUser['firstName'] ?> <?php echo $currentUser['lastName'] ?></h4>
                                <h5>Level : <?php echo $currentUser['level'] ?></h5>
                                <h5>Total Post : <?php echo $currentUser['totalPost'] ?></h5>
                                <form action="/profile" method="POST" enctype="multipart/form-data" class="buttons-container">
                                    <label for="imageFile" class="btn button">Select image</label>
                                    <input id="imageFile" name="imageFile" class="hidden" type="file">
                                    <button type="submit" class="btn button">Save</button>
                                </form>
                                <?php if(array_key_exists("name",$_FILES)) echo $FILES['name'] ?>
                                <?php if(array_key_exists("image",$errors)) echo "<div> $errors[image] </div>" ?>
                                <?php if(!$myProfile) echo "<button class='btn btn-primary' >Follow</button>"; else echo "<button class='btn btn-primary d-none ' disabled ></button>" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class='col-lg-8'>
                <div class='card user-form-container'>
                    <form class='card-body' action="/profile" method='POST'>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>First Name</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input id="firstNameInput" name='firstName' type='text' class='form-control' value='<?php echo $currentUser['firstName'] ?>'>
                                <?php if(array_key_exists("firstName",$errors)) echo "<div class='error'> ". $errors['firstName'] . "</div>";  ?>
                            </div>
                        </div>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>Last Name</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input id="lastNameInput" name='lastName' type='text' class='form-control' value='<?php echo $currentUser['lastName'] ?>'>
                                <?php if(array_key_exists("lastName",$errors)) echo "<div class='error'> ". $errors['lastName'] . "</div>";  ?>
                            </div>
                        </div>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>Email</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input id="emailInput" name='email' type='text' class='form-control' value='<?php echo $currentUser['email'] ?>'>
                                <?php if(array_key_exists("email",$errors)) echo "<div class='error'> ". $errors['email'] . "</div>";  ?>
                            </div>
                        </div>
                        <div class='row mb-3'>
                            <div class='col-sm-3'>
                                <h6 class='mb-0'>Username</h6>
                            </div>
                            <div class='col-sm-9 text-secondary'>
                                <input id="usernameInput" name='username' type='text' class='form-control' value='<?php echo $currentUser['username'] ?>'>
                                <?php if(array_key_exists("username",$errors)) echo "<div class='error'> ". $errors['username'] . "</div>";  ?>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-sm-3'></div>
                            <div class='col-sm-9 text-secondary'>
                                <input id="saveChangesButton" type='submit' class='btn px-4 save-changes-button' value='Save Changes'>
                            </div>
                        </div>
                    </form>
                </div>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='d-flex align-items-center mb-3'>Lessons</h5>
                                <p>Html</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $currentUser['html'] ?>%' aria-valuenow='<?php echo $currentUser['html'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Css</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $currentUser['css'] ?>%' aria-valuenow='<?php echo $currentUser['css'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Javascript</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $currentUser['javascript'] ?>%' aria-valuenow='<?php echo $currentUser['javascript'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>C</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $currentUser['c'] ?>%' aria-valuenow='<?php echo $currentUser['c'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Cpp</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $currentUser['cpp'] ?>%' aria-valuenow='<?php echo $currentUser['cpp'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Python</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $profilepython ?>%' aria-valuenow='<?php echo $profilepython ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>