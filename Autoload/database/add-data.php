<?php
include 'fetchdata.php';
 if(isset($_GET['id'])){
    $showUpdata = $obj->showDataUpdate($_GET['id']);
    // print_r($showUpdata);
 }
 else 
 {
    $showUpdata = '';
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="view_data.php" class= "btn btn-sm btn-success">View Data</a>
    <div class="container">
    <form action="fetchdata.php<?php echo isset($_GET['id']) ? '?id='. $_GET['id']: '';?>" method="post">
   <div class="mb-3">
   <label for="exampleInputEmail1"  class="form-label">UserName</label>
   <input type="text" name= "uname" value="<?php if(!empty($showUpdata['uname'])){echo $showUpdata['uname'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" name= "email" class="form-label">Email address</label>
    <input type="email" name= "email" value="<?php if(!empty($showUpdata['uemail'])){echo $showUpdata['uemail'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name= "password" value="<?php if(!empty($showUpdata['upass'])){echo $showUpdata['upass'];}?>" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->

  <?php if(isset($_GET['id']) && (!isset($_GET['name']))) {?>
        <button type="submit" name="update" class="btn btn-primary">Update data</button>
  <?php } 
  else if (isset($_GET['id']) && $_GET['name']){?>
  <button type="submit" name="delete" class="btn btn-primary">Delete data</button>
  <?php }
  else 
   {?>
    <button type="submit" name="submit" class="btn btn-primary">Add data</button>
  <?php }?>
  
</form>
</div>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>