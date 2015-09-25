<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// init $tpl helper
require dirname(__FILE__) . '/php/init.php';

?><?php echo $tpl->renderHTML(); ?>
<head>
    <jdoc:include type="head" />
    <!-- IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="<?php echo $tpl->getBodyClasses(); ?>">

    <!--[if lt IE 7]><p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p><![endif]-->

    <a href="#" id="back-to-top" style="display: inline;">
        <i class="fa fa-arrow-circle-up"></i>
    </a>

    <header id="tophead"> <!-- Header -->
        <div class="text-vertical">
            <div class="container"> <!-- Container -->
                <div class="row"> <!-- Row -->
                    <div class="col-md-3"> <!-- col-md-3 -->
                        <!-- <h1>Header</h1> -->
                        <a href="/">
                            <jdoc:include type="modules" name="header-logo" />
                        </a>
                    </div>
                    <!-- col-md-3 end -->

                    <div class="col-md-7 col-md-offset-1"> <!-- col-md-7 -->
                        <jdoc:include type="modules" name="header-menu" />
                        <a href="#" class="resmenu"><i class="fa fa-bars text-left"></i></a>
                    </div>
                    <!-- col-md-7 end -->
                </div>
                <!-- Row - End -->

                <section id="topheader"> <!-- Top Header -->
                    <jdoc:include type="modules" name="header-info" />
                </section>
                <!-- Top Header - End -->
            </div>
            <!-- Container - End -->
        </div>
    </header>
    <!-- Header - End -->

    <section id="about"> <!-- Section (#feautures) -->
        <jdoc:include type="modules" name="about-info" />
    </section>

    <section id="results"> <!-- Section (#feautures) -->
        <jdoc:include type="modules" name="results" />
    </section>
    <!-- Section Feautures - End -->

    <section id="rules">
        <jdoc:include type="modules" name="rules" />
    </section>
    <!-- User Interface - End -->

    <section id="problems">
        <jdoc:include type="modules" name="tasks" />
    </section>
    <!-- end problems -->

    <section id="feauturetab"> <!-- Feauture Tabs -->
        <jdoc:include type="modules" name="tasks_last" />
    </section>
    <!-- Feauture Tabs - End -->

    <section id="experts"> <!--experts  -->
        <jdoc:include type="modules" name="experts" />
    </section>
    <!-- experts - End -->

    <section id="gifts">
        <jdoc:include type="modules" name="prizes" />
    </section>

    <section id="partners">
        <jdoc:include type="modules" name="partners" />
    </section>
    <!-- partners - End -->

    <section id="promo-materials"> <!-- Promo material Tabs -->
        <jdoc:include type="modules" name="promo" />
    </section>
    <!-- Feauture Tabs - End -->

    <section id="contact"> <!-- Contact -->
        <jdoc:include type="modules" name="feedback" />
    </section>
    <!-- Contact - End -->

    <footer> <!-- Footer -->
        <jdoc:include type="modules" name="footer" />
    </footer>
    <!-- Footer -->

    <script src="<?php echo $tpl->js; ?>/jquery-1.11.2.min.js"></script>
    <script src="<?php echo $tpl->js; ?>/bootstrap.min.js"></script>
    <script src="<?php echo $tpl->js; ?>/appmox.js"></script>
    <script src="<?php echo $tpl->js; ?>/wow.js"></script>
    <script> new WOW().init(); </script>
    <script src="<?php echo $tpl->js; ?>/main.js"></script>

</body>
</html>
