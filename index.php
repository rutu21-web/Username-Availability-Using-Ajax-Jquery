
<!DOCTYPE html>
<html lang="en">
<head>
<title>Live Username Available or not By using PHP Ajax Jquery</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <div class="container-box">
        <div class="form-group">
            
            <h3>Username availability in php and MySQL using Ajax Jquery</h3>
            <input type="text" name="username" id="username" placeholder="Username">
            <br>
            <br>
            <span id="availability"></span>
            <br>
            <button type="button" name="register" id="register" class="btn btn-info">Check</button>
        </div>
        <br>
        <br>
    </div>
  <script>
     $(document).ready(function(){  
   $('#username').blur(function(){

     var username = $(this).val();
     //alert(username);

     $.ajax({
      url:'getdata.php',
      method:"POST",
      data:{user_name:username},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">Username not available</span>');
        $('#register').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">Username Available</span>');
        $('#register').attr("disabled", false);
       }
      }
     })

  });
 });  
   </script>
</body>
</html>
