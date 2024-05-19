<div class="data-container">    
    <div class="inner-data-container">
        <?php if($page != 1 && $currentUser ) : ?>
            <form method="POST" action="/study?title=<?php echo $studyTitle ?>&page=<?php echo $page-1 ?>">
                <input name="currentPage" value="<?php echo $page ?>" type="hidden">
                <button class="prev-button" type="submit">prev<div class="circle"></div></button>
            </form>
        <?php endif ?>
        <?php echo $pageContent['content']; ?>
        <?php if($page != $totalPage && $currentUser ) : ?>
            <form method="POST" action="/study?title=<?php echo $studyTitle ?>&page=<?php echo $page+1 ?>">
                <input name="currentPage" value="<?php echo $page ?>" type="hidden">
                <button class="next-button" type="submit">next<div class="circle"></div></button>
            </form>
        <?php endif ?>
    </div>
    <?php 
        require "./views/components/global/footer.php";
    ?>
</div>

