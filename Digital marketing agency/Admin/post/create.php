
<?php include ('../server.php');

// if user not logged in cannot access the home page

if (empty($_SESSION['username'])) {
  header('location: ../login.php');
  // code...
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  <link rel="stylesheet" href="../../css/style.css">
 -->    <link rel="stylesheet" href="../admi.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script
    <title></title>
</head>
<body>
  <!-- NAVBAR -->   
  <div class="wrapper">
      <div class="logo"><a href="index.html"> <span style="color: yellow;">Rea</span>sons</a></div>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
              <div class="contentadmin">
    <?php if (isset($_SESSION['success'])):?> 
      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
      </div>
  <?php endif ?>
    <?php if (isset($_SESSION["username"])): ?> 
      <p style="color:yellow;">Welcome    <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
      <?php endif ?>
  </div>
    </div>
  <div>
  </div>
<div class="admin-wrapper">
  <div class="left-sidebar">
  <ul>
    <li><a href="index.php">Manage posts</a></li>
    <li><a href="index.html">Manage Appointments</a></li>
    <li><a href="index.html">Manage Subscription </a></li>
    <li><a href="index.html">Manage Messages </a></li>


  </ul>

   </div>
  <div class="admin-content">
<div class="button-group"> 
<a href="create.php" class="btn btn-big btn-primary">Add Topic</a>
<a href="index.php" class="btn btn-big btn-primary">Manage Topics</a>
 </div>
 <div class="content">
   
   <h2 class="page-title">Add Topic</h2>
   <form action="create.php" method="post">
     <div>
       <label>Name</label>
       <input type="text" name="title" class="text-imput">
     </div>
     <div>
       <label>Description</label>
       <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <div>
              <button type="submit" class="btn btn-big btn-primary">Add Topic</button>
            </div>
   </form>
 </div>
   </div>
  </div>
     <script type="text/javascript" src="script.js"></script>

</body>
</html>