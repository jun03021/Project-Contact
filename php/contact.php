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
      <div class="container-fluid">
      <center>

      <STRONG><h3>My Contact</h3></STRONG>
       | <a href='add.php'>Add Contacts</a> | <a href='edit.php'>Edit My Contact</a> |
       
      </center>
         
        <br />
      <hr>
      <br/>
 
  <?php
      $con = mysql_connect("localhost","root","");
           mysql_select_db("contacts", $con);

      
           
         
      echo "<table border='1' class='table table-striped' >";
      $e = $_SESSION['login_user'];
      $locate =mysql_query("select * from info where user='$e'");
    
      echo "<tr>";
      echo "<thread>";
      echo "<th>Name</th>";
      echo "<th>Phone Number</th>";
      echo "<th>Phone Type</th>";
      echo "<th>Group Type</th>";
      echo "<th>Address</th>";
      echo "<th>Birthday</th>";
       echo "<th>Company</th>";
       echo "<th>Note</th>";
       echo"</thread>";
      echo "</tr>";

      while($rows=mysql_fetch_array($locate)){
        echo "<tr>";
        
        echo "<td>".$rows['name']."</td>";
        echo "<td>".$rows['phone']."</td>";
        echo "<td>".$rows['phonetype']."</td>";
        echo "<td>".$rows['grouptype']."</td>";
        echo "<td>".$rows['address']."</td>";
        echo "<td>".$rows['birthday']."</td>";
        echo "<td>".$rows['company']."</td>";
        echo "<td>".$rows['note']."</td>";

         
        }
        echo "</tr>";
      
      echo "</table>";
      
        
    ?>

      </nav>
    </div>
    </div>
   
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html> 