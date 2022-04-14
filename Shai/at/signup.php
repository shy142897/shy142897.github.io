<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div id="login">
        <form id="login_form">
          <div class="field_container">
            <input type="text" placeholder="Name">
          </div>
          <div class="field_container">
            <input type="text" placeholder="Email">
          </div>
          <div class="field_container">
            <input type="text" placeholder="Password">
          </div>
          
          <div class="field_container">
            <input type="Password" placeholder="Re- type Password">
            <button id="sign_in_button">
              <span class="button_text">Sign Up</span>
            </button>
          </div>
          
          <div id="sign_in_options" class="field_container">
              <div id="sign_in_alternatives_container">
                <span id="google_sign_in_option">or you can <a href="#" id="google_sign_in" class="login_link">sign up with Google</a></span>
                <span id="password_sign_in_option">or you can <a href="#" id="password_sign_in" class="login_link">sign in using a password</a></span>
              </div>
              <div id="remember_me_container">
                <input name="user[remember_me]" type="hidden" value="0"><input id="user_remember_me" name="user[remember_me]" type="checkbox" value="1">
                <label class="login_link" for="user_remember_me" id="remember_me_label">stay signed in</label>
              </div>
              <div class="clearfix"></div>
            </div>
      </form><div id="chrome_web_store" style="opacity: 1;"><span id="chrome_logo"></span><h2>Using Google Chrome? <a id="chrome_ad_link" href="#">Get Login</a> for Chrome!</h2></div>
        

      </div>
</body>
</html>