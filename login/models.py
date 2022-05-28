
from django.db import models
from django.db.models.fields import CharField, TextField

# Create your models here.
class accountInfomation(models.Model):
	username = models.CharField(max_length=50);
	email = models.EmailField();
	phone = models.CharField(default=+254712345678, max_length=15);
	real_balance = models.FloatField(default=0);
	demo_balance = models.FloatField(default=10000);

class chatting(models.Model):
	sent_to = models.CharField(max_length=50)
	sent_from = models.CharField(max_length=50)
	message= models.TextField()
	

	
    