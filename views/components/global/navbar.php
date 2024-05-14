
<nav id="navbar" >
    <div class="icon-container">
        <img src=" <?php echo publicImage("logo.jpg") ?> " />
        <div class="search-bar-container">
        <form action="/search" method="GET">
            <input
              name="searchData" 
              class="search-bar" 
              type="text" 
              value="<?php if(isset($searchData)) echo $searchData; ?>"
            />
            <input style="display : none;" name="page" type="text" value="1">
            <button type="submit">
                <img class="search-bar-icon" src=" <?php echo publicImage("search-bar.png") ?> " alt="">
            </button>
        </form>
        </div>
    </div>
    <div class="navigation-container">
        <ul>
            <li class="<?php 
                if($requestData === "/") echo "active";
            ?>">
                <a href="/" >Home</a>
            </li>
            <li class="<?php 
                if($requestData === "/study") echo "active";
            ?>">
                <a href="/study" >Study</a>
            </li>
            <li class="<?php 
                if($requestData === "/questions") echo "active";
            ?>">
                <a href="/questions?page=1" >Questions</a>
            </li>
            <li class="<?php 
                if($requestData === "/contact") echo "active";
            ?>">
                <a href="/contact" >Contact Us</a>
            </li>
        </ul>
    </div>

    <?php if($currentUser) : ?>
        <div class='logged-account-container' id='user-logo-container' >
            <div class='image-container' id='image-container' >
                <img src=' <?php echo $currentUser['image'] ?> ' class='user-logo' id='user-logo' />
                <img src=' <?php echo publicImage("arrow-up.png") ?> ' class='arrow' id='arrow' />
            </div>
            <div class='user-menu' id='user-menu-container'>
                <div class='image-username-container'>
                    <img class='image' src= ' <?php echo $currentUser['image'] ?> ' />
                    <div class='level-username-container' >
                        <p> <?php echo $currentUser['username'] ?> </p>
                        <div class='level' >
                            <p class='level-text' >Level </p>
                            <p> <?php echo $currentUser['level'] ?> </p>
                        </div>
                    </div>
                </div>
                <ul class='link-container' >
                    <li><a href='/profile'>See Profile</a>
                    <li><a href='/progress'>My Progress</a>
                    <li><a href='/myQuestions'>My Questions</a>
                </ul>
                <div class='log-out-container' >
                    <a href='/' onclick='handleLogOut()' >Log Out</a>
                </div>
            </div>
        </div>
    <?php else : ?> 
    <div class='login-register-container'>
        <a href='/login' >Log In</a>
        <a href='/register' >Register</a>
    </div>
    <?php endif ?>
</nav>