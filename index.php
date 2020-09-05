<?php
 require_once ('db_config.php');
// print_r($_GET);
$is_updating = false;
if (isset($_GET["id"])) {
    $is_updating = true;
   // update record mode... 
$sql = "SELECT * FROM userdata where id=".$_GET["id"];
// print_r($sql);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);
}
}
$abc = $is_updating ? '(Update)' : '(Create)';

?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
        <body>
            <div class="container">
            <div class="form-group col-md-6">

            <h1>Contact Form <?= $abc ?></h1>
            <?php if ($is_updating): ?>
                <!-- <form action="update.php?id=<?= $row['id'] ?>" method="POST"> -->
                <form action="handle_form.php" method="POST">
            <?php else: ?>
                <form action="handle_form.php" method="POST">
            <?php endif; ?>
            <div class="form-group">
                <input type="hidden" name="id" placeholder="Id" value="<?php if (isset($row['id'])){echo $row['id'];} ?>" class="form-control"  />
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" value="<?php if (isset($row['name'])){echo $row['name'];} ?>" required class="form-control" />
                <label>Phone Number</label>
                <input type="tel" name="phone" minlength="10" maxlength="10"  value="<?php if(isset($row['phone'])){echo $row['phone'];} ?>" required placeholder="Phone number" class="form-control" />
                <label>Email</label>
                <input type="email" name="email" placeholder="exmple@abc.com"  value="<?= isset($row['email']) ? $row['email'] : '' ?>" required class="form-control"/><br>
                <label>Message</label>
                <textarea name="message" id="" cols="30" rows="10" value="" placeholder="Add Message Here" class="form-control" ><?= isset($row['message']) ? $row['message'] : '' ?></textarea><br>
                
                <button type="submit" class="btn btn-success" >Submit</button>
                
            </div>
    
        </body>
</html>
