{% extends 'layout/app.php'%}
{%block content%}
{% load static %}
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
  </div>
</div>
<!-- banner -->


<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
        <div class="card p-3">
          <form action="" method="post">
          {%csrf_token%}
            <input type="text" class="form-control" placeholder="Full Name" name="form_name">
            <input type="text" class="form-control" placeholder="Enter Email" name="form_email">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirm">

            <textarea rows="6" class="form-control" placeholder="Address" name="form_message"></textarea>
            <button type="submit" class="btn btn-success" name="Submit">Register</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

{%endblock%}