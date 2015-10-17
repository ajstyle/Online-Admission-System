<html>
<body>
    
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
          <li class="active"><a href="#"><span class="sr-only"></span> <span class="glyphicon glyphicon-dashboard"> </span>Dashboard</a></li>
           <li><a href="#"><span class="glyphicon glyphicon-info-sign"> </span>Student Information </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Operation<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            
            <li><a href="#">Add New Field</a></li>
            
            <li class="divider"></li>
            <li><a href="#">Generate Enrollment No. </a></li>
            <li class="divider"></li>
            <li><a href="#">Send Notification</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> My Account<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href="#">Profile</a></li>
               
            
      </ul>
          </li>
          <li><a href="<?=site_url('Admin/Dashboard/logout');?>"><i class="glyphicon glyphicon-log-out" ></i> Logout </a></li>
             </ul>
    </div>
  </div>
</nav>
   

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
   <div class="list-group">
  
  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-edit"> </span>Edit Student Information </a>
     
   <a href="#" class="list-group-item">Add New Field</a>
  </span> <a href="#" class="list-group-item">Generate Enrollment no.</a>
  </span> <a href="#" class="list-group-item">Send Notification</a>
</div>  
                </div>
               <div class="col-md-8">
                    
                </div>
           
            </div>
              
            
        </div>
    </section>






</form>

   </html>