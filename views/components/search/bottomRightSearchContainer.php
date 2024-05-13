
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
    <div class='inner-bottom-right-container'>
        <ul class='data-list-container' >
            <?php
                if($datas == null) {
                    // echo "bos";
                } else {
                    foreach($datas as $element){
                        $type = $element["type"];
                        $name = $element["name"];
                        $language = $element["language"];
                        $date = $element["date"];
                        $promotion = $element["promotion"];
                        $tags = explode("-",$element["tags"]);
                        ?>
                        <li class='data-container' >
                            <img class='image' src='./views/assets/study.png' alt='image'>
                            <div class='text-container'>
                                <div class='inner-text-container'>
                                    <h2 class='title' >
                                        <?php echo $name; ?>
                                    </h2>
                                    <h5 class='type'><?php echo $type ?></h5>
                                    <p class='list-text'><?php echo $promotion ?></p>
                                </div>
                                <ul class='tag-list-container' >
                                    <?php foreach($tags as $tag): ?>
                                    
                                        <li class='tag' ><a href='/search?searcData=tag'><?php echo $tag ?><div class='circle'></div> </a></li>
                                    <?php endforeach?>
                                </ul>
                                <div class='button'>
                                    <a href='/study?title=html&page=1'>Read</a>
                                </div>
                            </div>
                        </li>
            <?php   }}?>
        </ul>
        <div class="prev-next-container">
        <?php 
            if($pageData != 1) {
                echo "<a href='/search?searchData=". $searchData ."&page=". $pageData-1 ."'>prew</a>";
            }
            if(!$isFinal) { 
                echo "<a href='/search?searchData=". $searchData ."&page=". $pageData+1 ."'>next</a>";
            }
        ?>
        </div>
    </div>
</div>