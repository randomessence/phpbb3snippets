prettyphoto share on

open: styles/prosilver/themplate/overall_header.html

find:

    </head>

Code: Select all

    <!--phpBB Pretty Sociable by Slash & Stoker www.wiizard.it www.phpbb3bbcodes.com-->

    <!-- IF SCRIPT_NAME == "viewtopic" or SCRIPT_NAME == "viewforum" -->
    <script type="text/javascript" src="{ROOT_PATH}script/prettySociable/js/jquery.prettySociable.js"></script>
    <!-- ENDIF -->

    <script type="text/javascript">
    // <![CDATA[
    $(document).ready(function(){
       <!-- IF SCRIPT_NAME == "viewtopic" or SCRIPT_NAME == "viewforum" -->
       $.prettySociable();
       <!-- ENDIF -->   
    });
    // ]]>
    </script>
    <!--[if lte IE 6]><script src="{ROOT_PATH}script/prettySociable/js/DD_belatedPNG.js" type="text/javascript"></script><![endif]-->

    <!-- IF SCRIPT_NAME == "viewtopic" or SCRIPT_NAME == "viewforum" -->
    <link rel="stylesheet" href="{ROOT_PATH}script/prettySociable/css/prettySociable.css" type="text/css" media="screen" />
    <!-- ENDIF -->

    <!--phpBB Pretty Sociable by Slash & Stoker www.wiizard.it www.phpbb3bbcodes.com-->

open: styles/prosilver/themplate/viewtopic_body.html

find:

    <h2><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a></h2>

replace with:

    <h2><!-- IF S_IS_BOT --><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><!-- ELSE --><a href="#" rel="prettySociable;title: Drag to share:;excerpt:{TOPIC_TITLE}">{TOPIC_TITLE}</a><!-- ENDIF --></h2>

open: styles/prosilver/themplate/viewforum_body.html

find:

    <h2><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></h2>

replace with:

    <h2><!-- IF S_IS_BOT --><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><!-- ELSE --><a href="#" rel="prettySociable;title:Drag to share;excerpt:{FORUM_NAME}">{FORUM_NAME}</a><!-- ENDIF --></h2>