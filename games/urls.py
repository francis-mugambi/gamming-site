from django.contrib import admin
from django.urls import path
from . import views


urlpatterns = [
    path('chessgame/', views.chessgame),    
	path('mathgame/', views.mathgame),
	path('savemegame/', views.savemegame),
	path('addPoints/', views.addPoints),
]