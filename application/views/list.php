
<h2>List of employees</h2>

<h2><a href="<?php echo base_url().'index.php/user/create/'?>" class="btn btn-success">Add user</a></h2>

   
<br> 
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User_id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">DoB</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php if(!empty($users)) { foreach($users as $user) {?>
    <tr>
      <td><?php echo $user['user_id']?> </td>
      <td><?php echo $user['name']?> </td>
      <td><?php echo $user['email']?> </td>
      <td><?php echo $user['dob']?> </td>
      <td>
        <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>"  class="btn btn-warning">Edit</a>
      </td>
      <td>
        <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">Delete</a>
      </td>
      </tr>
      <?php } } else { ?>

      <tr>

      <td>Column content</td>

    </tr>
    <?php } ?>

    
  </tbody>
</table>