<div id="nakrheading4">
    <div class="container">
        <h1>UN PROJET ? ENVIE DE MIEUX NOUS CONNA&Icirc;TRE ?</h1>
        
        <div class="container">
            <?php echo $this->Form->create('Contact');
            ?>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <?php echo $this->Form->input('name', array('class' => 'form-control', 'label' => '', 'placeholder' => 'Prenom / Nom'));?>
                        </div>
                        <!--
                        <div class="form-group">
                            <?php //echo $this->Form->input('society', array('class' => 'form-control', 'label' => '', 'placeholder' => 'Societe'));?>
                        </div>
                        -->
                        <div class="form-group">
                            <?php echo $this->Form->input('recipient', array('class' => 'form-control', 'label' => '', 'placeholder' => 'Adresse email'));?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('phone', array('class' => 'form-control', 'label' => '', 'placeholder' => 'Telephone'));?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <?php echo $this->Form->input('content', array(
                                                                           'class'          => 'form-control',
                                                                           'label'          => '',
                                                                           'placeholder'    => 'Votre Message',
                                                                           'type'           => 'textarea',
                                                                           'style'          => 'width:100%;'
                                                                           )
                                                          );?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->submit(__('Envoyer'), array('class' => 'btn btn-default')); ?>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
        </div>
            <?php echo $this->Form->end() ?>
    </div>
</div>