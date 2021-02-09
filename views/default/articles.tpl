

{% if articles %}
	<ul class="list-unstyled articles_list">
		{% for article in articles %}
			<li class="media">
				<a href="{{ path('article',article.id,article.slug) }}" class="mr-3">
					<img src="{% if article.thumb %}{{ article.thumb }}{% else %}{{ settings.base_url }}/views/{{ settings.template }}/images/no_image.png{% endif %}" alt="{{ article.name }}" class="img-fluid img-thumbnail" onerror="this.src='{{ settings.base_url }}/views/{{ settings.template }}/images/no_image.png'">
				</a>
				<div class="media-body">
					<h5 class="mt-0 mb-2"><a href="{{ path('article',article.id,article.slug) }}" class="main-color-2">{{ article.name }}</a></h5>
					<p class="text-muted small mb-2">{{ article.date|date("d-m-Y") }}</p>
					<p>{{ article.content_short }}</p>
				</div>
			</li>
		{% endfor %}
	</ul>
{% else %}
	<h3 class="text-danger">{{ 'Nothing found'|lang }}</h3>
{% endif %}


