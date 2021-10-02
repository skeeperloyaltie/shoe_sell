<!doctype html>
<html>
    <head>
        <title>Login Page</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="ds/style.css" rel="stylesheet" type="text/css">

        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                $("#but_submit").click(function(){
                    var username = $("#txt_uname").val().trim();
                    var password = $("#txt_pwd").val().trim();

                    if( username != "" && password != "" ){
                        $.ajax({
                            url:'checkUser.php',
                            type:'post',
                            data:{username:username,password:password},
                            success:function(response){
                                var msg = "";
                                if(response == 1){

                                    window.location = "home.php";
                                    msg = alert("Succesfull login!");
                                }else{
                                    msg = "Invalid username and password!";
                                }
                                $("#message").html(msg);
                            }
                        });
                    }
                });

            });
        </script>
    </head>
    <body>


        <nav>
            <input type="checkbox" id="responsive-nav">
            <label id="toggler" for="responsive-nav">
                <span>MENU <i class="fas fa-bars"></i></span>
            </label>

            <ul>
                <li><a href="#Home">Home</a></li>
                
              
            </ul>

            <div id="navigation">
                <input type="checkbox" id="open-close">
                <form action="" id="search-form">
                    <input type="search" placeholder="Search" id="search-bar">
                    <button id="searchButton" type="submit">
                        <span><i class="fas fa-search"></i></span>
                    </button>
                </form>

                <label for="open-close" id="opener">
                    <span><i class="fas fa-search"></i></span>
                </label>

                <label for="open-close" id="closer">
                    <span><i class="fas fa-times"></i></span>
                </label>
            </div>
            <h2><a href="index.php">Login</a></h2>
        </nav>
        <br>
        <div class="container">

            <div id="div_login">
                <h1>Login</h1>
                <div id="message"></div>
                <div>
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div>
                    <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
                </div>
                <div>
                    <input type="button" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>

        </div>
    </body>
</html>

