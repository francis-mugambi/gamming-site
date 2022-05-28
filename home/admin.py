from django.contrib import admin

from home.models import clients_message
from home.models import subscribe

# Register your models here.
admin.site.register(clients_message)
admin.site.register(subscribe)