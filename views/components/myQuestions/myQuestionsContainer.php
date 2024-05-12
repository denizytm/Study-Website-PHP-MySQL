<div class="my-questions-container">
    <div class="top-inner-container">
        <div class="questions-container">
            <div class="title">
                <h1>
                    My Questions
                </h1>
            </div>
            <div class="questions-inner-container">
                <ul class="questions">
                    <li class="question" >
                        <div class="image-container">
                            <img src="<?php echo $currentUser['image']; ?>" alt="">
                        </div>
                        <div class="question-text-container">
                            <div class="question-title">
                                How to center a div ?
                            </div>
                            <div class="question-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sint suscipit cum dolore iure lorem50
                            </div>
                        </div>
                    </li>
                    <li class="question" >
                        <div class="image-container">
                            <img src="<?php echo $currentUser['image']; ?>" alt="">
                        </div>
                        <div class="question-text-container">
                            <div class="question-title">
                                How to center a div ?
                            </div>
                            <div class="question-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sint suscipit cum dolore iure lorem50
                            </div>
                        </div>
                    </li>
                    <li class="question" >
                        <div class="image-container">
                            <img src="<?php echo $currentUser['image']; ?>" alt="">
                        </div>
                        <div class="question-text-container">
                            <div class="question-title">
                                How to center a div ?
                            </div>
                            <div class="question-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sint suscipit cum dolore iure lorem50
                            </div>
                        </div>
                    </li>
                    <li class="question" >
                        <div class="image-container">
                            <img src="<?php echo $currentUser['image']; ?>" alt="">
                        </div>
                        <div class="question-text-container">
                            <div class="question-title">
                                How to center a div ?
                            </div>
                            <div class="question-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sint suscipit cum dolore iure lorem50
                            </div>
                        </div>
                    </li>
                    <li class="question" >
                        <div class="image-container">
                            <img src="<?php echo $currentUser['image']; ?>" alt="">
                        </div>
                        <div class="question-text-container">
                            <div class="question-title">
                                How to center a div ?
                            </div>
                            <div class="question-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sint suscipit cum dolore iure lorem50
                            </div>
                        </div>
                    </li>
                    <li class="question" >
                        <div class="image-container">
                            <img src="<?php echo $currentUser['image']; ?>" alt="">
                        </div>
                        <div class="question-text-container">
                            <div class="question-title">
                                How to center a div ?
                            </div>
                            <div class="question-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sint suscipit cum dolore iure lorem50
                            </div>
                        </div>
                    </li>
                    <li class="question" >
                        <div class="image-container">
                            <img src="<?php echo $currentUser['image']; ?>" alt="">
                        </div>
                        <div class="question-text-container">
                            <div class="question-title">
                                How to center a div ?
                            </div>
                            <div class="question-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sint suscipit cum dolore iure lorem50
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="user-data-container">
            <div class="user-image-container">
                <img class="user-image" src="<?php echo $currentUser['image']; ?>" alt="user-image">
            </div>
            <div class="user-data">
                <ul class="list" >
                    <li class="list-data" >Username : <?php echo $currentUser['username'] ?></li>
                    <li class="list-data" >Level : <?php echo $currentUser['level'] ?></li>
                    <li class="list-data" >Total Posts : <?php echo $currentUser['totalPost'] ?></li>
                    <li class="list-data" >Questions Answered : 0</li>
                    <li class="list-data" >Profile Views : 12</li>
                </ul>
                <div class="button-container">
                    <a href="#question" class="button" >Post Question</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-inner-container">
        <div id="question" class="submit-answer-container">
            <div class="title">
                <h3>Post a Question</h3>
            </div>
            <form class="form">
                <textarea class="text" name="text" id=""></textarea>
                <div class="button-container">
                    <button class="button" type="submit" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
