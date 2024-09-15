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
            {%for field in form%}
            <input type="form" class="form-control" placeholder="{{field.label}}" name="{{field.name}}">
            {{ field.help_text}}
            {{ field.message.errors }}
            {%endfor%}
            <button type="submit" class="btn btn-success" name="Submit">Register</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>

{%endblock%}