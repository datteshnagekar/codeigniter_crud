<!DOCTYPE html>
<html>
<head>
<title>update user</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CRUD Application - edit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  
</nav>
<div class="container">
    <div class="row">
    <div class="col-md-6">
  <form method="post" name="createUser" action="<?php echo base_url().'index.php/Users/edit/'.$user['user_id']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="<?php echo set_value('name', $user['name']); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <?php echo form_error('name'); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" name="email" value="<?php echo set_value('email', $user['email']); ?>" class="form-control" id="exampleInputPassword1">
    <?php echo form_error('email'); ?>
  </div>
  <div class="form-group">
  <button class="btn btn-primary">update</button>
  <a href="<?php echo base_url().'index.php/Users/index'; ?>" class="btn btn-secondary">cancel </a>
  </div>
  
</form>
</div>
</div>
</div>
</body>
</html>