from django.contrib import admin
from django.urls import path
from . import views


urlpatterns = [
	path('ADMIN/', views.ADMIN),
	path('adminLogin/', views.adminLogin),
	path('userData/', views.userData),
	path('subscribers/', views.subscribers),
    path('login/', views.login),    
	path('signup/', views.signup),
	path('forgotpassword/', views.forgotpassword),
	path('checkuser/', views.checkuser),
	path('updatepassword/', views.updatepassword),
	path('createAccount/', views.createAccount),
	path('allowLogin/', views.allowLogin),
	path('accountInfo/', views.accountInfo),
	path('inviteFriends/', views.inviteFriends),
	path('playGames/', views.playGames),
	path('logout/', views.logout), 
	path('logoutadmin/', views.logoutadmin), 
	path('online/', views.online), 
	path('chat/', views.chat), 
	path('received/', views.received), 
	path('sent/', views.sent),
	path('compete/', views.compete),
	path('choosePlayer/', views.choosePlayer),
]
