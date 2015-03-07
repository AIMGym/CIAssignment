
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        
        <link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        
    </head>
    </head>
    <body>
        <a href="/"><img class="banner" src="../data/images/weights_banner.jpg"/></a>
        <nav class="navbar">
            <div class="navbar-inner">
                <span class="brand">AIM GYM</span>
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/About">About</a></li>
                <li><a href="/Membership">Membership</a></li>
                <li><a href="/Programs">Programs</a></li>
                <li><a href="/Faq">FAQ's</a></li>
            </ul>
            </div>
        </nav>
        
        <!--start of content-->
        <div class ="wrapper">
            
            {content}

        </div>
        
        <!--footer -->
        <footer>
            <p> &copy; <?=date('Y')?> AIM gym </p>
        </footer>
    </body>
</html>