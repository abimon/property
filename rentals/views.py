from django.shortcuts import render,redirect
from .models import House,Photo
from django.core.paginator import Paginator
from .forms import InqForm,UserForm
def reg(request):
    context={'form':UserForm}
    return render(request, 'register.php',context)
def about(request):
    return render(request, 'about.php')
def terms(request):
    return render(request, 'terms.php')
def contact(request):
    return render(request, 'contact.php')
def rent(request):
    houses = House.objects.all()
    paginator = Paginator(houses, 25)  # Show 25 contacts per page.
    page_number = request.GET.get("page")
    page_obj = paginator.get_page(page_number)
    context={
        'form' : InqForm,
        'houses':page_obj,
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
def enquiry(request):
    if request.method=='POST':
        form = InqForm(request.POST)
        if form.is_valid():
            form.save()
    return redirect('index')
def c_contact(request):
    house = House.objects.get(id=id)