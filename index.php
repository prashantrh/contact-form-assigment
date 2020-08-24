
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
    <div class="form-group col-md-6">

    <h1>Contact Form</h1>
        <form action="handle_form.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" required class="form-control" class="control-label col-md-12" />
            <label>Phone Number</label>
            <input type="tel" name="phone" minlength="10" maxlength="10" required placeholder="Phone number" class="form-control" />
            <label>Email</label>
            <input type="email" name="email" placeholder="exmple@abc.com" required class="form-control"/><br>
            <label>Message</label>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Add Message Here" class="form-control" ></textarea><br>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    
    </body>
</html>
