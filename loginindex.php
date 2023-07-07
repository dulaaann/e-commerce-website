<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="login-container">
    <div id="main">
      <h1>Sign In</h1>
      <input id="email" type="text" placeholder="Email"></input>
      <input id="password" type="password" placeholder="Password"></input>
      <button id="submit"><b>Submit</b></button>
      <p><span>or</span></p>
      <button id="sign-up"><i>Sign Up</i></button>
    </div>

    <div id="create-acct">
      <h1>Create an Account</h1>
      <input id="email-signup" type="text" placeholder="Email *"></input>
      <input id="confirm-email-signup" type="email" placeholder="Confirm Email *"></input>
      <input id="password-signup" type="password" placeholder="Password *"></input>
      <input id="confirm-password-signup" type="password" placeholder="Confirm Password *"></input>
      <button id="create-acct-btn"><b>Create Account</b></button>
      <button id="return-btn">Return to Login</button>
    </div>
  </div>
  <script type="module" src="loginAuthScript.js"></script>
</body>

</html>