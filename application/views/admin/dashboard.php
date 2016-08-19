<html>
<link href="http://www.discussdesk.com/view/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

<div class="row">

 <div class="col-md-3"></div>

 <div class="col-md-6">
    <form method="POST" action="<?php echo base_url();?>index.php/admin/admin/register" >
	<div class="table-responsive" >
    <table border="0" align="center" class="table" style="border:1px solid #333;">
	<caption>Registration Form</caption>
        <tr><td>Name</td><td><input type="text" name="name" class="form-control" required/></td></tr><br/>
    <tr><td>Email</td><td><input type="email" name="email" class="form-control" required/></td></tr><br/>
        <tr><td>Password</td><td><input type="password" name="password" class="form-control" required/></td></tr><br/>
        <tr><td>Mobile</td><td><input type="text" name="mobile" class="form-control" required/></td></tr><br/>
    <tr align='center'><td colspan="2"><input type="submit" name="register" value="Register" class="btn btn-success btn-block marginbt20"/></td></tr>
    </table>
	</div>
    </form>
	</div>
<div class="col-md-3"></div>
	</div>
    <div align="center"><a href="<?php echo base_url();?>index.php/admin/home/logout">Logout</a></div>
    
</html>
