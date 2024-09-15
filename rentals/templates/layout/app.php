{% load static %}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Housing | Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{% static 'images/logo.png'%}" type="image/x-icon">
    <link rel="stylesheet" href="{% static 'assets/bootstrap/css/bootstrap.css' %}" />
    <link rel="stylesheet" href="{% static 'assets/style.css' %}" />
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="{% static 'assets/bootstrap/js/bootstrap.js' %}"></script>
    <script src="{% static 'assets/script.js' %}"></script>

    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="{% static 'assets/owl-carousel/owl.carousel.css' %}">
    <link rel="stylesheet" href="{% static 'assets/owl-carousel/owl.theme.css' %}">
    <script src="{% static 'assets/owl-carousel/owl.carousel.js' %}"></script>
    <!-- Owl stylesheet -->
    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{% static 'assets/slitslider/css/style.css' %}" />
    <link rel="stylesheet" type="text/css" href="{% static 'assets/slitslider/css/custom.css' %}" />
    <script type="text/javascript" src="{% static 'assets/slitslider/js/modernizr.custom.79639.js' %}"></script>
    <script type="text/javascript" src="{% static 'assets/slitslider/js/jquery.ba-cond.min.js' %}"></script>
    <script type="text/javascript" src="{% static 'assets/slitslider/js/jquery.slitslider.js' %}"></script>
    <link rel="stylesheet" href="{% static 'assets/icons/font-awesome/css/fontawesome-all.min.css' %}">

</head>

<body>
    <!-- Header Starts -->
    <div class="navbar-wrapper">
        <div class="navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                <a href="/"><img src="{% static 'images/logo.png'%}" alt="Realestate" style="height:10vh;"></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{% if request.path == '/'%} active {%endif%}"><a href="/">Home</a></li>
                        <li class="{% if request.path == '/about'%} active {%endif%}"><a href="/about">About</a></li>
                        <li class="{% if request.path == '/contact'%} active {%endif%}"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
   
    {%block content%}{%endblock%}

    <div class="footer">

        <div class="container">



            <div class="row">

                <div class="col-md-4">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form" action="/subscribe" method="post">
                        {% csrf_token %}
                        <input type="text" placeholder="Enter Your email address" class="form-control">
                        <button class="btn btn-success" type="submit">Notify Me!</button>
                    </form>
                </div>

                <div class="col-md-4">
                    <h4>Follow us</h4>
                    <a href="#"><img src="{% static 'images/facebook.png' %}" alt="facebook"></a>
                    <a href="#"><img src="{% static 'images/twitter.png' %}" alt="twitter"></a>
                    <a href="#"><img src="{% static 'images/linkedin.png' %}" alt="linkedin"></a>
                    <a href="#"><img src="{% static 'images/instagram.png' %}" alt="instagram"></a>
                </div>

                <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>HouseLink Inc.</b><br>
                        <span class="glyphicon glyphicon-map-marker"></span> <br>
                        <span class="glyphicon glyphicon-envelope"></span> info@houselink.co.ke<br>
                        <span class="glyphicon glyphicon-earphone"></span> (254) 701-583807
                    </p>
                </div>
            </div>
            <p class="copyright">&copy;{% now 'Y' %} Copyright. All rights reserved. </p>
        </div>
    </div>
    <!-- Modal -->
    <div id="loginpop" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-6 login">
                        <h4>Login</h4>
                        <form action="" method="post">
                            {%csrf_token%}
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <!-- <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-success">Sign in</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4>New User Sign Up</h4>
                        <p>Join today and get updated with all the housing deal happening around.</p>
                        <button type="submit" class="btn btn-info" onclick="window.location.href='register'">Join
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
</body>

</html>