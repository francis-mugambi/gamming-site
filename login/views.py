from django.contrib.auth.models import User,auth
from django.shortcuts import render, get_object_or_404
from django.contrib.auth import authenticate,login
from .models import  accountInfomation
from .models import chatting
from home.models import subscribe
from django.utils import timezone
import datetime
# Create your views here.
def ADMIN(request, *args, **kwargs):
	info = accountInfomation.objects.all()
	context = {
		'objects':info
	}
	return render(request, 'login/admin.php', context)

def adminLogin(request, *args, **kwargs):
	if request.method == 'POST':
		uname = request.POST['uname']
		psw = request.POST['psw']

		check_user = User.objects.filter(username=uname).exists()
		check_status = User.objects.filter(username=uname, is_staff="False").exists()

		check_password = auth.authenticate(username=uname, password=psw)
		user = auth.authenticate (username=uname, password=psw)

		if check_status == True:
			return render(request, 'login/admin.php',{"msg":"You are not allowed to access this page!"})
		if uname =="":
			return render(request, 'login/admin.php',{"msg":"Fill in the Username field"})

		if psw =="":
			return render(request, 'login/admin.php',{"msg":"Fill in the password field"})

		if check_user == False:
			return render(request, 'login/admin.php',{"msg":"The Username does not exist in our database!"})
			
		if check_password is None:
			return render(request, 'login/admin.php',{"msg":"Incorrect Password!"})

		if user is not None:
			auth.login(request, user)
			request.session.set_expiry(3600)
			info = accountInfomation.objects.all()
			context = {
				'objects':info
			}
			return render(request, 'login/userdata.php', context)
		else:
			return render(request, 'login/login.php',{"msg1":"Unknown error please login again!"})

	else:
		return render(request, 'login/login.php',{"msg1":"Unknown error occurred!"})


def userData(request, *args, **kwargs):
	info = accountInfomation.objects.all()
	context = {
				'objects':info
			}
	return render(request, 'login/userData.php', context)

def login(request, *args, **kwargs):
	return render(request, 'login/login.php')

def logout(request, *args, **kwargs):
	auth.logout(request)
	return render(request, 'login/login.php')

def logoutadmin(request, *args, **kwargs):
	auth.logout(request)
	return render(request, 'login/admin.php')

def signup(request, *args, **kwargs):
	return render(request, 'login/signup.php')

def subscribers(request, *args, **kwargs):
	info = subscribe.objects.all()
	context = {
		'objects':info
	}
	return render(request, 'login/subscribers.php',context)

def forgotpassword(request, *args, **kwargs):
	return render(request, 'login/forgotpassword.php')

def online(request, *args, **kwargs):
	now = timezone.now()
	user = User.objects.all().filter(is_active = True)
	context = {
		'objects':user
	}
	return render(request, 'login/online.php', context)

def chat(request, *args, **kwargs):
	if request.method =="POST":
		sent_from = request.POST['sent_from']
		sent_to = request.POST['sent_to']
		message = request.POST['message']
		
		check_sent_to =  User.objects.filter(username=sent_to).exists()
		if sent_to =="":			
			return render(request, 'login/chat.php', {'msg':'The field To: is empty!'})

		if message =="":			
			return render(request, 'login/chat.php', {'msg':'You have not written any message!'})

		if check_sent_to == False:			
			return render(request, 'login/chat.php', {'msg':'You are sending message to a Username that doest not exist in our database!'})

		else:
			from_message = chatting(sent_from=sent_from,sent_to=sent_to,message=message)
			from_message.save()	
			return render(request, 'login/chat.php', {'msg':'Message sent'})
	else:
		user = User.objects.get(username=request.session['chatting_sessionid'])
		return render(request, 'login/chat.php', {'user':user})

def received(request):
	texts = chatting.objects.all().filter(sent_to =request.session['chatting_sessionid'])
	user = User.objects.all()
	#querysets =[texts, user]
	

	context={
		'texts':texts,
		'user':user
	}
	return render(request, 'login/received.php', context)

def sent(request):
	texts = chatting.objects.all().filter(sent_from =request.session['chatting_sessionid'])
	user = User.objects.all()
	#querysets =[texts, user]
	

	context={
		'texts':texts,
		'user':user
	}
	return render(request, 'login/sent.php', context)

