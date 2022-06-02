<!DOCTYPE html>
<html>
<head>
<title>View users</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CRUD Application</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  
</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $success = $this->session->userdata('success');

                    if($success != "")
                    {

                    
                ?>
<div class="alert alert-success"><?php echo $success ?> </div>
                <?php
                    }
                ?>

<?php 
                    $failure = $this->session->userdata('failure');

                    if($failure != "")
                    {

                    
                ?>
<div class="alert alert-success"><?php echo $success ?> </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-md-12">
                <h3>View Users</h3>
                <div class="col-6">
                <a href="<?php echo base_url().'index.php/Users/create/' ?>" class="btn btn-primary">create</a>
                </div>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>

                <?php if(!empty($users)) { foreach($users as $user) { ?>
                    <tr>
                    <th scope="row"><?php echo $user['user_id'] ?></th>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><a href="<?php echo base_url().'index.php/Users/edit/'.$user['user_id'] ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="<?php echo base_url().'index.php/users/delete/'.$user['user_id'] ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php } } else { ?>

                        <tr>
                            <td colspan="5">Records not found</td>
                    </tr>
                    <?php } ?>
  </tbody>  
</table>
            </div>
        </div>
    </div>
</body>
</html>