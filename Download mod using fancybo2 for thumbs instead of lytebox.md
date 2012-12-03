Download mod:

Using fancybox 2 instead of lytebox.

find and open

`styles\prosilver\template\dl_mod\view_dl_body.html`

find 

```html
						<!-- IF S_DL_LYTEBOX -->
							<li><a href="{downloads.thumbnail.THUMBNAIL_LINK}" title="{downloads.thumbnail.THUMBNAIL_NAME}" rel="lytebox<!-- IF S_TOTAL_IMAGES -->[DLMT]<!-- ENDIF -->"><img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{downloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" /></a></li>
						<!-- ELSE -->
							<img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{L_DLdownloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" />
						<!-- ENDIF -->
```

replace with

```html
						<!-- IF S_DL_LYTEBOX -->
							<li><a href="{downloads.thumbnail.THUMBNAIL_LINK}" title="{downloads.thumbnail.THUMBNAIL_NAME}" data-fancybox-group="dlmodthumbs" class="fancybox"><img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{downloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" /></a></li>
						<!-- ELSE -->
							<img src="{downloads.thumbnail.THUMBNAIL_LINK}" alt="{downloads.thumbnail.THUMBNAIL_NAME}" title="{L_DLdownloads.thumbnail.THUMBNAIL_NAME}" style="max-weight: 150px; max-height: 100px;" />
						<!-- ENDIF -->
```


`styles\prosilver\template\dl_mod\dl_thumbs_body.html`

```html
<dt><a href="{thumbnails.IMG_LINK}" rel="lytebox" title="{thumbnails.IMG_TITLE}"><img src="{thumbnails.IMG_LINK}" alt="{thumbnails.IMG_TITLE}" title="{thumbnails.IMG_TITLE}" style="max-weight: 150px; max-height: 100px;" /></a></dt>
```

i changed this to 

```html
<dt><a href="{thumbnails.IMG_LINK}" data-fancybox-group="dlmodthumbs" class="fancybox" title="{thumbnails.IMG_TITLE}"><img src="{thumbnails.IMG_LINK}" alt="{thumbnails.IMG_TITLE}" title="{thumbnails.IMG_TITLE}" style="max-weight: 150px; max-height: 100px;" /></a></dt>
```


`dl_mod\includes\dl_thumbs.php`

 also includes this call i did not change but add here for reference purposes.

 ```php
 $template->assign_var('S_DL_LYTEBOX', true);
```