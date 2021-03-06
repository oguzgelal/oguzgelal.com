<?php
# Change to false while deploying to the server
define("LOCAL", false);
# True compiles less on the fly.
# False loads the pre-compiled css at /frontend/assets/style/style.min.css
define("COMPILE_LESS", false);

session_name('oguzgelal');
if(session_id() == ''){ session_start(); }

# DB Related
define("PDO_PARAM_INT", PDO::PARAM_INT);
define("PDO_FETCH_ASSOC", PDO::FETCH_ASSOC);

# PATH Settings
define("ROOT", "/");
define("VIEWS", ROOT."frontend/");
define("TEMPLATES", VIEWS."templates/");
define("THIRDPARTY", VIEWS."thirdparty/");
define("LESS", VIEWS."less/");
define("JS", VIEWS."js/");
define("AJAX", VIEWS."ajax/");
define("ASSETS", VIEWS."assets/");
define("IMGS", ASSETS."img/");
define("PORTFOLIO", IMGS."portfolio/");
define("FLAGS", IMGS."flags/");
define("BLOG", IMGS."blog/");
define("STYLE", ASSETS."style/");
define("FILES", ASSETS."files/");

# DOMAIN Settings
define("PREFIX", "http://");
if (LOCAL){ define( "DOMAIN", "localhost:8888" ); }
else{ define( "DOMAIN", "oguzgelal.com" ); }

# OTHER
define("RESUME", FILES."OguzGelalCV-5-2.pdf");
define("RESUME_VERSION", "5.2");

