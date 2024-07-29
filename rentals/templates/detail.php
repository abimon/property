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
        <div class="row">
            <div class="col-lg-3 col-sm-4 hidden-xs">
                <div class="hot-properties hidden-xs">
                    <h4>Hot Properties</h4>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="{% static 'images/slider/4.jpg'%}" class="img-responsive img-circle" alt="properties" /></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="/detail">Property Name</a></h5>
                            <p class="price">
                                Kshs 300,000</p>
                        </div>
                    </div>
                </div>



                <div class="advertisement">
                    <h4>Advertisements</h4>
                    <img src="{% static 'images/advertisements.jpg' %}" class="img-responsive" alt="advertisement">

                </div>

            </div>

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

                        <div class="spacer">
                            <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                            <p>{{house.description}}</p>

                        </div>
                        <div>
                            <h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
                            <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-12  col-sm-6">
                            <div class="property-info">
                                <p class="price">Rent: Ksh {{house.rent|intcomma}}</p>
                                <p class="area"><span class="glyphicon glyphicon-map-marker"></span> {{house.location}}</p>

                                <div class="profile">
                                    <span class="glyphicon glyphicon-user"></span> Owner/Caretaker Details
                                    <p>John Parker<br>009 229 2929</p>
                                </div>
                            </div>

                            <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
                            <div class="listing-detail">
                                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Rooms">{{house.bedrooms}}</span>
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
                        <div class="col-lg-12 col-sm-6 ">
                            <div class="enquiry">
                                <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                                <form role="form">
                                    <input type="text" class="form-control" placeholder="Full Name" />
                                    <input type="text" class="form-control" placeholder="you@yourdomain.com" />
                                    <input type="text" class="form-control" placeholder="your number" />
                                    <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
                                    <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{%endblock%}