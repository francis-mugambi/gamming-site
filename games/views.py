from random import random, randrange
from django.contrib.auth.models import User,auth
from django.shortcuts import render,redirect
#from .forms import accountInformationForm
from login.models import  accountInfomation
# Create your views here.
def chessgame(request, *args, **kwargs):
	return render(request, 'games/chessgame.php')

def mathgame(request, *args, **kwargs):
	return render(request, 'games/mathgame.php')

def savemegame(request, *args, **kwargs):
	return render(request, 'games/savemegame.php')

def addPoints(request):
	if request.method=="POST":
		uname = request.POST['uname']

		if uname =="":
			return render(request, 'login/choosePlayer.php',{"msg":"Fill the Username field"})

		uname_confirm = accountInfomation.objects.filter(username=uname).exists()
		if uname_confirm == False:
			return render(request, 'login/choosePlayer.php',{"msg":"The Username does not exist in our database!"})

		if uname_confirm == True:	
			info = accountInfomation.objects.get(username=request.session['chatting_sessionid'])
			omponent_info = accountInfomation.objects.all().filter(username=uname)
			myinfo = accountInfomation.objects.all().filter(username=request.session['chatting_sessionid'])
			rad = randrange(10,100)
			info.real_balance = rad
			info.save()
			querysets=[myinfo, omponent_info]
			context = {
						'querysets':querysets
					}
			return render(request, 'games/score.php', context)
		else:
			return render(request, 'login/choosePlayer.php', {'msg':'Unknown error occured!'})
	else:
		return render(request, 'login/choosePlayer.php', {'msg':'Unknown error!'})

