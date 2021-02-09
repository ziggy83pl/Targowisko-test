
{% if pagination.page_count %}
	<ul class="pagination justify-content-center">
		<li class="page-item {% if pagination.page_number==1 %}disabled return_false{% endif %}"><a href="{{ path(controller) }}{% if pagination.page_url.page %}?{% endif %}{{ pagination.page_url.page }}" title="{{ 'First page'|lang }}" class="page-link" rel="prev"><i class="fas fa-arrow-left"></i></a></li>
		{% for this_page in pagination.page_start..pagination.page_count %}
			{% if loop.index0<10 %}
				<li class="page-item {% if pagination.page_number==this_page %}disabled return_false active{% endif %}"><a href="{{ path(controller) }}?{{ pagination.page_url.page }}{% if pagination.page_url.page %}&{% endif %}page={{ this_page }}" title="{{ 'Page'|lang }}: {{ this_page }}" class="page-link">{{ this_page }}</a></li>
			{% endif %}
		{% endfor %}
		<li class="page-item {% if pagination.page_number==pagination.page_count %}disabled return_false{% endif %}"><a href="{{ path(controller) }}?{{ pagination.page_url.page }}{% if pagination.page_url.page %}&{% endif %}page={{ pagination.page_count }}" title="{{ 'Last page'|lang }}" class="page-link" rel="next"><i class="fas fa-arrow-right"></i></a></li>
	</ul>
{% endif %}