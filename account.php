
<?php

//How do i check if anything else was submitted?
function buildingAForm($method){
  $action = ($method)? "GET" : "POST";

  echo <<<__HTML__
                  <form method="{$action}" action="artwork.php?action={$action}">
                    <label for="name">Name: </label>
                    <input type="text" name="fName" placeholder="Name"><br>

                    <label for="username">Username: </label>
                    <input type="text" name="uName" placeholder="Username"><br>

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


?>
