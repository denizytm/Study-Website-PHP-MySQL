<div id="answers" class="answers-container">
    <div class="title">
        <h3>Answers</h3>
    </div>
    <div class="answer-list-container">
        <ul class="answer-list">
            <?php foreach($answersData as $answerData) : ?>
                <li class="answer-container" >
                    <div class="image-container">
                        <img class="image" src="<?php echo $answerData['userImage'] ?>" alt="">
                    </div>
                    <div class="answer-data-container">
                        <div class="username">
                            <h4>
                                <a href="/profile?username=<?php echo $answerData['username'] ?>"><?php echo $answerData['username'] ?></a>
                            </h4>
                        </div>
                        <div class="answer-text">
                            <?php echo $answerData['text'] ?>
                        </div>
                        <!-- <div class="buttons-container">
                            <a class="button" href="#" >Answer</a>
                            <button class="button" onclick="()=>console.log('hello');" >See All</button>
                        </div> -->
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div> 

<script>
    
    const handleEvent = (event)=>{
        console.log(event);
    }

</script>