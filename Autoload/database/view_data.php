<?php 
include 'fetchdata.php';
// echo "<pre>";
// print_r($fetch_data);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <table class="table table-bordered">
  <thead class="table-dark bg-info text-white">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User Password</th>
      <th scope="col">User Email</th>
      <th scope="col" colspan="2">Actions</th>
   
    </tr>
  </thead>
  <tbody>
    <?php $sno = 0; ?>
    <?php foreach($fetch_data as $arr){ ?>
        <tr>
            <td><?php echo ++$sno?></td>
            <td><?php echo $arr['userid']?></td>
            <td><?php echo $arr['uname']?></td>
            <td><?php echo $arr['upass']?></td>
            <td><?php echo $arr['uemail']?></td>
            <th><a href="">Edit</th>
            <th><a href="">Delete</th>
        </tr>
     <?php } ?>
  </tbody>
</table>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>