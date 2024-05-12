<?php
    require components("global/navbar.php");
?>

<div class="title">
    <h1><?php if($myProfile) echo "My Profile"; else echo "Other Profile" ?></h1>
    <img class="image" src="./views/assets/profile.png" alt="">
</div>

<?php 
    require components("profile/profileContainer.php"); 
?>

<?php 
    require components("global/footer.php");
?>

<?php
    require components("global/goUpButton.php");
?>

<script src="./views/script/profile/image.js" ></script>
<script src="./views/script/profile/profile.js" ></script>
<script src="./views/script/global/button.js" ></script>
<script src="./views/script/global/navbar.js" ></script>