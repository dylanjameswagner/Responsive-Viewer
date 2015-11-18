<!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, minimum-scale=0.5, maximum-scale=1.0, user-scalable=no"/>

    <title>responsive</title>

    <link rel="shortcut icon" type="image/x-icon" href="./public/images/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./public/images/apple-touch-icon.png"/>

<!--[if gte IE 9]><!-->

    <link rel="stylesheet prefetch" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic"/>
    <link rel="stylesheet" href="./public/styles/custom.css"/>

    <script src="./public/scripts/prefixfree-1.0.7.min.js"></script>

<!--<![endif]-->

</head>
<body>

    <header id="header">
        <form id="header-form" method="post">
            <p id="header-form-url"><input type="text" placeholder="enter a url"/> <button>Reload All</button></p>
            <p id="header-form-settings">
                <label><input type="radio"      id="stretch"    name="view"     value="stretch" checked="checked"/> Stretch</label>
                <label><input type="radio"      id="device"     name="view"     value="device"/>                    Device</label>
                <label><input type="radio"      id="viewport"   name="view"     value="viewport"/>                  Viewport</label>
                <label><input type="checkbox"   id="reverse"    name="reverse"  value="reverse"/>                   Reverse</label>
            </p>
        </form>

        <p id="header-credit">A tool based on the work of <a target="_blank" href="http://mattkersley.com">Matt Kersley</a> &raquo; <a target="_blank" href="https://github.com/mattkersley/Responsive-Design-Testing">Github</a></p>
    </header >

    <section id="frames" class="stretch">
        <div id="frames-inner">

<?php /* function frame($args){ ?>

            <div class="frame <?php echo $args[1]; ?>">
                <h2 class="frame-title"><span class="meta-width"> <?php echo $args[0][0]; ?></span> <span class="meta-delimiter">×</span> <span class="meta-height"><?php echo $args[0][1]; ?></span><?php if ($args[2]): ?> <small><?php echo $args[2]; ?> <?php if ($args[1] == 'viewport'): ?><span class="meta-delimiter">-</span> <?php echo $args[3]; ?><?php endif; // $args[1] == viewport ?></small><?php endif; // $args[2] ?> <button>Reload</button></h2>
                <iframe sandbox="allow-same-origin allow-forms allow-scripts" width="<?php echo $args[0][0]; ?>" height="<?php echo $args[0][1]; ?>" seamless></iframe>
            </div>

<?php } // frame ?>
<?php foreach ($frames as $frame): frame($frame); endforeach; */ ?>

<?php function iframe($iframe, $class){ ?>

            <div class="frame <?php echo $class; ?>">
                <h2 class="frame-title"><span class="meta-width"> <?php echo $iframe[0][0]; ?></span> <span class="meta-delimiter">×</span> <span class="meta-height"><?php echo $iframe[0][1]; ?></span><?php if ($class != 'stretch' && $iframe[1]): ?> <small><?php echo $iframe[1]; ?> <?php if ($class == 'viewport'): ?><span class="meta-delimiter">-</span> <?php echo $iframe[2]; ?><?php endif; // $class == viewport ?></small><?php endif; // $iframe[1] ?> <button>Reload</button></h2>
                <iframe sandbox="allow-same-origin allow-forms allow-scripts" width="<?php echo $iframe[0][0]; ?>" height="<?php echo $iframe[0][1]; ?>" seamless></iframe>
            </div>

<?php } // frame ?>

<?php foreach ($stretch as $iframe): iframe($iframe, 'stretch'); endforeach; ?>
<?php foreach ($device as $iframe): iframe($iframe, 'device'); endforeach; ?>
<?php foreach ($viewport as $iframe): iframe($iframe, 'viewport'); endforeach; ?>

        </div>
    </section>

<!--[if gte IE 9]><!-->

    <!--script src="./public/scripts/jquery-1.11.0.min.js"></script-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="./public/scripts/custom.js"></script>

<!--<![endif]-->

</body>
</html>
