
<?php

function accountDetails(){
  return <<<__HTML__
                  <form method="POST" action="">
                    <label for="name">Name: </label>
                    <input type="text" name="fName" placeholder="Name"><br>

                    <label for="username">Username: </label>
                    <input type="text" name="userName" placeholder="Username"><br>

                    <label for ="password">Password: </label>
                    <input type="password" name="passW" placeholder="Password"><br>

                    <label for="addressLine1">Address: </label>
                    <input type="text" name="addressLine1" placeholder="Address Line 1"><br>

                    <label for"addressLine2"></label>
                    <input type="text" name="addressLine2" placeholder="Address Line 2"><br>

                    <input type="button" value="Save Changes">
                    </form>

        __HTML__;
}

function returns(){
  return <<<__HTML__
                  <form method="POST" action="">
                    Username: <input type="text" name="userName"><br>
                    Order Number: <input type="text" name="orderNumber"><br>
                    <input type="button" value="Submit">
                  </form>
        __HTML__;
}

function premium(){ #With this we should also have a switch when the user is already signed in it will only ask two things of username and password, otherwise it shouldn't be displayed at all
  return <<<__HTML__
                <div class = "premium">
                  <form method="POST" action="">
                    <P>Ready for a premium membership? When you get a premium membership you'll pay an extra $10 a month for free shipping and a 10% discount on all artwork! So what are you waiting for? Sign up today!</p><br>

                    <label for="username">Username: </label>
                    <input type="text" name="userName"><br>

                    <label for ="password">Password: </label>
                    <input type="password" name="passW" placeholder="Password"><br>

                    <input type="button" value="Get Premium">
                  </form>
                </div>
        __HTML__;
}

#When i make that conditional this will only allow the user to log out after a sign in/ sign up.
#So for now we will just leave this as an optin until next week when I meet with Matt and work on it with him a little bit for some help with the sql portion

function logout(){
  session_start();
  session_destroy(); #This destroys the users session
  return "<h3>You have successfully logged out.</h3>";
}

function signIn(){
  session_start();
  # value="<?php echo htmlentities($username)" we would want something like this to display in afte the user inputs data
  return <<<__HTML__
  <form method="POST" action="validate.php">
    Enter a username: <input type="text" name="username"><br>
    Enter your passord: <input type="password" name="password" minlength="8" required><br>
    <input type="submit" name="submitSignIn" value="submit">
  </form>
  __HTML__;
}

#In this form(s) lets make sure when the user mistypes information and its not valid, lets make sure the input is left there
function signUp(){
  session_start();
  return <<<__HTML___
  <form method="POST" action="">
    Enter a username: <input type="text" name="newUser" minlength="6" required><br>
    Enter a password: <input type="password" name="newPass" minlength="8" required><br>
    Enter your full name: <input type="text" name="newFullName" required><br>
    Enter your street address: <input type="text" name="newAddress" required><br>
    <input type="submit" name="newUser" value="Confirm">
  </form>

  __HTML___;
}


?>
