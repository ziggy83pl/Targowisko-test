{% for ad in ads %}
<!--ads.tpl-->
<div class="ads-title" alt="Dodaj reklamę" title="{{ ad.name }}"> 
<hr>
	<a href="{{ ad.url }}">	
		<h2>{{ ad.name }}</h2>
	</a>
		<div class="ads">
			<a href="{{ ad.url }}">
				<img  alt="Reklama" src="upload/photos/{{ad.phfolder}}/{{ad.phimage}}">		
			</a>
			{% if ad.facebook %}
			<a class="ads-fb" href="http://{{ ad.facebook }}" target="_blank" >
				<i class="fab fa-facebook-f"></i>
			</a>
			{% endif %}
		</div>
		<hr>
</div>
	<br/>
{% endfor %}

<!-- style="background: #2980b9; width: 40px; height: 51px; padding-top: 10px; position: absolute; margin-left: -40px;" <img src="https://targowisko.org/views/default/images/facebook-side.png" alt="Facebook" width="10" height="21"> -->
