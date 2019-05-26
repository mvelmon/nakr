from django.urls import path
from .views import DefaultPageView
from django.conf.urls import url

app_name = 'consulting'
urlpatterns = [
    url('', DefaultPageView.as_view(), name='default')
]