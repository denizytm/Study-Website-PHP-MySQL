<div class="bottom-right-search-container">
    <div class="inner-top-right-container">
        <form class="inner-right">
            <label class="label" for="by-publisher-container"> <h2>By Publisher</h2> </label>
            <div class="input-container">
                <input name="by-publisher-container" class="by-publisher-container" type="text" placeholder="By Publisher" />   
                <button class="submit" >Search<div class="circle"></div></button> 
            </div>
        </form>
    </div>
    <div class="inner-bottom-right-container">
        <ul class="data-list-container" >
            <?php foreach($questionsData as $questionData) : ?>
                <li class="question">
                <div class="image-container">
                    <img class="image" src="<?php
                        if($questionData['userImage'] != null) {
                            echo $questionData['userImage'];
                        } else {
                            echo "./views/assets/person.png";
                        }

                        ?>" alt="">
                </div>
                <div class="text-container">
                    <div class="top-side">
                        <h3>
                            <a href="/questions?id=<?php echo $questionData['questionID'];?>" ><?php echo $questionData['title']; ?></a>
                        </h3>
                        <a class="user-profile-link" href="/profile?username=<?php echo $questionData['username']; ?>" >
                            <h5>
                                <?php echo $questionData['username']; ?>
                            </h5>
                        </a>
                        <a class="question-text" href="/questions?id=<?php echo $questionData['questionID'];?>" ><?php echo $questionData['content']; ?></a>
                    </div>
                    <div class="tags" >
                        <ul>
                            <?php 
                                $tags = explode(" ",$questionData["tags"]);
                                foreach($tags as $tag) : ?>
                                    <li>
                                        <a href="/search?searchData=<?php echo $tag ?>"><?php echo $tag; ?></a>
                                    </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="bot-side">
                        <div class="details-container">
                            <ul>
                                <li class="left-bot-li"><?php echo $questionData['views']; ?> views</li>
                                <li class="left-bot-li"i><?php echo $questionData['answers']; ?> answers</li>
                                <li class="right-bot-li"><?php echo $questionData['questionDate']; ?></li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="/questions?id=<?php echo $questionData['questionID']; ?>" >See</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="prev-next-container">
        <?php 
            if($pageData != 1) {
                echo "<a style='margin : 50px' href='/questions?page=". $pageData-1 ."'>Prew</a>";
            }
            if(!$isFinal) {
                echo "<a style='margin : 50px' href='/questions?page=". $pageData+1 ."'>Next</a>";
            }
        ?>
    </div>
</div>
