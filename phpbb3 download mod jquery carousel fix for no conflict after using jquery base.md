open this file

`styles/prosilver/template/dl_mod/view_dl_body.html`

**Before**

```html

                           <script type="text/javascript">
                         // <![CDATA[
                         jQuery(document).ready(function() {
                              jQuery('#dl_thumbs').jcarousel({
                                   visible: 1,
                                   scroll: 1
                              });
                         });
                         // ]]>
                         </script>
```

**After**

```html
                       <script type="text/javascript">
                         // <![CDATA[
                         $(document).ready(function() {
                              $('#dl_thumbs').jcarousel({
                                   visible: 1,
                                   scroll: 1
                              });
                         });
                         // ]]>
                         </script>
```