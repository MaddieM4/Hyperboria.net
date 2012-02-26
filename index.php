<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>hyperboria</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
            body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .container > .content {
               padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
            /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      h1 {
	color: #333;
}
      .topbar .btn {
        border: 0;
      }

    </style>
  </head>

  <body>

   <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Hyperboria</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
                         </ul>
               <ul class="nav pull-right"> 
        <li></li>
        </ul>       </div><!--/.nav-collapse -->
        </div>
      </div>

    <div class="container">

     <div class="content">
                <div class="row">
           <div class="span14">
           <div class="alert alert-error">
 			Website under construction
				</div>
                           <div class="hero-unit">
        <h1>a revolutionary concept</h1>
        <p><b>Hyperboria</b> is the first and only CJDNS powered decentralized network.</p>
        <p><a href="https://wiki.projectmeshnet.org/Hyperboria" class="btn primary large">Learn more &raquo;</a></p>
      </div>

    </div>
     
	</div></div>
     

      <footer>
        <p><a href="https://wiki.projectmeshnet.org/CJDNS">cjdns</a></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
