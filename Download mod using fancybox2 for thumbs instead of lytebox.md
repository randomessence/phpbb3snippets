Download mod:

Using fancybox 2 instead of lytebox.

Find and open:

`styles\prosilver\template\dl_mod\view_dl_body.html`

Find 

```html
<!-- IF S_DL_LYTEBOX -->
	<li><a href="{downloads.thumbnail.THUMBNAIL_LINK}" title="{downloads.thumbnail.THUMBNAIL_NAME}" rel="lytebox<!-- IF S_TOTAL_IMAGES -->[DLMT]<!-- ENDIF -->"><img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{downloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" /></a></li>
<!-- ELSE -->
	<img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{L_DLdownloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" />
<!-- ENDIF -->
```

Replace with

```html
<!-- IF S_DL_LYTEBOX -->
	<li><a href="{downloads.thumbnail.THUMBNAIL_LINK}" title="{downloads.thumbnail.THUMBNAIL_NAME}" class="fancybox" rel="<!-- IF S_TOTAL_IMAGES -->[DLMT]<!-- ENDIF -->"><img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{downloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" /></a></li>
<!-- ELSE -->
	<img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{L_DLdownloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" />
<!-- ENDIF -->
```

`styles\prosilver\template\dl_mod\dl_thumbs_body.html`

```html
<dt><a href="{thumbnails.IMG_LINK}" rel="lytebox" title="{thumbnails.IMG_TITLE}"><img src="{thumbnails.IMG_LINK}" alt="{thumbnails.IMG_TITLE}" title="{thumbnails.IMG_TITLE}" style="max-weight: 150px; max-height: 100px;" /></a></dt>
```

i changed this to (not actually sure what this edit does, if anything)

```html
<dt><a href="{thumbnails.IMG_LINK}" class="fancybox" title="{thumbnails.IMG_TITLE}"><img src="{thumbnails.IMG_LINK}" alt="{thumbnails.IMG_TITLE}" title="{thumbnails.IMG_TITLE}" style="max-weight: 150px; max-height: 100px;" /></a></dt>
```

`dl_mod\includes\dl_thumbs.php`

 also includes this call I did not change but add here for reference purposes.

 ```php
 $template->assign_var('S_DL_LYTEBOX', true);
```