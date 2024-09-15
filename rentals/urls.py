from django.urls import path
from . import views
urlpatterns = [
    path('',views.rent, name='index'),
    path('<int:id>/details',views.details),
    path('register',views.reg),
    path('about', views.about),
    path('contact', views.contact),
    path('terms_conditions', views.terms),
    path('form',views.enquiry),
    path('contact/<int:id>',views.c_contact)
]