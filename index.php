<html>

<head>
    <link href="Login.css" rel="stylesheet" />
    <title>Login</title>
</head>
<script src="jquery-1.8.2.min.js"></script>
<style>
    .center {
       
    }
</style>
<script> margin: auto;
    $(document).ready(function() {
        $("#login").click(function() {
            var i = $("#idl").val();
            var p = $("#pwdl").val();
            // alert(idl+" "+pwdl);
            var actionUrl = "login-ajax.php?idl=" + i + "&pwdl=" + p;
                $.get(actionUrl, function(response) {
                    alert(response);
                    if (response == "All fields required." || response == "Invalid user") {
                        // alert("invalid user");
                        // $("#loginres").html(response).addClass("showw1");
                    }
                    else if (response == "valid") {
                        location.href = "loginInFb.php";
                        // location.href = "dash-worker.php";
                    } 
                });
        });
        $("#signup").click(function(){
            var f = $("#fname").val();
            var l = $("#lname").val();
            var i = $("#idr").val();
            var p = $("#pwdr").val();
            //alert(fname +"  "+ lname+" "+idr+" "+pwdr);
            //http://localhost/rich-panel/signup-ajax.php?fname=aarushi&lname=s&idr=9588544329&pwdr=aarushi
            var actionUrl = "signup-ajax.php?fname=" + f + "&lname=" + l + "&idr=" + i + "&pwdr=" + p;
                    $.get(actionUrl, function(response) {
                        alert(response);
                        if (response == "All fields required.")
                            alert("all fields required");
                        else if (response == "Signup Failed!")
                        {
                            // alert("Try using different email");
                            // $("#result").html(response + " Try using different email.").addClass("showw1");
                        }
                        else if (response == "You have Signed-up.")
                        location.href = "loginInFb.php";
                    });
        });
    });
</script>
<body>
    <div id="header_wrapper">
        <div id="header">
            <form action="post">
                <li>Email or Phone<br><input type="text" name="idl" id="idl"></li>
                <li>Password<br><input type="password" name="pwdl" id="pwdl"><br><a href="">Forgot password?</a></li>
                <li><input type="button" name="login" value="Log In" id="login"></li>
            </form>
        </div>
    </div>

    <div id="wrapper">
        <div id="div1">
        </div>
        <div id="div2">
            <div class="center">
                <h1>Create an account</h1>
                <form action="post">
                    <li><input type="text" placeholder="First Name" id="fname" name="fname">  <input type="text" placeholder="Surname" id="lname" name="lname"></li>
                    <li><input type="text" placeholder="Mobile number or email" id="idr" name="idr"></li>
                    <li><input type="password" placeholder="New password" id="pwdr" name="pwdr"></li>
                    <li><input type="button" value="Create an account" name="signup" id="signup"></li>
                </form>
            </div>
        </div>
    </div>

</body>

</html>