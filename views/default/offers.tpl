{% if offers %}
	<form method="get" class="float-right">
		{% for key,item in pagination.page_url.sort %}
			{% if item|length %}
				{% for key2,item2 in item %}
					{% if item2|length %}
						{% for key3,item3 in item2 %}
							<input type="hidden" name="{{ key }}[{{ key2 }}][{{ key3 }}]" value="{{ item3 }}">
						{% endfor %}
					{% else %}
						<input type="hidden" name="{{ key }}[{{ key2 }}]" value="{{ item2 }}">
					{% endif %}
				{% endfor %}
			{% else %}
				<input type="hidden" name="{{ key }}" value="{{ item }}">
			{% endif %}
		{% endfor %}
		<select name="sort" onchange="this.form.submit()" title="{{ 'Select sort method'|lang }}" class="form-control" style="width: auto">
			<option value="newest" {% if get.sort=="newest" %}selected{% endif %}>{{ 'Newest'|lang }}</option>
			<option value="oldest" {% if get.sort=="oldest" %}selected{% endif %}>{{ 'Oldest'|lang }}</option>
			<option value="cheapest" {% if get.sort=="cheapest" %}selected{% endif %}>{{ 'Cheapest'|lang }}</option>
			<option value="most_expensive" {% if get.sort=="most_expensive" %}selected{% endif %}>{{ 'Most expensive'|lang }}</option>
			<option value="a-z" {% if get.sort=="a-z" %}selected{% endif %}>{{ 'A - Z'|lang }}</option>
			<option value="z-a" {% if get.sort=="z-a" %}selected{% endif %}>{{ 'Z - A'|lang }}</option>
			{% if get.distance>0 %}
				<option value="nearest" {% if get.sort=="nearest" %}selected{% endif %}>{{ 'Nearest'|lang }}</option>
				<option value="farthest" {% if get.sort=="farthest" %}selected{% endif %}>{{ 'Farthest'|lang }}</option>
			{% endif %}
		</select>
	</form>
	<div class="clearfix"></div>
	<br>
	{% for offer in offers %} <!--Zobacz wszytkie offers.tpl-->
		<div class="offers {% if (offer.promoted and ((levels == 1 and offer.promotion_type == 1) or (levels == 2 and offer.promotion_type == 0))) %}promoted{% endif %}"itemscope itemtype="http://schema.org/Product">
						
			<div class="row">
				<div class="col-md-2 col-sm-3 text-center"></a>{% if (offer.promoted and ((levels == 1 and offer.promotion_type == 1) or (levels == 2 and offer.promotion_type == 0))) %}<span class="promowaneP"title="To ogłoszenie jest promowane">zobacz</span>{% endif %}<!--test <span class="promowane">Zobacz</span> promowani--> 

					<a href="{{ path('offer',offer.id,offer.slug) }}" title="{{ offer.name }}" itemprop="url"><img src="{% if offer.thumb %}upload/photos/{{ offer.thumb }}{% else %}{{ settings.base_url }}/views/{{ settings.template }}/images/{{offer.categories[0].name}}no_image.png{% endif %}" alt="{{ offer.name }}" onerror="this.src='{{ settings.base_url }}/views/{{ settings.template }}/images/{{offer.categories[0].name}}no_image.png'" itemprop="image" class="{% if offer.thumb %}img-zoom{% endif %}"></a>
				</div>
				<div class="col-md-7 col-sm-5 overflow_hidden"><!-- zobacz wszytkie-->
					<h4><a href="{{ path('offer',offer.id,offer.slug) }}" title="{{ offer.name }}" class="main-color-2"><span itemprop="name">{{ offer.name }}</span></a></h4>
					<p class="text-muted" itemprop="disambiguatingDescription">{{ offer.description|striptags|slice(0,150) }}{% if offer.description|striptags %}...{% endif %}</p>
					{% if offer.distance %}<p>{{ 'Distance'|lang }}: {{ offer.distance|number_format(2, '.', ',') }} {{ 'km'|lang }}</p>{% endif %}
					{% if offer.type_name or offer.state_name %}<p class="main-color-1">
						{% if offer.type_name %}<a href="{{ path('offers') }}?type={{ offer.type_slug }}" title="{{ 'Offer type'|lang }}: {{ offer.type_name }}" class="main-color-1">{{ offer.type_name }}</a>{% endif %}
						{% if offer.type_name and offer.state_name %} | {% endif %}
						{% if offer.state_name %}<a href="{{ path('offers') }}?state={{ offer.state_slug }}" title="{{ 'State'|lang }}: {{ offer.state_name }}" class="main-color-1">{{ offer.state_name }}</a>{% endif %}
						{% if offer.state2_name %} | <a href="{{ path('offers') }}?state={{ offer.state_slug }}&state2={{ offer.state2_slug }}" title="{{ offer.state2_name }}" class="main-color-1">{{ offer.state2_name }}</a>{% endif %}
					</p>{% endif %}
				</div> <!--Data cena rodzaj promowanie-->
				<div class="col-md-3 col-sm-4">
					<div class="offers_date text-center small"><p>{{ offer.date_start|date("d-m-Y") }}</p></div>
					{% if offer.category_name %}<div class="offers_category text-center"><p><a href="{{ path('offers') }}?category={{ offer.category_id }}" title="{{ 'Category'|lang }}: {{ offer.category_name }}"><strong itemprop="category">{{ offer.category_name }}</strong></a></p></div>{% endif %}
					{% if offer.price_free %}
						<div class="offers_price text-center"><p><strong>{{ 'For free'|lang }}</strong></p></div>
					{% elseif offer.price>0 %}
						<div class="offers_price text-center"><p><strong>{{ offer.price|showCurrency }}</strong></p>{% if offer.price_negotiate %}<p class="small">({{ 'to negotiate'|lang }})</p>{% endif %}</div>
					{% endif %}<!--promowanie-->

						<!--<div class="promujA"title="Wejdź na swoje ogłoszenie!">Promuj ogłoszenie</div>   
							Promowanie ogłoszenia-->
					
							
				</div>
				{% if controller=='my_offers' %}
					<div class="col-md-12">
						<a href="{{ path('add') }}/?add_similar={{ offer.id }}" title="{{ 'Add similar'|lang }}: {{ offer.name }}" class="btn btn-sm btn-success">{{ 'Add similar'|lang }}</a>

						<a href="{{ path('edit',offer.id,offer.slug) }}" title="{{ 'Edit offer'|lang }}: {{ offer.name }}" class="btn btn-sm btn-info">{{ 'Edit'|lang }}</a>

						<button title="{{ 'Finish offer'|lang }}: {{ offer.name }}" class="btn btn-sm btn-warning {% if not offer.active %}disabled{% endif %}" data-toggle="modal" data-target="#finish_offer_{{ offer.id }}">{{ 'Finish'|lang }}</button>

						<button title="{{ 'Delete offer'|lang }}: {{ offer.name }}" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#remove_offer_{{ offer.id }}"
						>{{ 'Delete'|lang }}</button>

						{% if settings.allow_refresh_offer %}
							<button title="{{ 'Refresh offer'|lang }}: {{ offer.name }}" class="btn btn-sm btn-primary {% if not offer.refresh.active %}disabled{% endif %}"  data-toggle="modal" data-target="#refresh_offer_{{ offer.id }}">{{ 'Refresh offer'|lang }}</button>
							{% if not offer.refresh.active %}
								{% if offer.refresh.not_confirmed %}
									<span class="text-danger">{{ 'Offer is not approved'|lang }}</span>
								{% elseif offer.refresh.must_payed %}
									<span class="text-danger">{{ 'You must pay for offer'|lang }}</span>
								{% else %}
									<span>{{ 'Available for'|lang }} {{ offer.refresh.days }} {{ 'days'|lang }}</span>
								{% endif %}
							{% elseif not offer.active %}
								<span class="text-danger">{{ 'Offer is inactive'|lang }}</span>
							{% endif %}
						{% endif %}
					</div>

					{% if offer.active %}
						<div class="modal fade" id="finish_offer_{{ offer.id }}">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">{{ 'Finish offer'|lang }}: {{ offer.name }}</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<form method="post" class="form">
										<input type="hidden" name="action" value="finish_offer">
										<input type="hidden" name="id" value="{{ offer.id }}">
										<input type="hidden" name="token" value="{{ generateToken('finish_offer') }}">
										<div class="modal-body">
											<p>{{ 'Are you sure you want to finish offer'|lang }} {{ offer.name }}?</p>
										</div>
										<div class="modal-footer">
											<input type="button" class="btn btn-secondary" data-dismiss="modal" value="{{ 'Cancel'|lang }}">
											<input type="submit" class="btn btn-warning" value="{{ 'Finish'|lang }}">
										</div>
									</form>
								</div>
							</div>
						</div>
					{% endif %}
					<div class="modal fade" id="remove_offer_{{ offer.id }}">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">{{ 'Delete offer'|lang }}: {{ offer.name }}</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<form method="post" class="form">
									<input type="hidden" name="action" value="remove_offer">
									<input type="hidden" name="id" value="{{ offer.id }}">
									<input type="hidden" name="token" value="{{ generateToken('remove_offer') }}">
									<div class="modal-body">
										<p>{{ 'Are you sure you want to delete offer'|lang }} {{ offer.name }}?</p>
									</div>
									<div class="modal-footer">
										<input type="button" class="btn btn-secondary" data-dismiss="modal" value="{{ 'Cancel'|lang }}">
										<input type="submit" class="btn btn-danger" value="{{ 'Remove'|lang }}">
									</div>
								</form>
							</div>
						</div>
					</div>
					{% if offer.refresh.active %}
						<div class="modal fade" id="refresh_offer_{{ offer.id }}">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">{{ 'Refresh offer'|lang }}: {{ offer.name }}</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<form method="post" class="form">
										<input type="hidden" name="action" value="refresh_offer">
										<input type="hidden" name="id" value="{{ offer.id }}">
										<input type="hidden" name="token" value="{{ generateToken('refresh_offer') }}">
										<div class="modal-body">
											<p>{{ 'Are you sure to refresh offer'|lang }} {{ offer.name }}?</p>
										</div>
										<div class="modal-footer">
											<input type="button" class="btn btn-secondary" data-dismiss="modal" value="{{ 'Cancel'|lang }}">
											<input type="submit" class="btn btn-primary" value="{{ 'Refresh offer'|lang }}">
										</div>
									</form>
								</div>
							</div>
						</div>
					{% endif %}

				{% elseif controller=='clipboard' %}
					<div class="col-md-12">
						<form method="post">
							<input type="hidden" name="action" value="clipboard_remove">
							<input type="hidden" name="id" value="{{ offer.id }}">
							<input type="hidden" name="token" value="{{ generateToken('clipboard_remove') }}">
							<input type="submit" value="{{ 'Remove from clipboard'|lang }}" class="btn btn-danger btn-sm">
						</form>
					</div>
				{% endif %}
			</div>
		</div>
	{% endfor %}
	<br>
	{% include 'pagination.tpl' %}
{% else %}
	<h3 class="text-danger">{{ 'Nothing found'|lang }}</h3>
{% endif %}
