<div class="login-container">
    <h1>Sign In</h1>
    <form class="form" action="/login" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" >
        <?php if(array_key_exists("email",$errors)) echo "<p class='error' >$errors[email]</p>" ?>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" >
        <?php if(array_key_exists("password",$errors)) echo "<p class='error' >$errors[password]</p>" ?>
      </div>
      <div class="button-container">
          <button type="submit" class="btn button1">Log In</button>
          <a href="/" class="btn button2">Cancel</a>
      </div>
      <div class="link-container">
          <a href="/register">Don't have an account ? </a>
      </div>
    </form>
</div>
