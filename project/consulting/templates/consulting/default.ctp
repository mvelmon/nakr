<!DOCTYPE html>

<html lang="fr">

    <head>
            <?php
                echo $this->Html->charset();
                echo $this->Html->meta('viewport', 'width=device-width, initial-scale=1');
                echo $this->Html->meta('description', '');
                echo $this->Html->meta('author', 'Rachida Nait Kaoudjt');
            ?>
    
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
            <title>NAKR&CO : Catalyseur de vos projets sante</title>
        
            <!-- CSS -->
            <?php echo $this->Html->css('bootstrap.min'); ?>
            <?php echo $this->Html->css('bootstrap-datetimepicker'); ?>
            <?php //echo $this->Html->css('bootstrap-switch.min'); ?>
        
            <?php echo $this->Html->css('carousel'); ?>
            <?php echo $this->Html->css('NexaLight'); ?>
            <?php echo $this->Html->css('NexaBold'); ?>
            <?php echo $this->Html->css('style'); ?>
            
            <!-- JS -->
            <?php echo $this->Html->script('jquery-2.1.4.min'); ?>
            <?php echo $this->Html->script('bootstrap.min'); ?>
            <?php echo $this->Html->script('moment-with-locales.min'); ?>
            <?php echo $this->Html->script('bootstrap-datetimepicker'); ?>
            
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->
          
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
            <script src="../../assets/js/vendor/holder.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </head>
    
    <body>
        <?php
                //echo $this->Session->flash(); 
                //echo $this->fetch('content');
        ?>
        <div class="container">
            <div id="topcontainer">
                <div class="row">
                    <div class="col-lg-2">
                        <?php echo $this->Html->link(
                                                     $this->Html->image('NAKR-logo.png'),
                                                     'http://nakr.fr',
                                                     array('escapeTitle' => false,'target' => '_self')
                                                     );
                        ?>
                    </div>
                    <div class="col-lg-10">
                        <h4>LE CATALYSEUR DE <b>VOS PROJETS SANTE</b></h4>
                        <!-- LE CATALYSEUR DE <b>VOS PROJETS SANTE</b> -->
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Carousel
        ==================================================
        -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?php echo $this->Html->image('carrousel_5_w500.jpg', array('class' => 'img-responsive center-block', 'alt' => 'First slide')); ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <h4>TOUT CITOYEN PEUT AGIR SUR SA SANT&Eacute;</h4>
                            <h4>TOUT CITOYEN PEUT CONTRIBUER &Agrave; LA PERFORMANCE DU SYST&Egrave;ME DE SANT&Eacute; </h4>
                            <h3>QUESTION DE RESPONSABILIT&Eacute; ?</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                <?php echo $this->Html->image('carrousel_4_w500.jpg', array('class' => 'img-responsive center-block', 'alt' => 'First slide')); ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <h4>LES GRANDS PROJETS NAISSENT DE BELLES ID&Eacute;ES</h4>
                            <h4>LES BELLES ID&Eacute;ES ONT BESOIN D&apos;&Ecirc;TRE ACCOMPAGN&Eacute;ES POUR SE R&Eacute;ALISER</h4>
                            <h3>QUESTION DE MOBILISATION ?</h3>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <?php echo $this->Html->image('carrousel_6_w500.jpg', array('class' => 'img-responsive center-block', 'alt' => 'First slide')); ?>
                    <div class="container">
                        <div class="carousel-caption">
                            <h4>L&apos;INNOVATION CONCERNE TOUS LES DOMAINES</h4>
                            <h4>L&apos;INNOVATION EST TOUJOURS N&Eacute;CESSAIRE POUR MAINTENIR ET AM&Eacute;LIORER L&apos;&Eacute;TAT DE BIEN-&Ecirc;TRE</h4>
                            <h3>QUESTION D&apos;ENGAGEMENT ?</h3>
                            <!--
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->

        <div id="nakrnavbar">
            <nav class="navbar navbar-nakr navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#metiers">NOS M&Eacute;TIERS</a></li>
                            <li><a href="#nos_domaines">NOS DOMAINES D&apos;INTERVENTION</a></li>
                            <li><a href="#contact">VOTRE CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <?php echo $this->Element('our_skills'); ?>
        
        <?php echo $this->Element('our_domains'); ?>

        <?php echo $this->Element('your_contact'); ?>
        
        <?php //echo $this->Element('contact_message'); ?>

        <?php echo $this->Element('links'); ?>
        
        <!-- Modal -->
        <div class="modal fade" id="mentions-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Mentions l&eacute;gales</h4>
                    </div>
                    <div class="modal-body">
                            <b>Soci&eacute;t&eacute;</b> NAKR & CO : S.A.S au capital social de 6.000 euros - Immatricul&eacute;e au RCS de Nanterre <br/>
                            <b>Si&egrave;ge social : </b>28 rue Troyon, 92 310 S&egrave;vres<br/>
                            <b>SIRET :</b> 802 639 039 00014 - CODE APE  - 7022Z<br/><br/>
                        
                            <b>Responsable &eacute;ditoriale :</b> NAKR & CO<br/>
                            <b>Conception graphique :</b> LA SUITE & C0<br/>
                            <!--
                            <b>D&eacute;veloppement :</b> MAT & WILL<br/>
                            -->
                            <b>H&eacute;bergement :</b> GANDI<br/><br/>
                        
                            <h4>Propri&eacute;t&eacute; et reproduction</h4>
                            <p>
                            nakr.fr, site Internet de la soci&eacute;t&eacute; NAKR & CO, a pour objectif de fournir des informations g&eacute;n&eacute;rales de ses prestations.<br/>
                            La structure g&eacute;n&eacute;rale, ainsi que les logiciels, textes, images anim&eacute;es ou non, son, la technologie, le savoir faire, et tout autres &eacute;l&eacute;ments composant ce site Internet sont la propri&eacute;t&eacute; exclusive de NAKR & CO.
                            Toute reproduction totale ou partielle de ce site, par quelque proc&eacute;d&eacute; que ce soit, sans l&apos;autorisation expresse de NAKR & CO, est interdite et constituerait une contrefa&ccedil;on sanctionn&eacute;e par les articles L335-2 et suivants du Code de la propri&eacute;t&eacute; intellectuelle. <br/>
                            </p>
                            
                            <h4>Donn&eacute;es personnelles</h4>
                            <p>
                            En conformit&eacute; avec les dispositions de la loi du 6 janvier 1978 modifi&eacute;e relative &agrave; l&apos;informatique, aux fichiers et aux libert&eacute;s, le traitement automatis&eacute; des donn&eacute;es nominatives r&eacute;alis&eacute;es &agrave; partir du site Internet "nakr.fr" a fait l&apos;objet d&apos;une d&eacute;claration aupr&egrave;s de la <b>C</b>ommission <b>N</b>ationale de l&apos;<b>I</b>nformatique et des <b>L</b>ibert&eacute;s (CNIL).<br/>
                            
                            L&apos;utilisateur dispose d&apos;un droit d&apos;acc&egrave;s, de modification, de rectification et de suppression des donn&eacute;es qui le concernent (article 38 et suivants de la loi &apos;&apos;Informatique et Libert&eacute;s&apos;&apos;). Pour l&apos;exercer, l&apos;utilisateur peut s&apos;adresser &agrave; NAKR & CO - 28 rue Troyon, 92 310 S&egrave;vres ou  envoyer un courrier &eacute;lectronique : webmaster@nakr.fr<br/>
                        
                            Les utilisateurs visiteurs de nakr.fr ne peuvent mettre en place un hyperlien en direction de ce site sans l&apos;autorisation expresse et pr&eacute;alable de NAKR & CO.
                            </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <!--
                        <button type="button" class="btn btn-primary">Save changes</button>
                        -->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container" id="contact">
                <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Retour en haut</a></p>
                <p>
                    &copy; 2016 NAKR & CO &middot;
                    <a href="#" data-toggle="modal" data-target="#mentions-modal">Mentions l&eacute;gales</a> &middot;
                </p>    
            </footer>
        </div>    
    </body>
</html>