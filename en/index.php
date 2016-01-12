<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <title>Jugend Rettet</title>
        <meta name="description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta charset="utf-8">
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation" />
        <meta name="google-site-verification" content="KMNzTcq9zAtZpPFU4205bFNZx-FZKyiSFaNqrbi4XPI" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta property="og:url" content="http://en.jugendrettet.org/" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />

        <link rel="shortcut icon" type="image/x-icon" href="http://jugendrettet.org/graphics/jr.ico" />
        <link rel="mask-icon" href="http://www.jugendrettet.org/graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="http://jugendrettet.org/graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="http://jugendrettet.org/css/waves.css" type="text/css" />

        <link rel="stylesheet" href="http://jugendrettet.org/css/general.css" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/main.css" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/desktop.css" media="screen and (min-device-width: 851px)" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/mobile.css" media="screen and (max-device-width: 850px)" type="text/css" />

        <script src="http://jugendrettet.org/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('body').fadeIn(400);
            });
        </script>
    </head>

    <body class="start">
    <div id="error"><img src="http://jugendrettet.org/images/error.jpg" alt=""></div>
    <div id="sim-alt"><img src="http://jugendrettet.org/images/error.jpg" alt="Wave Simulation"></div>
	<div id="wrap" class="start">
        <header>
            <a id="logo-wrap" href="index">
                <img id="logo" src="http://jugendrettet.org/graphics/logo.svg" alt="Jugent Rettet">
                <div id="title">Jugend <b>Rettet</b></div>
            </a>
        </header>
            <div id="union">
                <p class="cushycms">Everyone<br>in maritime emergency<br>deserves rescue.<hr class="wide">
                    <a id="aendern-btn" href="aendern">I want to rescue too!</a>
                </p>
            </div>
            <div id="content">
                <footer class="start">
                    <div id="peek-container"></div>
                    <nav class="footer">
                        <ul>
                            <li><a href="http://en.jugendrettet.org/index">English</a></li>
                            <li><a href="http://jugendrettet.org/index">Deutsch</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        <div id="wellen">
        <div id="ui" style="height: 100px;">
            <div id="camera">
                <canvas id="profile" width="350" height="105"></canvas>
                <div id="wind">
                    <span id="wind-speed"></span>
                </div>
                <div id="size">
                    <span id="size-value"></span>
                </div>
                <div id="choppiness"></div>
            </div>
        </div>
        <canvas id="simulator"></canvas>
        </div>

        <!-- Scripts -->
        <script type="application/javascript">
            $(document).ready(function() {
                if (!$('#aendern-btn').is(':hover')) {
                    $(document).on('click', 'body', function() {
                        window.location = 'schiff';
                    });
                }
                $('#aendern-btn').click(function() {
                    e.stopPropagation();
                });
            });
        </script>
        <script src="http://jugendrettet.org/js/shared.js"></script>
        <script src="http://jugendrettet.org/js/simulation.js"></script>
        <script src="http://jugendrettet.org/js/ui.js"></script>
        <script src="http://jugendrettet.org/js/waves.js"></script>
        <script src="http://jugendrettet.org/js/main.js"></script>
        <script src="http://jugendrettet.org/js/peekfield.js"></script>
    </div>
    </body>
</html>
