<body id = "login">
<div class="container">

    <form name ="login" id = "login" action="login\check" method ="POST" class="form-signin">
        <h2 class="form-signin-heading text-center ">Admin Panel</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name ="email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     

</div>
  
</form>


<script type="text/javascript">
  $(function(){
      
     $("#login").submit(function(evt){
         evt.preventDefault() ; 
        var url =  $(this).attr('action'); 
        var postData = $(this).serialize();
        
        $.post(url,postData,function(o));
    });
      
      
      
  });  

</script> 

</body>