<div class="ttt">

<form method="post" enctype="multipart/form-data">
  <input type="hidden" name="action" value="send_message">
  <div class="form-group row">
    <label for="name" class="col-sm-4 col-md-2 col-form-label">{{ 'Name'|lang }} <i class="fas fa-user-edit"></i></label>
    <div class="col-sm-8 col-md-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="{{ 'John Smith'|lang }}" required value="{{ input.name }}" title="{{ 'Enter your name'|lang }}">
    </div>
  </div>
  <div class="form-group row {% if error.email %}was-validated{% endif %}">
    <label for="email" class="col-sm-4 col-md-2 col-form-label">{{ 'E-mail address'|lang }} <i class="fas fa-at"></i></label>
    <div class="col-sm-8 col-md-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="{{ 'example@example.com'|lang }}" required value="{% if input.email %}{{ input.email }}{% elseif user.id %}{{ user.email }}{% endif %}" title="{{ 'Enter your email address'|lang }}" {% if user.id %}readonly{% endif %}>
      {% if error.email %}<div class="invalid-feedback">{{ error.email }}</div>{% endif %}
    </div>
  </div>
  <div class="form-group row">
    <label for="message" class="col-sm-4 col-md-2 col-form-label">{{ 'Message'|lang }} <i class="far fa-envelope"></i></label>
    <div class="col-sm-8 col-md-10">
      <textarea class="form-control" rows="4" name="message" id="message" required placeholder="{{ 'My message'|lang }}" title="{{ 'Enter your message'|lang }}">{{ input.message }}</textarea>
    </div>
  </div>
  {% if settings.mail_attachment %}
    <div class="form-group row">
      <label for="attachment" class="col-sm-4 col-md-2 col-form-label">{{ 'Attachment'|lang }} <i class="fas fa-paperclip"></i></label>
      <div class="col-sm-8 col-md-10">
        <input type="file" name="attachment" id="attachment" title="{{ 'Here you can add an attachment to your message'|lang }}" class="form-control-file">
      </div>
    </div>
  {% endif %}
  <div class="form-group row {% if error.captcha %}was-validated{% endif %}">
    <label for="captcha" class="col-sm-4 col-md-2 col-form-label">{{ 'Captcha'|lang }} <i class="fas fa-laptop-code"></i></label>
    <div class="col-sm-4 col-md-3">
      <img src="{{ path('captcha') }}" alt="captcha">
    </div>
    <div class="col-sm-4 col-md-7">
      <input type="text" class="form-control" placeholder="abc123" title="{{ 'Enter the code Captcha'|lang }}" name="captcha" id="captcha" required maxlength="32">
      {% if error.captcha %}<div class="invalid-feedback">{{ error.captcha }}</div>{% endif %}
    </div>
  </div>
  {% if not user.id %}
    <div class="form-group row">
      <div class="col-sm-8 col-md-10 offset-sm-4 offset-md-2">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="rules" required> {{ 'Accepts the terms and conditions and the privacy policy'|lang }} (<a href="{{ path('rules') }}" title="{{ 'Terms of service'|lang }}" target="_blank" class="main-color-2">{{ 'Terms of service'|lang }}</a> - <a href="{{ path('privacy_policy') }}" title="{{ 'Privacy policy'|lang }}" target="_blank" class="main-color-2">{{ 'Privacy policy'|lang }}</a>)
          </label>
        </div>
      </div>
    </div>
  {% endif %}
  <div class="form-group row">
    <div class="col-sm-8 col-md-10 offset-sm-4 offset-md-2">
      <input type="submit" value="{{ 'Send!'|lang }}" class="btn btn-primary">
    </div>
  </div>
</form>

</div>