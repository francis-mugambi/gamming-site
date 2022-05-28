from django.contrib.auth.models import User,auth
from django.shortcuts import render,redirect
from .models import clients_message
from .models import subscribe
from django.core.mail import send_mail
from django.conf import settings
# Create your views here.
def home(request, *args, **kwargs):
	return render(request, 'home/index.php')

def about(request, *args, **kwargs):
	return render(request, 'home/about.php')

def services(request, *args, **kwargs):
	return render(request, 'home/services.php')

def contact(request):
	return render(request, 'home/contact.php')

def subscriber(request, *args, **kwargs):
	if request.method == 'POST':
		email = request.POST['email']
		check_email = subscribe.objects.filter(email=email).exists()
		if check_email == True:
			return render(request, 'home/index.php',{"msg":"The email is aready subscribed!"})
		else:
			user = subscribe(email=email)
			user.save();
			return render(request, 'home/index.php',{"msg":"Thanks for subscribing."})

def sendMessage(request, *args, **kwargs):
	if request.method == 'POST':
		name = request.POST['name']
		email = request.POST['email']
		subject = request.POST['subject']
		message = request.POST['message']
		fullmsg = "From: " + email + " " + message

		send_mail(subject, fullmsg,settings.EMAIL_HOST_USER,['frankmugah97@gmail.com'], fail_silently=False)
		user = clients_message(name=name, email=email, subject=subject, message=message)
		user.save();
		return render(request, 'home/contact.php',{'msg':'Message sent, Thanks for getting in touch with us.'})
	

	else:
		return redirect('/')