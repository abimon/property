{% extends 'layout/app.php'%}
{%block content%}
{% load static %}
{%load humanize%}
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="/">Home</a> / {{house.house_name}}</span>
        <h2>{{house.house_name}}</h2>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="properties-listing spacer">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-8 ">
                <h2>{{house.house_name}}</h2>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="property-images">
                            <!-- Slider Starts -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators hidden-xs">

                                    {% for photo in photos%}
                                    {%if photo == photos|first %}
                                    <li data-target="#myCarousel" data-slide-to="" class="active"></li>
                                    {%else%}
                                    <li data-target="#myCarousel" data-slide-to=""></li>
                                    {%endif%}
                                    {%endfor%}
                                </ol>
                                <div class="carousel-inner">
                                    <!-- Items -->
                                    {% for photo in photos%}
                                    {%if photo == photos|first %}
                                    <div class="item active">
                                        {%else%}
                                        <div class="item">
                                            {%endif%}
                                            <img src="{{ photo.photo.url }}" class="properties" alt="properties" />
                                        </div>
                                        {%endfor%}
                                        <!-- #Items -->

                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                                <!-- #Slider Ends -->

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12  col-sm-6">
                                <div class="property-info">
                                    <p class="price">Rent: Ksh {{house.rent|intcomma}}</p>
                                    <p class="area"><span class="glyphicon glyphicon-map-marker"></span> {{house.location}}</p>
                                    <h6><span class="glyphicon glyphicon-home"></span> Available Facilities</h6>
                                    <div class="listing-detail">
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="{{house.category}}">
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                        </span>
                                        {% if house.wifi == True %}
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Wifi">
                                            <i class="fa fa-wifi" aria-hidden="true"></i>
                                        </span>
                                        {%endif%}
                                        {% if house.washroom == True %}
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Washroom">
                                            <i class="fa fa-shower" aria-hidden="true"></i>
                                        </span>
                                        {%endif%}
                                        {% if house.kitchen == True %}
                                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">
                                            <i class="fa fa-fire" aria-hidden="true"></i>
                                        </span>
                                        {%endif%}
                                    </div>
                                </div>
                                <div class="spacer">
                                    <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                                    <h5 style="font-weight:bold;">{{house.category}} House</h5>
                                    <p>{{house.description}}</p>
                                </div>
                                <div class="profile">
                                    <span class="glyphicon glyphicon-user"></span> Owner/Caretaker Details
                                    
                                    <a href="/contact/{{house.id}}"><button class="btn btn-success">Contact Owner/Caretaker</button></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div>
                                <h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
                                <div class="well">
                                    <iframe src="https://www.google.com/maps/embed?pb={{house.pin_location}}" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {%endblock%}