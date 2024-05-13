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
                    <?php foreach($questionsData as $questionData) : ?>
                        <li class="question" >
                            <div class="image-container">
                                <img src="<?php echo $questionData['userImage']; ?>" alt="">
                            </div>
                            <div class="question-text-container">
                                <div class="question-title">
                                    <?php echo $questionData['title'] ?>
                                </div>
                                <div class="question-text">
                                    <?php echo $questionData['content'] ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
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
            <form class="form" action="/myQuestions" method="POST" enctype="multipart/form-data" >
                <label for="title">Title</label>
                <input type="text" name="title" style="height: 40px;" >
                <label for="tags">Tags</label>
                <input type="text" name="tags" >
                <div class="textarea-container">
                    <textarea class="text" name="content" id=""></textarea>
                    <?php if(array_key_exists("content",$errors)) echo "<p class='error' >$errors[post]</p>" ?>
                </div>
                <div class="image-container">
                    <p>You can also upload image for your qustion : </p>
                    <label class="image-label btn button" for="image">Pick a image</label>
                    <input class="image-input" id="image" name="image" type="file"  >
                    <?php if(array_key_exists("image",$errors)) echo "<p class='error' >$errors[image]</p>" ?>
                </div>
                <div class="button-container">
                    <button class="button" type="submit" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>