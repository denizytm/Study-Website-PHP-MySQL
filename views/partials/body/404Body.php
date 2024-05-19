
<?php
    require controllers("navbarController.php");
?>

<div class="not-found-container">
    <div class="inner-container">
        <img class="image" src=" <?php echo publicImage("404.png") ?> " alt="">
        <h1>404 Not Found</h1>
        <a href="/" class="button" >Go Home</a>
    </div>
</div>

<?php 
    require components("global/footer.php");
?>