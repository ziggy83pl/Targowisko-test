{% if pagination.page_count %}
	<div class="text-center">
		<ul class="pagination">
			<li {% if pagination.page_number==1 %}class="disabled"{% endif %}><a href="{% if pagination.page_url.page_admin %}?{% endif %}{{ pagination.page_url.page_admin }}" title="{{ 'First page'|lang }}" {% if pagination.page_number==1 %}class="inactive"{% endif %}>&laquo;</a></li>
			{% for this_page in pagination.page_start..pagination.page_count %}
				{% if loop.index0<10 %}
					<li {% if pagination.page_number==this_page %}class="disabled"{% endif %}><a href="?{{ pagination.page_url.page_admin }}{% if pagination.page_url.page_admin %}&{% endif %}page={{ this_page }}" title="{{ 'Page'|lang }}: {{ this_page }}" {% if pagination.page_number==this_page %}class="inactive"{% endif %}>{{ this_page }}</a></li>
				{% endif %}
			{% endfor %}
		   <li {% if pagination.page_number==pagination.page_count %}class="disabled"{% endif %}><a href="?{{ pagination.page_url.page_admin }}{% if pagination.page_url.page_admin %}&{% endif %}page={{  pagination.page_count }}" title="{{ 'Last page'|lang }}" {% if pagination.page_number==pagination.page_count %}class="inactive"{% endif %}>&raquo;</a></li>
		</ul>
	</div>
{% endif %}
