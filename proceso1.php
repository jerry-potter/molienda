<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="animation-slideDown"><i class="fa fa-spinner" aria-hidden="true"></i> <strong>Descripción de proceso n°1</strong></h1>
        <h2 class="h3 animation-slideUp">Moliendas Los Molina</h2>
    </div>
</section>
<!-- END Intro -->

<!-- Content -->
<section class="site-content site-section">
    <div class="container">
        <!-- Project Navigation -->
        <div class="site-block clearfix">
            
            <a href="procesos.php" class="btn btn-primary pull-left"><i class="fa fa-th-large"></i> Todos los procesos</a>
        </div>
        <!-- END Project Navigation -->

        <!-- Project Info -->
        <div class="row">
            <!-- Project Slider -->
            <div class="col-sm-5 site-block">
                <div id="project-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner text-center">
                        <div class="active item">
                            <img src="img/placeholders/photos/1.JPG" alt="Image 1">
                        </div>
                        <div class="item">
                            <img src="img/placeholders/photos/2.JPG" alt="Image 2">
                        </div>
                        
                    </div>
                    <!-- END Wrapper for slides -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#project-carousel" data-slide="prev">
                        <span>
                            <i class="fa fa-chevron-left"></i>
                        </span>
                    </a>
                    <a class="right carousel-control" href="#project-carousel" data-slide="next">
                        <span>
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    </a>
                    <!-- END Controls -->
                </div>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 50%;"><strong>Empleados</strong></td>
                            <td class="text-right">Ejerciendo su labor diaria</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END Project Slider -->

            <!-- Project Details -->
            <div class="col-md-7 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
                <a class="store-item">
                    
                        <div class="store-item-info clearfix">
                        <h3 class="site-heading"><strong>Cañando</strong>, ó cortando la caña de azucar.</h3>    
                       <span class="text-muted"><p align="justify">Con este paso damos inicio al proceso de producción de dulce panela, en la cual consiste en enviar las personas encargadas también conocidos como cañeros, su labor consiste en ir a los cañales y comenzar a cortar la caña para sacar la cantidad necesaria de jugo y así poder llenar 5 peroles de dicho jugo, la cantidad de peroles depende de cada molienda, por general suelen tener de 2 a 6 peroles.</p></span>
                       </div>
                </a>
            </div>
            <!-- END Project Details -->
        </div>
        <!-- END Project Info -->
        <hr>
    </div>
</section>
<!-- END Content -->


<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>