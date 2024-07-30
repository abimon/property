from django.shortcuts import render
from .models import House,Photo
import pygeoip

def index(request):
    return render(request, 'index.php')
def reg(request):
    return render(request, 'register.php')
def about(request):
    return render(request, 'about.php')
def terms(request):
    return render(request, 'terms.php')
def rent(request):
    houses = House.objects.all()
    context={
        'houses':houses,
        }
    return render(request, 'rent.php',context)
def details(request,id):
    house = House.objects.get(id=id)
    photos = Photo.objects.filter(house_id=id)
    context={
        'house':house,
        'photos':photos,
        }
    return render(request, 'detail.php',context)