from django.forms import ModelForm
from django.contrib.auth.models import User
from .models import Inquiry
class InqForm(ModelForm):
    class Meta:
        model = Inquiry
        fields = '__all__'
class UserForm(ModelForm):
    class Meta:
        model = User
        fields = ['first_name','last_name','username','email', 'password']