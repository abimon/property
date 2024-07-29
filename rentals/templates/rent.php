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
          <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
          <input type="text" class="form-control" placeholder="Search for Properties">
          <div class="row">
            <div class="col-lg-5">
              <select class="form-control">
                <option value="">Category</option>
                <option value="Single">Single</option>
                <option value="Bedsitter">Bedsitter</option>
                <option value="Studio">Studio</option>
                <option value="One Bedroom">One Bedroom</option>
                <option value="Two Bedroom">Two Bedroom</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Location</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <select class="form-control">
                <option>Property Type</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
            </div>
          </div>
          <button class="btn btn-primary">Find Now</button>
        </div>
        <div class="hot-properties hidden-xs">
          <h4>Hot Properties</h4>
          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{%static 'images/slider/1.jpg' %}" class="img-responsive img-circle" alt="properties"></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{%static 'images/slider/1.jpg' %}" class="img-responsive img-circle" alt="properties"></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{%static 'images/slider/1.jpg' %}" class="img-responsive img-circle" alt="properties"></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{%static 'images/slider/1.jpg' %}" class="img-responsive img-circle" alt="properties"></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-9 col-sm-8">
        <div class="sortby clearfix">
          <div class="pull-left result">Showing: 12 of 100 </div>
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
                <i class="fa fa-fire" aria-hidden="true"></i>
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