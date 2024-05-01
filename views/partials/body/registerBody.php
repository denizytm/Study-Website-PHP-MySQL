<body>
<div class="icon-container">
    <img class="icon" src="./views/assets/register.png" alt="">
</div>
<div class="register-container">
    <h1>Sign Up</h1>
    <form class="form" action="./controllers/register.php" method="POST" >
      <div class="mb-3">
        <label for="name" class="form-label">First Name</label>
        <input name="name" type="text" class="form-control" id="name">
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input name="lastName" type="text" class="form-control" id="lastName">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input name="confirmPassword" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="button-container">
          <button type="submit" class="btn button1">Register</button>
          <a href="/" class="btn button2">Cancel</a>
      </div>
      <div class="link-container">
          <a href="/login">Already have an account ? </a>
      </div>
    </form>
</div>
</body>
</html>