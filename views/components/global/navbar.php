<nav id="navbar" >
    <div class="icon-container">
        <img src="./views/assets/logo.jpg" />
        <div class="search-bar-container">
        <form action="/search" method="GET">
            <input
              name="searchData" 
              class="search-bar" 
              type="text" 
              value="<?php if(isset($searchData)) echo $searchData; ?>"
            />
            <button type="submit">
                <img class="search-bar-icon" src="./views/assets/search-bar.png" alt="">
            </button>
        </form>
        </div>
    </div>
    <div class="navigation-container">
        <ul>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/") echo "active";
            ?>">
                <a href="/" >Home</a>
            </li>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/study") echo "active";
            ?>">
                <a href="/study" >Study</a>
            </li>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/questions") echo "active";
            ?>">
                <a href="/questions" >Questions</a>
            </li>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/contact") echo "active";
            ?>">
                <a href="/contact" >Contact Us</a>
            </li>
        </ul>
    </div>
    <div class="login-register-container">
        <a href="/login" >Log In</a>
        <a href="/register" >Register</a>
    </div>
</nav>