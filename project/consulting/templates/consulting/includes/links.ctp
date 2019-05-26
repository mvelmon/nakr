<div id="nakrheading5">
    <div class="container">
        <h3>SUIVEZ-NOUS SUR...</h3>
            <p>
                <center>
                    <?php echo $this->Html->link(
                                                 $this->Html->image(
                                                                    'linkedin.png',
                                                                    array('class' => 'img-rounded', 'width' => '70', 'height' => '70')
                                                                    ),
                                                 'https://www.linkedin.com/in/rachidanaitkaoudjt',
                                                 array('escapeTitle' => false,'target' => '_blank')
                                                 );
                    ?>
                    <?php echo $this->Html->link(
                                                 $this->Html->image(
                                                                    'twitter.png',
                                                                    array('class' => 'img-rounded', 'width' => '70', 'height' => '70')
                                                                    ),
                                                 'https://twitter.com/NAKRandCO',
                                                 array('escapeTitle' => false,'target' => '_blank')
                                                );
                    ?>
                    <?php echo $this->Html->link(
                                                 $this->Html->image(
                                                                    'scoopit.png',
                                                                    array(
                                                                          'class' => 'img-rounded',
                                                                          'width' => '70',
                                                                          'height' => '70'
                                                                          )
                                                                    ),
                                                 'http://www.scoop.it/u/nakr-co',
                                                 array(
                                                       'escapeTitle' => false,
                                                       'target' => '_blank'
                                                       )
                                                );
                    ?>
                </center>
            </p>
            <p>
                <center>
                    - Membre fondateur de <?php echo $this->Html->link('rselib.org', 'http://www.rselib.org', array('target' => '_blank')); ?> -
                </center>
            </p>
    </div>
</div>