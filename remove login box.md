`prosilver/template/index.php`

Find and remove

```
<!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->
	<form method="post" action="{S_LOGIN_ACTION}" class="headerspace">
	<h3><a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a><!-- IF S_REGISTER_ENABLED -->&nbsp; &bull; &nbsp;<a href="{U_REGISTER}">{L_REGISTER}</a><!-- ENDIF --></h3>
		<fieldset class="quick-login">
			<label for="username">{L_USERNAME}:</label>&nbsp;<input type="text" name="username" id="username" size="10" class="inputbox" title="{L_USERNAME}" />
			<label for="password">{L_PASSWORD}:</label>&nbsp;<input type="password" name="password" id="password" size="10" class="inputbox" title="{L_PASSWORD}" />
			<!-- IF S_AUTOLOGIN_ENABLED -->
				| <label for="autologin">{L_LOG_ME_IN} <input type="checkbox" name="autologin" id="autologin" /></label>
			<!-- ENDIF -->
			<input type="submit" name="login" value="{L_LOGIN}" class="button2" />
			{S_LOGIN_REDIRECT}
		</fieldset>
	</form>
<!-- ENDIF -->
```