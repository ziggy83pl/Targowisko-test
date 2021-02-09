	<div id="search_box" class="container form-search {% if slider %}search_box_slider{% endif %}">
		<form action="{{ path('offers') }}" method="get">
			<input type="hidden" name="search">
			<div class="row">
				{% if settings.search_box_keywords %}
					<div class="col-12 col-sm">
						<label for="search_keywords">{{ 'Keywords'|lang }}: </label>
						<input class="form-control" type="text" name="keywords" id="search_keywords" placeholder="{{ 'Enter your keywords...'|lang }}" title="{{ 'Enter your keywords...'|lang }}" value="{{ get.keywords }}">
					</div>
				{% endif %}
				{% if categories and settings.search_box_category %}
					<div class="col-12 col-sm">
						<label for="search_category">{{ 'Category'|lang }}:</label>
						<select class="form-control" name="category" id="search_category" title="{{ 'Select the appropriate category'|lang }}">
							<option value="">{{ 'All'|lang }}</option>
							{% if category %}
								{% if overCategory %}<option value="{{ overCategory.id }}">{{ overCategory.name }}</option>{% endif %}
								<option value="{{ category.id }}" {% if get.category==category.id %}selected{% endif %}>{{ category.name }}</option>
							{% endif %}
							<option disabled>──────────</option>
							{% for cat in categories %}
								<option value="{{ cat.id }}" {% if get.category==cat.id %}selected{% endif %}>{{ cat.name }}</option>
							{% endfor %}
						</select>
					</div>
				{% endif %}
				{% if types %}
					<div class="col-12 col-sm">
						<label for="search_type">{{ 'Offer type'|lang }}:</label>
						<select class="form-control" name="type" id="search_type" title="{{ 'Select the appropriate offer type'|lang }}">
							<option value="">{{ 'All'|lang }}</option>
							{% for type in types %}
								<option value="{{ type.slug }}" {% if get.type==type.slug %}selected{% endif %}>{{ type.name }}</option>
							{% endfor %}
						</select>
					</div>
				{% endif %}
				<div class="w-100 d-block d-lg-none"></div>
				{% if search_show_price %}
					<div class="col-12 col-sm">
						<label for="search_price_from">{{ 'Price'|lang }} ({{ settings.currency }}): </label>
						<div class="input-group">
							<input class="form-control text-right" type="number" name="price_from" id="search_price_from" placeholder="{{ 'Min...'|lang }}" title="{{ 'Enter the min value'|lang }}" value="{{ get.price_from }}" min="0" step="0.01">
							<div class="input-group-prepend input-group-append">
								<span class="input-group-text"> - </span>
							</div>
							<input class="form-control text-right" type="number" name="price_to" id="search_price_to" placeholder="{{ 'Max...'|lang }}" title="{{ 'Enter the max value'|lang }}" value="{{ get.price_to }}" min="0" step="0.01">
						</div>
					</div>
				{% endif %}
				<div class="w-100 d-none d-lg-block"></div>
				{% if states %}
					<div class="{% if get.state %}col{% else %}col{% endif %} search_main_change_col">
						<label for="search_state">{{ 'State'|lang }}:</label>
						<select class="form-control select_state" name="state" id="search_state" title="{{ 'Select the appropriate state'|lang }}">
							<option value="">{{ 'All'|lang }}</option>
							{% for state in states %}
								<option value="{{ state.slug }}" {% if get.state==state.slug %}selected{% endif %}>{{ state.name }}</option>
							{% endfor %}
						</select>
					</div>
					{% for key,state in states %}
						{% if state.states %}
							<div class="col substates substate_{{ state.slug }}" {% if get.state!=state.slug %}style="display:none"{% endif %} >
								<label>&nbsp;</label>
								<select class="form-control" name="state2" title="{{ 'Select the appropriate state'|lang }}" {% if get.state!=state.slug %}disabled{% endif %}>
									<option value="">{{ '-- select --'|lang }}</option>
									{% for key2,state2 in state.states %}
										<option value="{{ state2.slug }}" {% if get.state2==state2.slug %}selected{% endif %}>{{ state2.name }}</option>
									{% endfor %}
								</select>
							</div>
						{% endif %}
					{% endfor %}
				{% endif %}
				<div class="w-100 d-block d-lg-none"></div>
				{% if settings.search_box_address %}
					<div class="col-12 col-sm">
						<label for="search_main_address">{{ 'Address'|lang }}:</label>
						<input type="text" name="address" class="form-control" placeholder="{{ '1600 Pennsylvania Avenue NW, Washington, D.C. 20500'|lang }}" title="{{ 'Enter the address'|lang }}" value="{{ get.address }}" id="search_main_address">
					</div>
					{% if settings.search_box_distance and settings.google_maps_api %}
						<div class="col-12 col-sm">
							<label for="search_distance">{{ 'Distance'|lang }}:</label>
							<div class="form-inline text-right">
								<div class="input-group">
									<input type="number" name="distance" id="search_distance" class="form-control text-right" placeholder="20" title="{{ 'Enter the distance from the searched address'|lang }}" value="{% if get.distance %}{{ get.distance }}{% else %}10{% endif %}" min="0" step="1">
									<div class="input-group-append">
										<span class="input-group-text">{{ 'km'|lang }}</span>
									</div>
								</div>
							</div>
						</div>
					{% endif %}
				{% endif %}
				<div class="col pull-right">
					<label>&nbsp;</label>
					<button type="submit" class="form-control btn btn-1 text-uppercase"><i class="fas fa-search"></i> {{ 'Search'|lang }}</button>
				</div>
			</div>
		</form>
	</div>
