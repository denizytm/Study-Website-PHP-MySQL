<?php if($questionData['isOpen']) : ?>
    <div id="answer" class="submit-answer-container">
        <div class="title">
            <h3>Submit an Answer</h3>
        </div>
        <form class="form" method="POST" action="/questions?id=<?php echo $questionData['questionID'] ?>" >
            <textarea class="text" name="answer" id=""></textarea>
            <?php if(array_key_exists("answer",$errors)) : ?>
                <p class="error" style="color : red;" ><?php echo $errors['answer'] ?></p>
            <?php endif ?>
            <div class="button-container">
                <button class="button" type="submit" >Submit</button>
            </div>
        </form>
    </div>
<?php else : ?>
    <div class="post-closed-container">
        <h1 class="title" >The Post Is Closed</h1>
        <img class="image" src="<?php echo publicImage("closed.png") ?>" alt="">
    </div>
<?php endif ?>
