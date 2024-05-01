<body>
<div class="icon-container">
    <img class="icon" src="./views/assets/login.png" alt="">
</div>
<div class="login-container">
    <h1>Sign In</h1>
    <form class="form" action="./controllers/login.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
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
</body>
</html>