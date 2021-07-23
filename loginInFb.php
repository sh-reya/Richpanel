<html>
    <head>
          <meta charset="UTF-8">
    <link rel="stylesheet" href="fblogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Facebook Login</title>
     
       
     </head>
            <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '522459589028967', 
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   function fbLogin(){
       FB.login(function(response){
           if(response.authResponse){
               fbAfterLogin();
           }
       });
   }
   
   function fbAfterLogin() {
       FB.getLoginStatus(function(response) {
            if (response.status === 'connected') { //l0
             FB.api('/me', function(response) {
              console.log(response)
            location.href = "messenger.html";
             });
         }
    });
   }
</script>

        <body>
            
            <!--<div class="container">-->
      <form action="#">
    
        <div>
            <a href="javascript:void(0);" onclick="fbLogin();" id="fbLink"><img src="https://freepikpsd.com/media/2019/10/facebook-login-icon-png-3-Transparent-Images.png"/></a>
         <!--<button>   <a href="javascript:void(0)" onclick="fbLogin()"> Login with Facebook</a>  </button>-->
        </div>
      </form>
      
        </body>
    
</html>