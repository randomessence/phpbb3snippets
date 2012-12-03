You **must** download [these files](http://www.longtailvideo.com/jw-player/download/) and upload them to your forum somewhere. This example uses a folder called `mediaplayer` in the forum root.

this must be included in either the overall_header.html of you style or part of the bbcode. This example uses a `mediaplayer/jwplayer.js` in the forum root.

```
<script type="text/javascript" src="{ROOT_PATH}mediaplayer/jwplayer.js"></script>
```
**This is the bbcode tag.**
```
[jwplayer6]{IDENTIFIER}[/jwplayer6]
```
**This is the HTML replace**

```
<div id='{IDENTIFIER}'></div>
<script type='text/javascript'>
  jwplayer('{IDENTIFIER}').setup({
    file: "http://www.youtube.com/watch?v={IDENTIFIER}",
    width: "480",
    height: "270",
    image: "http://i.ytimg.com/vi/{IDENTIFIER}/default.jpg",
    autostart: "false",
  });
</script>
```
**Helpline.**

Use the Video ID for any video you want to with this bbcode. So for this URL:

```
http://www.youtube.com/watch?v=7N5OhNplEd4
```
you do this 
```
[jwplayer6]N5OhNplEd4[/jwplayer6]
```