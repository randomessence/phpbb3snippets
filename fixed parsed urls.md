
Fix parsed URLS

You can do this 2 ways.

1: When posting check the box to disable the parsing of links in that post.

or

2: Open `includes/message_parser.php`

Find:

```$this->message = make_clickable($this->message, $server_url);```

Replace with:

```$this->message = $this->message;```

The second way is better suited if you use large amounts of code with links of any type. As phpbb3 will only linkify a link when you use the a bbcode. ( this also means url shortening is disabled, again which is better for usage of this mod ) and syntax highlighter 3 has its own link detection.
