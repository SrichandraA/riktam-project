<?php

 $link=mysqli_connect("localhost","root","","riktam");
if(mysqli_connect_error()){
    
    die("not connected");
    
}


 $query="SELECT * from table1";
 $res=mysqli_query($link,$query);
if($_POST){
    
    $name=$_POST['name'];
    $section=$_POST['section'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $istrue=true;
    if($name!=''){
    $query="select * from table1";
    if($result=mysqli_query($link,$query)){
        while($row=mysqli_fetch_array($result)){
            if($name==$row[0]){
                
                echo "<html><head><script>window.alert('user already exists');</script></head></html>";
                $istrue=false;
            }
            
        }
        
    }
    if($istrue){
    $query="insert into table1(name,section,email,phone)values('$name','$section','$email','$phone')";
            if(mysqli_query($link,$query)){
                header("Location: index.php");
                }
    
    }
}

}
 if(!empty($_POST['edit']))
 {
   
    foreach($_POST['edit'] as $clicked) {
       setcookie("find", $clicked);
       header('Location:addd.php');
    }
 }
 if(!empty($_POST['dell']))
 {
   
    foreach($_POST['dell'] as $clicked) {
       
       $query="DELETE from table1 where name='$clicked'";
       $res=mysqli_query($link,$query);
       header('Location:index.php');
        
    }
 }
 ?>
<html>
<head>
<title>Student Details</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"pagination.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>  
    <style type="text/css">
            #btn{
                
               margin-bottom: 10px;
                margin-top: -40px;
                width: 60px;
                margin-left: 48%;
            }
    </style>
    <script type="application/javascript">
    
        function myFunction() {
    if(window.confirm("Do you want to delete?")){
       
        return true;

    }
            else{
                	return false;
            }
           
}
    </script>
</head>
<body>

 <div class="jumbotron">
  <h1 class="display-3">Student Details</h1>
  <p class="lead">This is a simple application, to edit the details.</p>
  <hr class="my-4">
  
  <!--<p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>-->
</div>
    <!--<form method="post">
        <p>name:<input name="name" type="text"></p>
        <p>section:<input name="section" type="text"></p>
        <p><input type=submit value="click me"></p>
        
    </form>-->
    <nav class="navbar navbar-light bg-faded">
  <h1 class="display-4">Table</h1>
</nav>
    <div class="table-responsive" id="pagination_data">  

    </div>
        <div class="container">
  <!-- Trigger the modal with a button -->
  <button id="btn" type="button" class='btn btn-primary btn-sm' data-toggle="modal" data-target="#myModal">Add</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add a student</h4>
        </div>
        <div class="modal-body">
            <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" required>
   
  </div>
  <div class="form-group">
    <label >Section</label>
    <input type="text" class="form-control" name="section" placeholder="A/B/C/D" required>
  </div>
  
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label >Phone</label>
    <input type="number" class="form-control" name="phone" placeholder="+91" min="1000000000" max="9999999999" required >
  </div>
  
  
  <input class="btn btn-primary btn-sm" type="submit" value="Save">
  
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 </body>
 </html>