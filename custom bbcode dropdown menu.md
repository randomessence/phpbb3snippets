Open `styles/{YOURTHEME}/template/posting_buttons.html`

Find:

```html
	<!-- BEGIN custom_tags -->
		<input type="button" class="button2" name="addbbcode{custom_tags.BBCODE_ID}" value="{custom_tags.BBCODE_TAG}" onclick="bbstyle({custom_tags.BBCODE_ID})" title="{custom_tags.BBCODE_HELPLINE}" />
	<!-- END custom_tags -->
```

Replace with:

```html
<select name="addbbcode_custom" onchange="bbstyle(this.form.addbbcode_custom.options[this.form.addbbcode_custom.selectedIndex].value*1);this.form.addbbcode_custom.selectedIndex = 0;">
<option value="#" selected="selected">Custom BBCodes</option>
	<!-- BEGIN custom_tags -->
		<option value="{custom_tags.BBCODE_ID}" title="{custom_tags.BBCODE_HELPLINE}">{custom_tags.BBCODE_TAG}</option>
	<!-- END custom_tags -->   
</select>
```

[credits for this snippet](http://www.phpbb3bbcodes.com/viewtopic.php?f=45&t=1256)