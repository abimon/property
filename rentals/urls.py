from django.urls import path
from . import views
urlpatterns = [
    path('',views.index),
    path('rent',views.rent),
    path('<int:id>/details',views.details),
    path('register',views.reg),
    path('about', views.about),
    path('terms_conditions', views.terms)
]