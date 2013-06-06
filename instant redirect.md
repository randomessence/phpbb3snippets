Open: `includes/functions.php`

```php
$redirect = meta_refresh(3, $redirect);
trigger_error($message . '<br /><br />' . sprintf($l_redirect, '<a href="' . $redirect . '">', '</a>'));

```

Before Add:

```php
redirect($redirect);
```

[Credits](http://www.phpbb3bbcodes.com/viewtopic.php?f=45&t=1269)