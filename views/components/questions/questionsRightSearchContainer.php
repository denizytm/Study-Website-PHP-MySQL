<div class="bottom-right-search-container">
    <div class="inner-top-right-container">
        <form class="inner-right" method="POST" action="/questions?page=1" >
            <label class="label" for="by-publisher-container"> <h2>By Publisher</h2> </label>
            <div class="input-container">
                <input type="hidden" name="byPublisher" value="true" >
                <input type="hidden" name="radioDate" value="<?php echo $dateFilter ?>" >
                <input type="hidden" name="checkboxType" value="<?php echo $typeFilter ?>" >
                <input type="hidden" name="checkboxLanguage" value="<?php echo $languageFilter ?>" >
                <input type="hidden" name="page" value="1" >
                <input 
                    name="searchData"
                    class="by-publisher-container"
                    type="text" 
                    placeholder="Filtered Search" 
                    value="<?php if(isset($searchData)) echo $searchData; ?>" 
                />   
                <button class="submit" >Search<div class="circle"></div></button> 
            </div>
        </form>
    </div>
    <div class="inner-bottom-right-container">
        <ul class="data-list-container" >
            <?php 
            if ($questionsData != null || count($questionsData)) {
                $lastIndex = 0;
                $start = ($pageData - 1) * 5;
                $end = min($start + 5, count($questionsData));

                for ($i = $start; $i < $end; $i++) {
                    $lastIndex = $i;
                    if (!array_key_exists($i, $questionsData)) {
                        continue;
                    }
                    $questionData = $questionsData[$i]?>
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
                        <a class="user-profile-link" href="/profile?username=<?php echo $questionData['username'] ?>">
                            <h5><?php echo $questionData['username']; ?></h5>
                        </a>
                        <a class="question-text" href="/questions?id=<?php echo $questionData['questionID'];?>" ><?php echo $questionData['content']; ?></a>
                    </div>
                    <div class="tags" >
                        <ul>
                            <?php 
                            $tags = explode(" ",$questionData["tags"]);
                            foreach($tags as $tag) : ?>
                            <li>
                                <a href="/search?searchData=<?php echo $tag ?>&page=1"><?php echo $tag; ?></a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="bot-side">
                        <div class="details-container">
                            <ul>
                                <li class="left-bot-li"><?php echo $questionData['views']; ?> views</li>
                                <li class="left-bot-li"><?php echo $questionData['answers']; ?> answers</li>
                                <li class="right-bot-li"><?php echo $questionData['date']; ?></li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="/questions?id=<?php echo $questionData['questionID']; ?>" >See</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php }
            }?>
        </ul>
    </div>
    <div class="prev-next-container">
        <?php if($pageData != 1) : ?> 
            <?php if(isset($dateFilter) || isset($languageFilter) ) : ?>
                <form action="/questions?page=<?php echo $pageData -1 ?>" method="POST" >
                    <input type="hidden" name="radioDate" value="<?php echo $dateFilter ?>" >
                    <input type="hidden" name="checkboxLanguage" value="<?php echo $languageFilter ?>" >
                    <button type="submit" >Prew</button>
                </form>
            <?php else : ?>
            <a style='margin : 50px' href='/questions?page=<?php echo $pageData - 1 ?>' >Prew</a>
            <?php endif ?>
        <?php endif ?>
        <?php if(count($questionsData) != ($lastIndex+1))  : ?>
            <?php if(isset($dateFilter) || isset($languageFilter) ) : ?>
                <form action="/questions?page=<?php echo $pageData + 1 ?>" method="POST" >
                    <input type="hidden" name="radioDate" value="<?php echo $dateFilter ?>" >
                    <input type="hidden" name="checkboxLanguage" value="<?php echo $languageFilter ?>" >
                    <button type="submit" >Next</button>
                </form>
            <?php else : ?>
                <a style='margin : 50px' href='/questions?page=<?php echo $pageData + 1 ?>' >Next</a>
            <?php endif ?>
        <?php endif ?>
    </div>
</div>