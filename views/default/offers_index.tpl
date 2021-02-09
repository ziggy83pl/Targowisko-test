
{% for offer in offers %}
	{% if loop.index%6 == 1 %} 
		<div class="row">
	{% endif %}
	<div class="col-lg-2 col-md-4 col-sm-6 text-center">
		<div class="offers_index overflow_hidden {% if offer.promoted %}offers_index_promoted{% endif %}" itemscope itemtype="http://schema.org/Product">
			<a href="{{ path('offer',offer.id,offer.slug) }}" 
			title="{{ offer.name }}" itemprop="url">

			<img src="{% if offer.thumb %}upload/photos/{{ photo.folder }}{{ offer.thumb }}{% else %}{{ settings.base_url }}/views/{{ settings.template }}/images/{{offer.categories[0].name}}no_image.png{% endif %}" alt="{{ offer.name }}" onerror="this.src='{{ settings.base_url }}/views/{{ settings.template }}/images/{{offer.categories[0].name}}no_image.png'" itemprop="image">
			
			</a>

			<h6><a href="{{ path('offer',offer.id,offer.slug) }}" title="{{ offer.name }}" class="main-color-2"><span itemprop="name">{{ offer.name }}</span></a></h6>
			{% if offer.price_free %}
				<h6><strong>{{ 'For free'|lang }}</strong></h6>
			{% elseif offer.price>0 %}
				<h6><strong>{{ offer.price|showCurrency }} {% if offer.price_negotiate %}<span class="small">({{ 'to negotiate'|lang }})</span>{% endif %}</strong></h6>
			{% else %}
				<h6>&nbsp;</h6>
			{% endif %}
			{% if offer.promoted %}<span class="promowane"title="To ogłoszenie jest promowane!">promowane</span>{% endif %}
			
		</div>
	</div>
	{% if loop.index%6 == 0 %} 
		</div><br>
	{% endif %}
{% endfor %}

{% if (offers|length)%6 > 0 %}</div>{% endif %}