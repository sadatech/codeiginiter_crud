<html>
    <link href="http://www.discussdesk.com/view/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<div class="row">

 <div class="col-md-3"></div>

 <div class="col-md-6">
    <h2 align="center">HOME</h2>
    <h4 align="center">Welcome User</h4>
    <form>
	<div class="table-responsive" >
    <table border="0" align="center" class="table" style="border:1px solid #333;"> 
        
        <tbody>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobile</th>
        <th>Action</th>
        </tr>
        </tbody>  
           
    <?php
        $i=1;
    foreach($ResAre as $row)
    {   ?>
         <tr>
         <td><?php echo $i;?></td>
         <td><?php echo $row->name;?></td>
     <td><?php echo $row->email;?></td>
         <td><?php echo $row->password     ;?></td>
         <td><?php echo $row->mobile;?></td>
         <td><a href="<?php echo base_url();?>index.php/admin/admin/update?editid=<?php echo $row->id; ?> ">Edit</a> | <a href="<?php echo base_url();?>index.php/admin/admin/delete?deleteid=<?php echo $row->id;?>">Delete</a></td>
         </tr>
   <?php  $i++;} ?>
         <td colspan="6">
             <div align="center"><a href="<?php echo base_url();?>index.php/admin/admin/index">ADD</a></div></td>
  </table>
  </div>
  </form>
    <div align="center"><a href="<?php echo base_url();?>index.php/admin/home/logout">Logout</a></div>
	</div>
<div class="col-md-3"></div>
	</div>
    
</html>
