<div class="bottom-progress-container">
    <div class="title">
        <h1>Achievements</h1>
    </div>
    <div class="achievements-container">
        <ul class="achievements">
            <li class="group" >
                <h1>Study</h1>
                <ul class="inner-group" >
                    <?php foreach($studiesData as $studyData) : ?> 
                        <li class="achievement-container">
                            <div class="image-container">
                                <img class="image" src=" <?php echo $studyData["image"] ?> " alt="">
                            </div>
                            <div class="text-data">
                                <div class="inner-title">
                                    <h5>
                                        <?php echo $studyData['title'] ?>
                                    </h5>
                                </div>
                                <div class="inner-text">
                                    <?php echo $studyData['text'] ?>
                                </div>
                            </div>
                            <div class="done-container">
                                <div class="image-container">
                                    <?php if($studyData['isDone']) : ?>
                                        <img class="image" src="<?php echo publicImage("checked.png") ?>" alt="">
                                    <?php else : ?>
                                        <img class="image" src="<?php echo publicImage("empty-set.png") ?>" alt="">
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </li>
            <li class="group" >
                <h1>Questions</h1>
                <ul class="inner-group" >
                    <?php foreach($questionsData as $questionData) : ?>
                        <li class="achievement-container">
                            <div class="image-container">
                                <img class="image" src=" <?php echo $questionData['image'] ?> " alt="">
                            </div>
                            <div class="text-data">
                                <div class="inner-title">
                                    <h5>
                                        <?php echo $questionData['title'] ?>
                                    </h5>
                                </div>
                                <div class="inner-text">
                                    <?php echo $questionData['text'] ?>
                                </div>
                            </div>
                            <div class="done-container">
                                <div class="image-container">
                                    <?php if($questionData['isDone']) : ?>
                                        <img class="image" src="<?php echo publicImage("checked.png") ?>" alt="">
                                    <?php else : ?>
                                        <img class="image" src="<?php echo publicImage("empty-set.png") ?>" alt="">
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </li>
            <li class="group" >
                <h1>General</h1>
                <ul class="inner-group" >
                    <?php foreach($generalDatas as $generalData) : ?>
                        <li class="achievement-container">
                            <div class="image-container">
                                <img class="image" src="<?php echo $generalData['image'] ?>" alt="">
                            </div>
                            <div class="text-data">
                                <div class="inner-title">
                                    <h5>
                                        <?php echo $questionData['title'] ?>
                                    </h5>
                                </div>
                                <div class="inner-text">
                                    <?php echo $questionData['text'] ?>
                                </div>
                            </div>
                            <div class="done-container">
                                <div class="image-container">
                                    <?php if($generalData['isDone']) : ?>
                                        <img class="image" src="<?php echo publicImage("checked.png") ?>" alt="">
                                    <?php else : ?>
                                        <img class="image" src="<?php echo publicImage("empty-set.png") ?>" alt="">
                                    <?php endif ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </li>
        </ul>
    </div>
</div>