<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Posts</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Posts</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
 
        <div class="jumbotron">
          <h1>Welcome Back <?php echo $this->session->userdata('username');?></h1>
        </div>
 
      </div>
    </div>
    <div class="container">
<div class="row">
<div class="col-md-12">

<!--- Success Message --->
<?php if ($this->session->flashdata('success')) { ?> 
<p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
<?php }?>
<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
 <?php } ?> 

<a href="<?php echo site_url('insert'); ?>">
<button class="btn btn-primary"> Insert Record</button></a>
<div class="table-responsive">                
<table id="mytable" class="table table-bordred table-striped">                 
<thead>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Contact</th>
<th>Address</th>
<th>Posting Date</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>    
<?php 
$cnt=1;
foreach($result as $row)
{               
?>  
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row->FirstName);?></td>
    <td><?php echo htmlentities($row->LastName);?></td>
    <td><?php echo htmlentities($row->EmailId);?></td>
    <td><?php echo htmlentities($row->ContactNumber);?></td>
    <td><?php echo htmlentities($row->Address);?></td>
    <td><?php echo htmlentities($row->PostingDate);?></td>
    <td>
<?php 
//for passing row id to controller
echo  anchor("Page/getdetails/{$row->id}",' ','class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
</td>
<td>
<?php 
//for passing row id to controller
echo anchor("Delete/index/{$row->id}",' ','class="glyphicon glyphicon-trash btn-danger btn-xs"')?>
</td>
</tr>
<?php 
// for serial number increment
$cnt++;
} ?>
</tbody>      
</table>
</div>
</div>
</div>
</div>
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

  

    <?php echo link_tag('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'); ?>
  
<script src="<?php echo base_url('https://code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
<script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('https://getbootstrap.com/dist/js/bootstrap.min.js'); ?>"></script>



</body>
</html>
