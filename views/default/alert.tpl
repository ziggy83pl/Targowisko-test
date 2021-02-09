
{% if alert_success %}
  {% for alert in alert_success %}
    <div class="alert alert-success" role="alert"><i class="fas fa-exclamation"></i> {{ alert }}</div>
  {% endfor %}
{% endif %}
{% if alert_success or alert_danger %}
  <div id="js_scroll_page"></div>
{% endif %}
{% if alert_danger %}
  {% for alert in alert_danger %}
	 <div class="alert alert-danger" role="alert"><i class="fas fa-exclamation"></i> {{ alert }}</div>
  {% endfor %}
{% endif %}
