{% extends 'layout/app.php'%}
{%block content%}
{% load static %}
{%load humanize%}
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="/">Home </a>/ Rent</span>
    <h2>Rent</h2>
  </div>
</div>
<!-- banner -->


<div class="container">
  <div class="properties-listing spacer">

    <div class="row">
      <div class="col-lg-3 col-sm-4 ">

        <div class="search-form">
          <h4><span class="glyphicon glyphicon-list"></span> Sort By</h4>
          <div class="row">
            <div class="col-lg-12">
              <select class="form-control">
                <option value="" selected disabled>Category</option>
                <option value="Single">Single</option>
                <option value="Bedsitter">Bedsitter</option>
                <option value="Studio">Studio</option>
                <option value="One_Bedroom">One Bedroom</option>
                <option value="Two_Bedroom">Two Bedroom</option>
              </select>
            </div>
            <div class="col-lg-12">
              <select class="form-control">
                <option selected disabled>Location</option>
              </select>
            </div>
          </div>

        </div>
        <div class="enquiry">
          <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
          <form action="form" method="post">
            {% csrf_token %}
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            <input type="email" name="email" class="form-control" placeholder="you@yourdomain.com" required>
            <input type="number" name="contact" class="form-control" placeholder="Your phone number" required>
            <select name="subject" id="" class="form-control" required>
              <option value="" selected disabled>----Select Service----</option>
              <option value="Availability">Availability</option>
              <option value="Charges">Charges</option>
              <option value="Others">Others</option>
            </select>
            <textarea rows="6" name="message" class="form-control" placeholder="What would you like to enquire about?"></textarea>

            <button type="submit" class="btn btn-primary" name="Submit">Enquire</button>
          </form>
        </div>
      </div>

      <div class="col-lg-9 col-sm-8">
        <div class="sortby clearfix">
          <!-- <div class="pull-left result">Showing: 12 of 100 </div> -->
          <div class="pagination">
            <span class="step-links">
              {% if houses.has_previous %}
              <a href="?page=1">&laquo; first</a>
              <a href="?page={{ houses.previous_page_number }}">previous</a>
              {% endif %}

              <span class="current">
                Page {{ houses.number }} of {{ houses.paginator.num_pages }}.
              </span>

              {% if houses.has_next %}
              <a href="?page={{ houses.next_page_number }}">next</a>
              <a href="?page={{ houses.paginator.num_pages }}">last &raquo;</a>
              {% endif %}
            </span>
          </div>
          <div class="pull-right">
            <select class="form-control">
              <option>Sort by</option>
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
            </select>
          </div>
        </div>

        <div class="row">
          {% for house in houses %}
          <!-- properties -->
          <div class="col-lg-4 col-sm-6">
            <div class="properties">
              <div class="image-holder"><img src="{{ house.cover.url }}" class="img-responsive" alt="properties">
                <div class="status sold">{{house.category}}</div>
              </div>
              <h4><a href="/{{house.id}}/details">{{house.house_name}}</a></h4>
              <p class="price">Rent: Ksh {{house.rent|intcomma}}</p>
              <div class="listing-detail">
                {% if house.wifi == True %}
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Wifi">
                  <i class="fa fa-wifi" aria-hidden="true"></i>
                </span>
                {%endif%}
                {% if house.garbage == True %}
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Garbage">
                  <i class="fa fa-shower" aria-hidden="true"></i>
                </span>
                {%endif%}
                {% if house.gate == True %}
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Gated">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
                {%endif%}
              </div>
              <a class="btn btn-primary" href="/{{house.id}}/details">View Details</a>
            </div>
          </div>
          <!-- properties -->
          {% endfor %}
        </div>
        <!-- <div class="col-12">
          <div class="center">
            <ul class="pagination">
              <li><a href="#">«</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
{% endblock %}