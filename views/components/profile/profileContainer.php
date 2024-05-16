<div class='container'>
    <?php if(!$currentUser['username']) require components("global/alertAfterLogin.php"); ?>
    <div class='main-body'>
        <div class='row'>
            <div class='col-lg-4'>
                <div class='card user-image-container'>
                    <div class='card-body'>
                        <div class='d-flex flex-column align-items-center text-center'>
                            <img id="userImage" src='<?php echo $userData['userImage'] ?? "./views/assets/person.png" ?>' class='rounded-circle p-1 user-image'>
                            <div class='mt-3'>
                                <h4><?php echo $userData['username'] ?></h4>
                                <h5>Level : <?php echo $userData['level'] ?></h5>
                                <h5>Total Post : <?php echo $userData['totalPost'] ?></h5>
                                <h5>Total Views : <?php echo $userData['profileViews'] ?></h5>
                                <?php if($myProfile) : ?>
                                    <form action="/profile" method="POST" enctype="multipart/form-data" class="buttons-container">
                                        <label for="imageFile" class="btn button">Select image</label>
                                        <input id="imageFile" name="imageFile" class="hidden" type="file">
                                        <button type="submit" class="btn button">Save</button>
                                    </form>
                                <?php endif ?>
                                <?php if(array_key_exists("name",$_FILES)) echo $FILES['name'] ?>
                                <?php if(array_key_exists("image",$errors)) echo "<div> $errors[image] </div>" ?>
                                <?php if(!$myProfile) : ?>
                                    <button class='btn button ' style="margin-top: 15px;" >Follow</button>
                                <?php else : ?>
                                    <button class='btn btn-primary d-none ' disabled ></button>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class='col-lg-8'>
                <?php if($myProfile) : ?>
                    <div class='card user-form-container'>
                        <form class='card-body' action="/profile" method='POST'>
                            <div class='row mb-3'>
                                <div class='col-sm-3'>
                                    <h6 class='mb-0'>First Name</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <input id="firstNameInput" name='firstName' type='text' class='form-control' value='<?php echo $userData['firstName'] ?>'>
                                    <?php if(array_key_exists("firstName",$errors)) echo "<div class='error'> ". $errors['firstName'] . "</div>";  ?>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <div class='col-sm-3'>
                                    <h6 class='mb-0'>Last Name</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <input id="lastNameInput" name='lastName' type='text' class='form-control' value='<?php echo $userData['lastName'] ?>'>
                                    <?php if(array_key_exists("lastName",$errors)) echo "<div class='error'> ". $errors['lastName'] . "</div>";  ?>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <div class='col-sm-3'>
                                    <h6 class='mb-0'>Email</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <input id="emailInput" name='email' type='text' class='form-control' value='<?php echo $userData['email'] ?>'>
                                    <?php if(array_key_exists("email",$errors)) echo "<div class='error'> ". $errors['email'] . "</div>";  ?>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <div class='col-sm-3'>
                                    <h6 class='mb-0'>Username</h6>
                                </div>
                                <div class='col-sm-9 text-secondary'>
                                    <input id="usernameInput" name='username' type='text' class='form-control' value='<?php echo $userData['username'] ?>'>
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
                <?php endif ?>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='d-flex align-items-center mb-3'>Lessons</h5>
                                <p>Html</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $userData['html'] ?>%' aria-valuenow='<?php echo $userData['html'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Css</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $userData['css'] ?>%' aria-valuenow='<?php echo $userData['css'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Javascript</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $userData['javascript'] ?>%' aria-valuenow='<?php echo $userData['javascript'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>C</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $userData['c'] ?>%' aria-valuenow='<?php echo $userData['c'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Cpp</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $userData['cpp'] ?>%' aria-valuenow='<?php echo $userData['cpp'] ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                                <p>Python</p>
                                <div class='progress mb-3'>
                                    <div class='progress-bar' role='progressbar' style='width: <?php echo $profilepython ?>%' aria-valuenow='<?php echo $profilepython ?>' aria-valuemin='0' aria-valuemax='100'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(isset($questionsData) && !$myProfile) : ?>
                    <div class="questions-row row">
                        <h1 class="title" >Posted Questions</h1>
                        <ul class="questions" >
                            <?php foreach($questionsData as $questionData) : ?>
                                <li class="question" >
                                    <div class="image-container">
                                        <img class="user-image" src="<?php echo $questionData['userImage']; ?>" alt="">
                                    </div>
                                    <div class="question-text-container">
                                        <a href="/questions?id=<?php echo $questionData['questionID'] ?>">
                                            <div class="question-title">
                                                <?php echo $questionData['title'] ?>
                                            </div>
                                            <div class="question-text">
                                                <?php echo $questionData['content'] ?>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>