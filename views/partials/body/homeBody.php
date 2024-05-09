
<?php
    require components("global/navbar.php");
?>

<div class="home-banner-container">
    <div class="home-banner-inner-container">
        <?php
            require components("home/homeLeftBanner.php");
        ?>
    <div class="column"></div>
        <?php 
            require components("home/homeRightBanner.php");
        ?>
    </div>
</div>

<?php
    require components("home/steps.php");
?>

<?php 
    require components("global/footer.php");
?>

<?php
    require components("global/goUpButton.php");
?>

<script src="./views/script/home/home.js" ></script>
<script src="./views/script/global/button.js" ></script>
<script src="./views/script/global/navbar.js" ></script>
