<!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, minimum-scale=0.5, maximum-scale=1.0, user-scalable=no"/>

    <title>Responsive Viewer</title>

    <link rel="shortcut icon" type="image/x-icon" href="./public/images/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./public/images/apple-touch-icon.png"/>

<!--[if gte IE 9]><!-->

    <link rel="stylesheet prefetch" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic"/>
    <link rel="stylesheet" href="./public/styles/custom.css"/>

    <script src="//cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script><script>if (typeof PrefixFree == 'undefined') { document.write(unescape('%3Cscript src="./public/scripts/prefixfree-1.0.7.min.js"%3E%3C/script%3E')); }</script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script><script>if (typeof jQuery == 'undefined') { document.write(unescape('%3Cscript src="./public/scripts/jquery-2.1.4.min.js"%3E%3C/script%3E')); }</script>
    <script src="./public/scripts/custom.js"></script>

<!--<![endif]-->

</head>
<body>

    <header id="header">
        <form id="header-form" method="post">
            <p id="header-form-url">
                <input type="text" placeholder="enter a url"/> <button>Reload All</button>
            </p>
            <ul id="header-form-settings">
                <li><input type="radio"    id="stretch"  name="view"    value="stretch" checked="checked"/> <label for="stretch">Stretch</label></li>
                <li><input type="radio"    id="viewport" name="view"    value="viewport"/>                  <label for="viewport">Viewport</label></li>
                <li><input type="checkbox" id="reverse"  name="reverse" value="reverse"/>                   <label for="reverse">Reverse</label></li>
            </ul>
        </form>

        <p id="header-credit">
            <a target="_blank" href="https://github.com/dylanjameswagner/Responsive-Viewer">Github</a>
            | Inspired by the work of
            <a target="_blank" href="https://github.com/mattkersley/Responsive-Design-Testing">Matt Kersley</a>
        </p>
    </header>

    <section id="frames" class="stretch">
        <div id="frames-inner">

<?php include 'frames.php'; ?>
<?php function iframe($iframe, $class) { ?>

            <div class="frame <?php echo $class; ?>">
                <h2 class="frame-title">
                    <span class="meta-width"><?php echo $iframe[0][0]; ?></span>
                    <span class="meta-delimiter">×</span>
                    <span class="meta-height"><?php echo $iframe[0][1]; ?></span>
                    <?php if ($class != 'stretch' && $iframe[1]): ?>
                    <small><?php echo $iframe[1]; ?>
                        <?php if ($class == 'viewport'): ?>
                            <span class="meta-delimiter">-</span>
                            <?php echo $iframe[2]; ?>
                        <?php endif; // $class == viewport ?>
                    </small><?php endif; // $iframe[1] ?>
                    <button>Reload</button>
                </h2>
                <iframe width="<?php echo $iframe[0][0]; ?>" height="<?php echo $iframe[0][1]; ?>" sandbox="allow-same-origin allow-forms allow-scripts" seamless></iframe>
            </div>

<?php } // frame ?>
<?php
    foreach ($viewport as $iframe) :
        iframe($iframe, 'viewport');
    endforeach;
?>

        </div>
    </section>

</body>
</html>
