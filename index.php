<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camagru</title>

    <!--    Stylesheet Files    -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!--    Javascript files are placed before </body>    -->
  </head>

  <body>
    <!--  Start Hero Section  -->
    <section class="hero">
      <header>
        <div class="row">
          <nav class="top-bar" data-topbar role="navigation">

            <!--    Start Logo    -->
            <ul class="title-area">
              <li class="name">
                <a href="#" class="logo">
                  <h1>Camagru</h1>
                </a>
              </li>
                <span class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></span>
              </li>
            </ul>
            <!--    End Logo    -->


          <?php
              if (isset($_SESSION["user"]))
                include("htmlBlocks/incognitoHeader.php");
              else
                include("htmlBlocks/connectedHeader.php");
            ?>
            <!--    Start Navigation Menu    -->
            <!--
            <section class="top-bar-section" id="mean_nav">
              <ul class="right">
                <li><a href="#services">sign-in</a></li>
                <li><a href="#testimonials">sign-up</a></li>
              </ul>
            </section> -->
            <!--    End Navigation Menu    -->

          </nav>
        </div>
      </header>

      <!--    Start Hero Caption    -->
      <section class="caption">
        <div class="row">
          <h1 class="mean_cap">Instagram like website</h1>
        </div>
      </section>
      <!--    End Hero Caption    -->

    </section>
    <!--  End Hero Section  -->


    <!--  Start Footer Section  -->
    <footer>
      <div class="row">
        <div class="small-12 medium-4 large-4 columns">
          <div class="copyrights">
            <a class="logo" href="#">
              <h1>Camagru</h1>
            </a>
            <p>Copyright © 2016 rpuccine</p>
          </div>
        </div>
      </div>
    </footer>
    <!--  End Footer Section  -->

  </body>
</html>
