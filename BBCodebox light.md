[http://www.phpbb3bbcodes.com/viewtopic.php?f=45&t=1381](http://www.phpbb3bbcodes.com/viewtopic.php?f=45&t=1381 "Credits")

Open `styles/prosilver/template/posting_buttons.html`

Find: 

```js
l: '{LA_BBCODE_L_HELP}',
```
Add After

```js
li: '{LA_BBCODE_LISTITEM_HELP}',
```
Find:

```js
dE('colour_palette');
            e = document.getElementById('colour_palette');
            
            if (e.style.display == 'block')
            {
               document.getElementById('bbpalette').value = '{LA_FONT_COLOR_HIDE}';
            }
            else
            {
               document.getElementById('bbpalette').value = '{LA_FONT_COLOR}';
            }
```

Replace with:

```js
dE('colour_palette');
            e = document.getElementById('colour_palette');
```

Find:

```html
    <input type="button" class="button2" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onclick="bbstyle(0)" title="{L_BBCODE_B_HELP}" />
```

Replace with: 

```html
    <input type="text" readonly="readonly" name="helpbox" style="width:80%" class="<!-- IF S_IN_UCP -->helpline2<!-- ELSE -->helpline<!-- ENDIF -->" value="{L_STYLES_TIP}" /><br />
       <input type="button" class="buttonz" accesskey="b" name="addbbcode0" value="" onclick="bbstyle(0)" style="background: url('{ROOT_PATH}images/editor/text_bold.png');" onmouseover="helpline('b')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onclick="bbstyle(2)" title="{L_BBCODE_I_HELP}" />

```html
Replace with:

```html
    <input type="button" class="buttonz" accesskey="i" name="addbbcode2" value="" style="background: url('{ROOT_PATH}images/editor/text_italic.png');" onclick="bbstyle(2)" onmouseover="helpline('i')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onclick="bbstyle(4)" title="{L_BBCODE_U_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="u" name="addbbcode4" value="" style="background: url('{ROOT_PATH}images/editor/text_underline.png');" onclick="bbstyle(4)" onmouseover="helpline('u')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbstyle(6)" title="{L_BBCODE_Q_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="q" name="addbbcode6" value="" style="background: url('{ROOT_PATH}images/editor/comment.png');" onclick="bbstyle(6)" onmouseover="helpline('q')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onclick="bbstyle(8)" title="{L_BBCODE_C_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="c" name="addbbcode8" value="" style="background: url('{ROOT_PATH}images/editor/page_white_code.png');" onclick="bbstyle(8)" onmouseover="helpline('c')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onclick="bbstyle(10)" title="{L_BBCODE_L_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="l" name="addbbcode10" value="" style="background: url('{ROOT_PATH}images/editor/text_list_bullets.png');" onclick="bbstyle(10)" onmouseover="helpline('l')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onclick="bbstyle(12)" title="{L_BBCODE_O_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="o" name="addbbcode12" value="" style="background: url('{ROOT_PATH}images/editor/text_list_numbers.png');" onclick="bbstyle(12)" onmouseover="helpline('o')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="y" name="addlitsitem" value="[*]" style="width: 40px" onclick="bbstyle(-1)" title="{L_BBCODE_LISTITEM_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="t" name="addlitsitem" value="" style="background: url('{ROOT_PATH}images/editor/bullet_black.png');" onclick="bbstyle(-1)" onmouseover="helpline('li')" onmouseout="helpline('tip')" />
```

Find:

```html
    <input type="button" class="button2" accesskey="p" name="addbbcode14" value="Img" style="width: 40px" onclick="bbstyle(14)" title="{L_BBCODE_P_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="p" name="addbbcode14" value="" style="background: url('{ROOT_PATH}images/editor/image.png');" onclick="bbstyle(14)" onmouseover="helpline('p')" onmouseout="helpline('tip')" />
```



Find:

```html
    <input type="button" class="button2" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onclick="bbstyle(16)" title="{L_BBCODE_W_HELP}" />
```
Replace with:

```html
    <input type="button" class="buttonz" accesskey="w" name="addbbcode16" value="" style="background: url('{ROOT_PATH}images/editor/world_link.png');" onclick="bbstyle(16)" onmouseover="helpline('w')" onmouseout="helpline('tip')" />
```



Find:

```html
    <input type="button" class="button2" accesskey="d" name="addbbcode18" value="Flash" onclick="bbstyle(18)" title="{L_BBCODE_D_HELP}" />
```
Replace with:

```
    <input type="button" class="buttonz" accesskey="d" name="addbbcode18" value="" style="background: url('{ROOT_PATH}images/editor/page_white_flash.png');" onclick="bbstyle(18)" onmouseover="helpline('d')" onmouseout="helpline('tip')" />
```



Find:

```
    <select name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="{L_BBCODE_F_HELP}">
```
Add Before:

```
    <input type="button" class="buttonz" name="bbpalette" id="bbpalette" value="" style="background: url('{ROOT_PATH}images/editor/color_wheel.png');" onclick="change_palette();" onmouseover="helpline('s')" onmouseout="helpline('tip')" />
```



Find and delete:

```
    <input type="button" class="button2" name="bbpalette" id="bbpalette" value="{L_FONT_COLOR}" onclick="change_palette();" title="{L_BBCODE_S_HELP}" />
```
