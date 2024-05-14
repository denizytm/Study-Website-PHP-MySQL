<div class="top-inner-container">
    <div class="questions-container">
        <div class="title">
            <h1>
                My Questions
            </h1>
        </div>
        <div class="questions-inner-container">
            <ul class="questions">
                <?php if($questionsData) : ?>
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
                <?php endif ?>
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
                <li class="list-data" >Questions Answered : <?php echo $currentUser['totalAnswers'] ?></li>
                <li class="list-data" >Profile Views : <?php echo $currentUser['profileViews'] ?></li>
            </ul>
            <div class="button-container">
                <a href="#question" class="button" >Post Question</a>
            </div>
        </div>
    </div>
</div>