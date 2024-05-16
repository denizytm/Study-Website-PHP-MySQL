
<?php
    require controllers("navbarController.php");
?>


<div class="progress-container">
    <?php require components("progress/topProgressContainer.php"); ?>
    <?php require components("progress/bottomProgressContainer.php"); ?>
</div>


<?php 
    require components("global/footer.php");
?>

<?php
    require components("global/goUpButton.php");
?>

<script src="./views/script/global/button.js" ></script>
<script src="./views/script/global/navbar.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>