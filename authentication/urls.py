from django.contrib import admin
from django.urls import path, include
from django.conf.urls import url
from . import views

urlpatterns = [
    path('',views.home, name="home"),
    path('signup',views.signup, name="signup"),
    path('welcome',views.welcome, name="welcome"),
    path('forgot',views.forgot, name="forgot"),
    path('check',views.check, name="check"),
    path('homepage',views.homepage, name="homepage"),
    path('recipefinder',views.recipefinder, name="recipefinder"),
    url(r'^external', views.external,name="script1"),
]
