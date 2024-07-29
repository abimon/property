from django import forms


class HouseForm(forms.Form):
    house_name= forms.CharField(label="House Name",max_length=50)
    location = forms.CharField(label="Location",max_length=50)
    rent=forms.IntegerField(label="Rent")
    description = forms.CharField(label="Description")
    bedrooms= forms.IntegerField(label="Bedrooms")
    washroom =forms.BooleanField(label="Indoor Washroom")
    kitchen = forms.BooleanField(label="Kitchen Area")
    wifi = forms.BooleanField(label="WiFi")
    cover = forms.ImageField(label="Cover Image")