<div class="pages">
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