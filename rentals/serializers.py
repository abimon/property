from django.contrib.auth.models import User
from rest_framework import serializers
from .models import House,Occupancy
class UserSerializer(serializers.ModelSerializer):
    class Meta:
        model = User
        fields = ['id', 'username', 'email', 'first_name', 'last_name']
class HouseSerializer(serializers.ModelSerializer):
    class Meta:
        model = House
        fields = ['house_name','location','rent','description','category','pin_location','cctv','garbage','gate','wifi','cover']
        