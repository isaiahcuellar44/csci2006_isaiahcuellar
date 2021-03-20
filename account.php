
<?php

//How do i check if anything else was submitted?

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


?>
