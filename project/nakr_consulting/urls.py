from django.urls import path
from .views import IndexPageView
from django.conf.urls import url

app_name = 'consulting'
urlpatterns = [
    url('', IndexPageView.as_view(), name='index')
]