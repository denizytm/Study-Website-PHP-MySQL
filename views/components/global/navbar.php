<nav>
    <div class="icon-container">
        <img src="./views/assets/logo.jpg" />
        <div class="search-bar-container">
        <input 
          class="search-bar" 
          type="text" 
        />
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
        <button>Log In</button>
        <button>Register</button>
    </div>
</nav>