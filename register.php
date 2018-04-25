<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>
        <div>
            <h3> <a class = "navs hompagebody" href = "html/AboutUs.html"> About Us </a>
            <a class = "navs1 hompagebody" href = "html/ContactUs.html"> Contact Us </a> </h3>
            <img src = "resource/img/parkoffice.jpg" width="100%" height="300" alt="">
        </div>
        <div class="container-fluid hompagebody" id="reg" >
            <div class="row">
                <div class="col-md-6">
                    <p class = "maintext"> <h1> <strong> The ideal college experience, two centuries in the making </strong> </h1></p>
                    <p class = "subtext" style="text-align: justify;">Indiana University students get it all—the storybook experience of what college should be like, and the endless opportunities that come with it. Top-ranked academics. Awe-inspiring faculty. Dynamic campus life. International culture. Phenomenal music and arts events. The excitement of IU Hoosier sports. And a jaw-droppingly beautiful campus.</p>
                </div>
                <div class="col-md-6">
                    <p> <h2> <strong style="font-family: sans-serif;"> SIGN UP  </strong> </h2>
                    <form action="includes/signup.php " method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="First name" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group ">
                            <input type="email" class="form-control" name="regEmail" placeholder="Email" required>
                        </div>
                        <div class="form-group ">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="password" id = "password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" id = "confirmpassword" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <button type="submit" id = "btnSubmit" name="submit" class="btn btn-primary btn-lg btn-block" value = "Submit">Submit</button>
                    </form>
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function () {
                            $("#btnSubmit").click(function () {
                                var password = $("#password").val();
                                var confirmPassword = $("#confirmpassword").val();
                                if (password != confirmPassword) {
                                    alert("Passwords do not match.");
                                    return false;
                                }
                                return true;
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>