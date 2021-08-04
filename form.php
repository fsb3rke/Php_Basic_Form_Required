<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <br><br><br>
    <center>
    <form action="getformaps.php" method="post" style="width:550px; height:250px; margin-left:35px;">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">@</span>
    </div>
    <input type="text" class="form-control" placeholder="Username" name="username">
  </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password">
    </div>
    <label for="demo">Email:</label>
    <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Email" id="demo" name="email">
    <div class="input-group-append">
        <span class="input-group-text">@example.com</span>
    </div>
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br><br><br><br>
    </center>
</body>
</html>
