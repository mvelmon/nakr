from django.views.generic import TemplateView

# Create your views here.
class IndexPageView(TemplateView):
    template_name = 'nakr_consulting/index.html'