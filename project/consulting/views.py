from django.views.generic import TemplateView

# Create your views here.
class DefaultPageView(TemplateView):
    template_name = 'consulting/default.html'