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
                <a class="button" href="#answer">Close Post</a>
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
                    <li class="list-data" >Level : 52</li>
                    <li class="list-data" >Total Posts : 12</li>
                    <li class="list-data" >Questions Answered : 5</li>
                    <li class="list-data" >Profile Views : 132</li>
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
                    When Posted : <?php echo $questionData['questionDate']; ?>
                </li>
                <li>
                    Total Answers : <?php echo $questionData['answers']; ?>
                </li>
                <li>
                    Status : <?php if($questionData['isOpen']) echo "Still Open"; ?>
                </li>
            </ul>
        </div>
    </div>
</div>