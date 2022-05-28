import email
from django.db import models
from django.db.models.fields import CharField, TextField
from django.http import request

# Create your models here.
class clients_message(models.Model):
	name = models.CharField(max_length=150);
	email = models.EmailField();
	subject = models.CharField(max_length=250);
	message = models.TextField(max_length=200);

class subscribe(models.Model):
	email = models.EmailField()