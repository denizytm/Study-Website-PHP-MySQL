<div class="question-data-container">
    <div class="question-text-container">
        <div class="question-title">
            <h1>
                <?php echo $questionData['title']; ?>
            </h1>
        </div>
        <div class="question-text">
            <?php echo $questionData['content']; ?>
        </div>
        <div class="question-image">
            <?php if($questionData['postImage']) : ?>
                <img src="<?php echo $questionData['postImage']; ?>" alt="">
            <?php endif ?>
        </div>
        <div class="question-buttons">
            <?php if($currentUser['username'] === $questionData['username']) : ?>
                <form action="/questions?id=<?php echo $questionData['questionID'] ?>" method="POST" >
                    <input type="hidden" name="close" >
                    <?php if($questionData['isOpen']) : ?>
                        <button class="button" type="submit" >Close Post</button>
                    <?php endif ?>
                </form>
            <?php else : ?>
                <a class="button" href="#answer">Answer</a>
            <?php endif ?>
            <a class="button" href="#answers">See Answers</a>
        </div>
    </div>
    <div class="user-post-container">
        <div class="user-data-container">
            <div class="user-image-container">
                <img class="user-image" src="<?php echo $questionData['userImage']; ?>" alt="user-image">
            </div>
            <div class="user-data">
                <ul class="list" >
                    <li class="list-data" >Username : <?php echo $questionData['username']; ?></li>
                    <li class="list-data" >Level : <?php echo $questionUser['level'] ?></li>
                    <li class="list-data" >Total Posts : <?php echo $questionUser['totalPost'] ?></li>
                    <li class="list-data" >Questions Answered : <?php echo $questionUser["totalAnswers"] ?> </li>
                    <li class="list-data" >Profile Views : <?php echo $questionUser['profileViews'] ?></li>
                </ul>
                <div class="button-container">
                    <?php if($currentUser['username'] === $questionData['username']) : ?>
                        <a href="/profile?username=<?php echo $questionData['username']; ?>" class="button" >My Profile</a>
                    <?php else : ?>
                        <a href="/profile?username=<?php echo $questionData['username']; ?>" class="button" >See Profile</a>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="post-data-container">
            <div class="title">
                <h3>Post Details</h3>
            </div>
            <ul>
                <li>
                    When Posted : <?php echo $questionData['date']; ?>
                </li>
                <li>
                    Total Answers : <?php echo $questionData['answers']; ?>
                </li>
                <li>
                    Status : <?php if($questionData['isOpen']) echo "Still Open"; else echo "Closed"; ?>
                </li>
            </ul>
        </div>
    </div>
</div>