
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
                <div class = "returns">
                  <form method="POST" action="">
                    <label for="username">Username: </label>
                    <input type="text" name="userName"><br>

                    <label for ="ordernumber">Order Number: </label>
                    <input type="text" name="orderNumber"><br>

                    <input type="button" value="Submit">
                  </form>
                </div>
        __HTML__;
}

function premium(){
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
  return <<<__HTML__
  <form method="POST" action="validate.php">
    Enter a username: <input type="text" name="username"><br>
    Enter your passord: <input type="password" name="password"><br>
    <input type="submit" name="submitSignIn" value="submit">
  </form>
  __HTML__;
}

#In this form(s) lets make sure when the user mistypes information and its not valid, lets make sure the input is left there 
function signUp(){
  return <<<__HTML___
  <form method="POST" action="">
    Enter a username: <input type="text" name="newUser"><br>
    Enter a password: <input type="password" name="newPass"><br>
    Enter your full name: <input type="text" name="newFullName"><br>
    Enter your addres: <input type="text" name="newAddress"><br>
    <input type="submit" name="newUser" value="Confirm">
  </form>

  __HTML___;
}


?>
