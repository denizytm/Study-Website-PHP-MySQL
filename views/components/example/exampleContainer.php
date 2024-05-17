<div class="example-container">
    <div class="inner-example-container">
        <div class="title">Question <?php echo $page ?> / 10</div>
        <div class="question-container">
            <?php if($page !== 1 && $isDone) : ?>
                <a href="/example?title=<?php echo $title ?>&test=<?php echo $test ?>&page=<?php echo $page - 1 ?>" class="prev-button"><img src="<?php echo publicImage("left-arrow.png") ?>" alt=""></a>
            <?php endif ?>
            <div class="question-title">
                <?php echo $exampleData['content'] ?>
            </div>
            <div class="answers-container">
                <div class="top-answers">
                    <form method="POST" action="/example?title=<?php echo $title ?>&test=<?php echo $test ?>&page=<?php echo $page ?>">
                        <input name="userAnswer" type="hidden" value="a" >
                        <button style="<?php if($isDone && $exampleData['answer'] === "a") echo "background-color:green"; else if(isset($userAnswer) && $userAnswer === "a") echo "background-color:red"; ?>" type="submit" class="answer">A ) <?php echo $a ?><div class="circle"></div></button>
                    </form>
                    <form method="POST" action="/example?title=<?php echo $title ?>&test=<?php echo $test ?>&page=<?php echo $page ?>">
                        <input name="userAnswer" type="hidden" value="b" >
                        <button style="<?php if($isDone && $exampleData['answer'] === "b") echo "background-color:green"; else if(isset($userAnswer) && $userAnswer === "b") echo "background-color:red";  ?>" type="submit" class="answer">B ) <?php echo $b ?><div class="circle"></div></button>
                    </form>
                </div>
                <div class="bottom-answers">
                    <form method="POST" action="/example?title=<?php echo $title ?>&test=<?php echo $test ?>&page=<?php echo $page ?>">
                        <input name="userAnswer" type="hidden" value="c" >
                        <button style="<?php if($isDone && $exampleData['answer'] === "c") echo "background-color:green"; else if(isset($userAnswer) && $userAnswer === "c") echo "background-color:red";  ?>" type="submit" class="answer">C ) <?php echo $c ?><div class="circle"></div></button>
                    </form>
                    <form method="POST" action="/example?title=<?php echo $title ?>&test=<?php echo $test ?>&page=<?php echo $page ?>">
                        <input name="userAnswer" type="hidden" value="d" >
                        <button style="<?php if($isDone && $exampleData['answer'] === "d") echo "background-color:green"; else if(isset($userAnswer) && $userAnswer === "d") echo "background-color:red";  ?>" type="submit" class="answer">D ) <?php echo $d ?><div class="circle"></div></button>
                    </form>
                </div>
            </div>
            <?php if($page !== 10 && $isDone)  : ?>
                <a href="/example?title=<?php echo $title ?>&test=<?php echo $test ?>&page=<?php echo $page + 1 ?>" class="next-button"><img src="<?php echo publicImage("right-arrow.png") ?>" alt=""></a>
            <?php endif ?>
        </div>
    </div>
</div>