<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<style type="text/css">
 .resp-container {
    position: relative;
    overflow: hidden;
    padding-top: 0.0%;
}
}
  </style>
<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="text-center animation-slideDown"><i class="fa fa-envelope"></i> <strong>Contáctenos</strong></h1>
        <h2 class="h3 text-center animation-slideUp">¡Estaremos encantados de responder todas sus preguntas y trabajar juntos!</h2>
    </div>
</section>
<!-- END Intro -->

<!-- Google Map 
<section class="site-content">
    Gmaps.js (initialized in js/pages/contact.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html 
    <div id="gmap" style="height: 350px;"></div>
</section>
 END Google Map -->

<!-- Support Links -->
<!-- <section class="site-content site-section">
    <div class="container">
        <div class="row row-items text-center">
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="gi gi-life_preserver"></i>
                </a>
                <h4>Open a <strong>ticket</strong></h4>
            </div>
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="gi gi-envelope"></i>
                </a>
                <h4><strong>Email</strong> Us</h4>
            </div>
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="fa fa-comments"></i>
                </a>
                <h4><strong>Chat</strong> Live</h4>
            </div>
            <div class="col-sm-3 animation-fadeIn">
                <a href="javascript:void(0)" class="circle themed-background">
                    <i class="fa fa-twitter"></i>
                </a>
                <h4><strong>Tweet</strong> Us</h4>
            </div>
        </div>
        <hr>
    </div>
</section> -->
<!-- END Support Links -->

<!-- Contact -->
<section class="site-content site-section">
    <div class="container">
        <div class="row">            
            <div class="col-sm-6 col-md-4 site-block" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">

            <div class="store-item-info clearfix">
                <div class="resp-container">
                <div class="site-block">
                    <h3 class="h2 site-heading"><strong>Moliendas</strong> Los Molina</h3>
                    <address>
                        El Salvador<br>
                        La Paz<br>
                        Jerusalén, Cantón Los Romeros<br><br>
                        <i class="fa fa-phone"></i> +(503) 7832-6694<br>
                        <i class="fa fa-phone"></i> +(503) 7131-9579<br>
                        <i class="fa fa-phone"></i> +(503) 2396-7903<br>
                        <i class="fa fa-envelope-o"></i> <a>jenrrimiller@hotmail.es</a>
                    </address>

                    <div class="site-block">
                    <h3 class="h2 site-heading"><strong>Acerca de </strong> nosotros</h3>
                    <p class="remove-margin" align="justify">
                        Somos una microempresa que tiene proyecciones de expansión en la producción de dulce de panela, de tal manera satisfacer las necesidades de los clientes ya se forma directa o indirecta.
                    </p>
                </div>
                </div>              
               
            </div>
            </div>
               
            </div>
            <div class="col-sm-6 col-md-8 site-block">               
            <div class="col-md-12 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <a href="javascript:void(0)" class="store-item">                    
                        <div class="store-item-info clearfix">
                        <div class="resp-container">
                <h3 class="h2 site-heading"><strong>Ubicación</strong> Geográfica</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13041.438072464509!2d-88.90423444990748!3d13.642710253746301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6351f73ec7580b%3A0xf196424494cfe703!2sMolienda%20los%20Molina!5e0!3m2!1ses!2ssv!4v1572307310564!5m2!1ses!2ssv" width="700" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>                        
                    </div>
                </a>
            </div>
            </div>
           </div>
    </div>
</section>
<!-- END Contact -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/contact.js"></script>
<script>$(function(){ Contact.init(); });</script>

<?php include 'inc/template_end.php'; ?>