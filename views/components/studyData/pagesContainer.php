<div class="pages">
    <div class="upper-container">
        <h2 class="title" >
            <?php echo $studyTitle; ?>
        </h2>
        <ul class="titles-container" >
            <?php foreach($pagesTitleData as $index => $pageTitle) : ?>
                <li class="page-title-container <?php if(intval($page) === $index + 1) echo "selected"; ?>" >
                    <a href="/study?title=<?php echo $studyTitle ?>&page=<?php echo $index+1;?>"><?php echo $pageTitle; ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <div class="bottom-container">
        <div class="example-button">
            <a href="/example?title=<?php echo $studyTitle ?>&test=1&page=1" ><?php echo $studyTitle ?> Example - 1 <div class="circle"></div></a>
        </div>
        <div class="example-button">
            <a href="/example?title=<?php echo $studyTitle ?>&test=2&page=1" ><?php echo $studyTitle ?> Example - 2 <div class="circle"></div></a>
        </div>
        <div class="example-button">
            <a href="/example?title=<?php echo $studyTitle ?>&test=3&page=1" ><?php echo $studyTitle ?> Example - 3 <div class="circle"></div></a>
        </div>
    </div>
</div>