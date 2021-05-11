<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
    </div>
  </nav>
  <div class="col-md-3"></div>
  <div class="col-md-6 well">
    <h3 class="text-primary">PHP - Login Form In SQLite</h3>
    <hr style="border-top:1px dotted #ccc;"/>
    <div class="col-md-6">
      <form action="" method="POST">
        <div class="form-group">
          <label>userid</label>
          <input type="text" name="userid" class="form-control" required="required"/>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required="required"/>
        </div>
    
        <center><button name="login" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button></center>
        
      </form>
      <br />
      <?php include 'login.php'?>
    </div>
    <div class="col-md-3">
      <h6>Default userid: zpirit0605</h6>
      <h6>Default password: jemblong</h6>
    </div>
  </div>

</body> 
</html>