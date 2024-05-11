
<?php
    require controllers("navbarController.php");
?>


<div class="text-container">
    <h1 class="title" > Select One </h1>
    <img src="./views/assets/library.png" alt="library icon">
</div>

<?php 
    require "./views/components/study/studiesContainer.php";
?>

<?php 
    require "./views/components/global/footer.php";
?>

<?php
    require components("global/goUpButton.php");
?>

<script src="./views/script/global/button.js" ></script>
<script src="./views/script/global/navbar.js" ></script>