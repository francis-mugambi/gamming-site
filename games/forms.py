from django.db import models
from django import forms
from login.models import accountInfomation
# Create your models here.
class accountInformationForm(forms.ModelForm):
	class Meta:
		model = accountInfomation
		fields = "__all__"
