  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Online Admission System</title>
  <header>
  <img src="<?=base_url()?>public/images/mlsu.jpg" >
  </header>
  <style>
	#home_nav a{
		margin-right:20px;
		color:white;
		text-decoration:none;
		}
	#home_nav a:hover{
		
		color:blue;
		
		}	
  </style>
  </head>
  <body>
 <nav id='home_nav' style='padding:5px;font-size:18px;text-align:center;background-color:black;'>
	<a href='#'>Home</a>
	<a href='#'>Admission</a>
	<a href='#'>Results</a>
	<a href='#'>Results</a>
	<a href='#'>Results</a>
	<a href='#'>Results</a>
 </nav>

 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img  src="<?=base_url()?>public/images/IMG2.jpg" alt="Chania" style='height:500px;width:100%;'>
    </div>

    <div class="item">
      <img src="<?=base_url()?>public/images/IMG3.jpg" alt="Chania" style='height:500px;width:100%;'>
    </div>

    <div class="item">
      <img src="<?=base_url()?>public/images/IMG4.jpg" alt="Flower" style='height:500px;width:100%;'>
    </div>

    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                     <div class="list-group">
  
  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-edit"> </span>Home </a>
     
   <a href="#" class="list-group-item">About us</a>
  </span> <a href="#" class="list-group-item">Syllabus</a>
  </span> <a href="#" class="list-group-item">Faculty</a>

 </span> <a href="#" class="list-group-item">Image Gallery</a>
 </span> <a href="#" class="list-group-item">Result</a>
</span> <a href="#" class="list-group-item">Contact us</a>
</div>  
                   </div>

<div class="col-md-6">
<h2> <u>Online Admission Portal 2015-16 </u></h2>
</br>
</br>
</br>
    <div class = well>
    <h3><u> Student Admission 2015-16 : </u></h3>
     </div>
	 <center>
    <a href = "<?=base_url()?>student/form"> <button type="button" class="btn btn-primary btn-lg">Click here</button></a>
      
    
            <img src="<?=base_url()?>public/images/new.gif" alt="Chania">       </div>
                   
        </center>     

                   <div class="col-md-4">
              <table>
                <div class  = well>
                 <h1>Login</h1>
               <tr>
               <td> User Name</td>
               <td><input type = "text" class = "form-control" ></td>
                 </tr> 
                 
                 <tr> 
                 <td> Password </td>
                 <td><input type = "text" name = "password"  class = "form-control" ></td>
                    </tr>
                    <tr>
                   
                    <td>Login type</td>
                    <td> <select class="form-control">
                              <option>Student</option>
                              <option>Faculty</option>
                              
                             <option>Admin</option>
                            </select> 
                          </td>
                   </tr>
                  <tr>
                  <td></td>
                  <td></td>
                   </tr>
                   <tr>
                    <td><input type="submit" class="btn btn-success" name = "signin" value = "Signin"/>
                    

                  </td>
                  
                   <td>
                   

                    <input type="reset" class="btn btn-danger" name = "reset" value = "Reset"/>
                    </td>
                    </tr>
                   
                     </div>
                    </table>


</div>


                     

  </body>
  </html>
  