from django.db import models
from django.conf import settings
from django.utils.timezone import now
from django.contrib.auth.models import User


class House(models.Model):
    Category = (("Single","Single"),("Bedsitter","Bedsitter"),("Studio","Studio"),("One_Bedroom","One Bedroom"),("Two_Bedroom","Two Bedroom"))
    owner = models.ForeignKey(User,on_delete=models.CASCADE)
    house_name= models.CharField(max_length=50)
    location = models.CharField(max_length=50)
    rent=models.IntegerField()
    description = models.TextField()
    category= models.CharField(max_length=20,choices=Category)
    pin_location = models.CharField(max_length=255,blank=True)
    cctv =models.BooleanField(default=False)
    garbage = models.BooleanField(default=False)
    gate = models.BooleanField(default=False)
    wifi = models.BooleanField(default=False)
    cover = models.ImageField(upload_to='houses/cover')
    def __str__(self):
        return self.house_name
class Occupancy(models.Model):
    status= (("Paid","Paid"),("Pending","Pending"),("Overdue","Overdue"))
    occupant = models.ForeignKey(User,on_delete=models.CASCADE)
    house = models.ForeignKey(House,on_delete=models.CASCADE)
    rent_status=models.CharField(max_length=8,choices=status)
class Photo(models.Model):
    house_id=models.ForeignKey(House,on_delete=models.CASCADE)
    photo = models.ImageField(upload_to='houses/photos')