def checkuser(request, *args, **kwargs):
	if request.method == 'POST':
		uname = request.POST['uname']
		email = request.POST['email']

		user_confirm = User.objects.filter(username=uname,email=email).exists()

		if user_confirm == False:
			return render(request, 'login/forgotpassword.php',{'msg':'Please enter valid details!'})

		if user_confirm == True:
			request.session['change_password_sessionid'] = uname
			request.session.set_expiry(30)
			return render(request, 'login/changepassword.php',{'change_password_sessionid':request.session['change_password_sessionid']})
	else:
		return render(request, 'login/forgotpassword.php',{'msg':'Unknown error occured!'})

def updatepassword(request, *args, **kwargs):
	if request.method == 'POST':
		password = request.POST['password']
		rpt_password = request.POST['rpt_password']

		if password != rpt_password:
			return render(request, 'login/changepassword.php',{'msg':'The repeat password must be the same as the set password!'})

		if password == rpt_password:
			update = User.objects.get(username=request.session['change_password_sessionid'])
			update.set_password(password)
			update.save()
			return render(request, 'login/login.php',{'msg1':'You have changed your password please login'})
	else:
		return render(request, 'login/forgotpassword.php',{'msg':'The password was not changed due to unknown error!'})

	

def accountInfo(request):
	info = get_object_or_404(accountInfomation, username=request.session['chatting_sessionid'])
	return render(request, 'login/accountdetails.php',{'object':info})

def inviteFriends(request, id):
	info = get_object_or_404(accountInfomation, username=request.session['chatting_sessionid'])
	return render(request, 'login/invite.php',{'object':info})

def playGames(request):
	info = get_object_or_404(accountInfomation, username=request.session['chatting_sessionid'])
	return render(request, 'login/playgames.php',{'object':info})

def createAccount(request, *args, **kwargs):
	if request.method == 'POST':
		uname = request.POST['uname']
		email = request.POST['email']
		phone = request.POST['phone']
		password = request.POST['password']
		rpt_password = request.POST['rpt_password']

		uname_confirm = User.objects.filter(username=uname).exists()
		email_confirm = User.objects.filter(email=email).exists()
		phone_confirm = accountInfomation.objects.filter(phone=phone).exists()

		if email =="":
			return render(request, 'login/signup.php',{"msg":"Fill the Email field"})

		if password =="":
			return render(request, 'login/signup.php',{"msg":"Fill the Password field"})

		if rpt_password =="":
			return render(request, 'login/signup.php',{"msg":"Fill the Repeat Password field"})

		if rpt_password != password:
			return render(request, 'login/signup.php',{"msg":"Repeat Password is not the same as Set password"})

		if email_confirm :
			return render(request, 'login/signup.php',{"msg":"A user with that email exists"})

		if uname_confirm :
			return render(request, 'login/signup.php',{"msg":"The Username is aready taken!"})

		if phone_confirm :
			return render(request, 'login/signup.php',{"msg":"The Phone number is aready taken!"})

		else:
			user = User.objects.create_user(username=uname, email=email, password=password)
			account = accountInfomation(username=uname, email=email, phone=phone)
			user.save()
			account.save()
			return render(request, 'login/login.php',{"msg1":"Account created successfuly, please login."})
	
	else:
		return render(request, 'login/signup.php',{"msg":"Unknown error occured!"})

def allowLogin(request, *args, **kwargs):
	if request.method == 'POST':
		uname = request.POST['uname']
		password = request.POST['password']

		check_user = User.objects.filter(username=uname).exists()
		
		check_password = auth.authenticate(username=uname, password=password)
		user = auth.authenticate (username=uname, password=password)

		if uname =="":
			return render(request, 'login/login.php',{"msg1":"Fill in the Username field"})

		if password =="":
			return render(request, 'login/login.php',{"msg1":"Fill in the password field"})

		if check_user == False:
			return render(request, 'login/login.php',{"msg1":"The Username does not exist in our database!"})
			
		if check_password is None:
			return render(request, 'login/login.php',{"msg1":"Incorrect Password!"})

		if user is not None:
			auth.login(request, user)
			request.session['chatting_sessionid'] = uname
			info = accountInfomation.objects.get(username=uname)
			context = {
				'object':info
			}
			return render(request, 'login/accountdetails.php', context)
		else:
			return render(request, 'login/login.php',{"msg1":"Unknown error please login again!"})

	else:
		return render(request, 'login/login.php',{"msg1":"Unknown error occurred!"})

def compete(request):
	info = get_object_or_404(accountInfomation, username=request.session['chatting_sessionid'])
	return render(request, 'login/compete.php', {'object':info})

def choosePlayer(request):
	return render(request, 'login/choosePlayer.php')