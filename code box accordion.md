bbcode.html

BEFORE

```html
<!-- BEGIN code_open --> <dl class ="codebox" ><dt> {L_CODE}: <a href = "#" onclick ="selectCode(this); return false;"> {L_SELECT_ALL_CODE}</a></dt><dd><pre><code> <!-- END code_open -->
<!-- BEGIN code_close --> </code></pre></dd></dl> <!-- END code_close -->
```

AFTER

```html
<!-- BEGIN code_open --> <dl class ="codebox accordion"><dt> Click me to expand or close this code box</dt><dd><div class ="happy"> {L_CODE}: <a href="#" onclick="selectCode(this); return false;">{L_SELECT_ALL_CODE}</a></div><pre><code class="prettyprint" ><!-- END code_open -->
<!-- BEGIN code_close --> </code></pre></dd></dl> <!-- END code_close -->
```

content.css

Before

```css
    /* Code block */
    dl.codebox {
      padding : 3px;
      background-color : #FFFFFF;
      border : 1px solid #d8d8d8;
      font-size : 1em;
    }
    
    dl.codebox dt {
      text-transform : uppercase;
      border-bottom : 1px solid #CCCCCC;
      margin-bottom : 3px;
      font-size : 0.8em;
      font-weight : bold;
      display : block;
    }
    
    blockquote dl.codebox {
      margin-left : 0;
    }
    
    dl.codebox pre {
       /* Also see tweaks.css */
      overflow : auto;
       /* Making preformated <pre> text wrap in CSS3, Mozilla, Opera and IE:
      http://users.tkk.fi/~tkarvine/pre-wrap-css3-mozilla-opera-ie.html */
      white-space : pre-nowrap;
      white-space : -moz-nowrap;
      white-space : -nowrap;
      white-space : -o-nowrap;
      height : auto;
      max-height : none;
      padding-top : 5px;
      font : 0.9em Monaco, "Andale Mono" ,"Courier New" , Courier, mono;
      line-height : 1.3em;
      color : #8b8b8b;
      margin : 2px 0;
    }
```

After

```css
    /* Code block */
    dl.codebox {
      padding : 0px;
      background-color : #FFFFFF;
      font-size : 1em;
    
    }
    
    dl.codebox dt {
      text-transform : uppercase;
      border-bottom : 1px solid #CCCCCC;
      margin-bottom : 3px;
      font-size : 0.8em;
      font-weight : bold;
      display : block;
    }
    
    blockquote dl.codebox {
      margin-left : 0;
    }

	.happy {padding: 1px 4px 0px 4px; border-bottom: solid #79B7E7 1px;}

    dl.codebox pre {
       /* Also see tweaks.css */
      overflow : auto;
       /* Making preformated <pre> text wrap in CSS3, Mozilla, Opera and IE:
      http://users.tkk.fi/~tkarvine/pre-wrap-css3-mozilla-opera-ie.html */
      white-space : pre-nowrap;
      white-space : -moz-nowrap;
      white-space : -nowrap;
      white-space : -o-nowrap;
      height : auto;
      max-height : none;
      padding-top : 1px;
      padding-right : 4px;
      padding-left : 4px;
      padding-bottom : 2px;
      font : 0.9em Monaco, "Andale Mono" ,"Courier New" , Courier, mono;
      line-height : 1.3em;
      color : #8b8b8b;
      margin : 0px;
    }
```

redmond jquery-ui.css

Corner radius

Before

```css
    /* Misc visuals
    ----------------------------------*/
    
    /* Corner radius */
    . ui-corner-all,
    . ui-corner-top,
    . ui-corner-left,
    . ui-corner-tl {
      border-top-left-radius : 5px;
    }
    . ui-corner-all,
    . ui-corner-top,
    . ui-corner-right,
    . ui-corner-tr {
      border-top-right-radius : 5px;
    }
    . ui-corner-all,
    . ui-corner-bottom,
    . ui-corner-left,
    . ui-corner-bl {
      border-bottom-left-radius : 5px;
    }
    . ui-corner-all,
    . ui-corner-bottom,
    . ui-corner-right,
    . ui-corner-br {
      border-bottom-right-radius : 5px;
    }
```

After

```css
    /* Misc visuals
    ----------------------------------*/
    
    /* Corner radius */
    .ui-corner-all,
    .ui-corner-top,
    .ui-corner-left,
    .ui-corner-tl {
      border-top-left-radius : 0px;
    }
    .ui-corner-all,
    .ui-corner-top,
    .ui-corner-right,
    .ui-corner-tr {
      border-top-right-radius : 0px;
    }
    .ui-corner-all,
    .ui-corner-bottom,
    .ui-corner-left,
    .ui-corner-bl {
      border-bottom-left-radius : 0px;
    }
    .ui-corner-all,
    .ui-corner-bottom,
    .ui-corner-right,
    .ui-corner-br {
      border-bottom-right-radius : 0px;
    }
```

Accordion content

Before

```css
	.ui-accordion .ui-accordion-content {
	padding : 1em 2.2em;
	border-top : 0;
	overflow : auto;
	}
```

After

```css
	.ui-accordion .ui-accordion-content {
	padding : 0.0px 4px 0.2px 4px;
	border-top : 1;
	overflow : auto;
	}
```



