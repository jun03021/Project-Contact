<?php 
  include("session.php");
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ez contact</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="../css/bootstrap-theme.min.css"> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href='../css/style.css' rel='stylesheet'>
    
   <!-- <link href="../css/jumbotron-narrow.css" rel="stylesheet">-->

    
  </head>
  <body>
    

    <!-- <div class="menu">
      
      <div class="icon-close">
        <img src="../images/close.png">
      </div>
      
      <ul>
        <li><a href="#">Yw</a></li>
        <li><a href="#">Nong</a></li>
      </ul>
    </div> -->
    <!-- Main body -->
    <div class="jumbotron">
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#index-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand icon-menu" href="#">Chat</a> -->
      <a class="navbar-brand" href="main.php" style="margin-left:0px">Ez Home</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="index-navbar" style="background-color:pink">
      <ul class="nav navbar-nav">
        <!-- <li ><a href="main.php">Features </a></li> -->
        <li class="active"><a href="contact.php">Contact <span class="sr-only">(current)</span></a></li>
        <!-- <?php echo $_SESSION['login_user'];?> -->
      </ul>
       <?php if(isset($login_email)){?><ul class="nav navbar-nav navbar-right"><li><a href="profile.php?a=<?php echo $login_id;?>" class="navbar-link"><?php echo $login_fname .' '. $login_lname;?></a></li><?php }?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="access.php">Account Settings</a></li>
            <!-- <li><a href="#">Privacy Settings</a></li> -->
            <!-- <li><a href="#">Something else here</a></li> -->
            <li role="separator" class="divider"></li>
            <li><a href="support.php">Customer Support</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
      </div>
      </div>
      <center>
<?php
    $con = mysql_connect("localhost","root","");
           mysql_select_db("contacts", $con);

            $id = $_GET['id'];
    $query = "SELECT * FROM info where info_id=$id";
  //initializing result as a query
  $result = mysql_query($query);
  //display records from records table 
  while($rows = mysql_fetch_array($result))
  { 
          $user=$rows['user'];
          $name=$rows['name'];
          $phone=$rows['phone'];
          $phonetype=$rows['phonetype'];
          $address=$rows['address'];
          $birthday=$rows['birthday'];
          $company=$rows['company'];
          $note=$rows['note'];
   
    
  } 
        
  
    ?>
      <STRONG><h3>Edit Contact</h3></STRONG>
      | <a href='contact.php'>My Contact</a> | <a href='add.php'>Add Contact</a> |
       
       
      </center>
         
        <br />
      <hr>
      <br/>
   <div class="container">
    <table cellspacing="6" >
    <form class="form-signin" method="POST" action="updatecontact.php?id=<?php echo $id?>">
      
    
       <input type="text" class="form-control" name="user" value="<?php echo $_SESSION['login_user'];?>"readonly></td>
      </br>
      <input type="text" class="form-control" value='<?php echo $name?>'name="name" required autofocus></td>
      </br>
      <input type="text" class="form-control" value='<?php echo $phone?>'name="phone"required></td>
      </br>
      
      

      <input list="phonetype" class="form-control"value='<?php echo $phonetype?>' name="phonetype" required><br>

  <datalist id="phonetype">
    <option value="Mobile">
    <option value="Home">
    <option value="Work">
    <option value="School">
    <option value="Private">

  </datalist>

      <input type="text" class="form-control"value='<?php echo $address?>' name="address"required></td>
      </br>
        Birthday<input type="date" class="form-control" value='<?php echo $birthday?>'name="birthday"required></td>
      </br>

      <details>
      <summary>Write more details </summary>
      </br>
       <input type="text" class="form-control" value='<?php echo $company?>'name="company"></td>
      </br>
       <input type="text" class="form-control"value='<?php echo $note?>' name="note"></td>
      </br>
    </details>
      </br>

      <button name="edit" type="submit" class="btn btn-lg btn-primary btn-block" >Edit</button></td>
    

    </form>
    </table>
    </div>

      </nav>
    </div>
   
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html> 