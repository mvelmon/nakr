<?php if( $this->Session->read('Auth.User.id') ): ?>
    <div id="nakrnavbar-admin">
        <!--
        <nav class="navbar navbar-nakr navbar-static-top">
        -->
        <nav class="navbar navbar navbar-inverse">
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
                        <?php if( $this->Session->read('Auth.User.group_id') == 1): ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Groupes<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('Liste', array('controller'=>'groups', 'action'=>'admin_index')); ?></li>
                                    <li><?php echo $this->Html->link('Ajouter un groupe', array('controller'=>'groups', 'action'=>'admin_add')); ?></li>
                                </ul>
                            </li>
                        <?php endif ?>
                        
                        <?php if( $this->Session->read('Auth.User.group_id') < 3): ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Utilisateurs<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('Tous les utilisateurs', array('controller'=>'users', 'action'=>'admin_index')); ?></li>
                                    <li><?php echo $this->Html->link('Ajouter un utilisateur', array('controller'=>'users', 'action'=>'admin_add')); ?></li>
                                    
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Notion de client&egrave;le</li>
                                    <li><?php echo $this->Html->link('Les affectations : Utilisateurs/Client', array('controller'=>'CustomersUsers', 'action'=>'admin_index')); ?></li>
                                    <li><?php echo $this->Html->link('Nouvelle affectation', array('controller'=>'CustomersUsers', 'action'=>'admin_add')); ?></li>
                                    
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Operations compte utilisateur</li>
                                    <li><?php //echo $this->Html->link('', array('controller'=>'accounts_operations', 'action'=>'admin_index')); ?></li>
                                </ul>
                            </li>
                        <?php endif ?>
                        
                        <?php if( $this->Session->read('Auth.User.group_id') == 3): ?>
                            <li><?php echo $this->Html->link('Clients', array('controller'=>'customers', 'action'=>'admin_mine')); ?></li>
                            <li><?php echo $this->Html->link('Evenements', array('controller'=>'events', 'action'=>'admin_mine')); ?></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clients<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('Tous les clients', array('controller'=>'customers', 'action'=>'admin_index')); ?></li>
                                    <li><?php echo $this->Html->link('Ajouter un client', array('controller'=>'customers', 'action'=>'admin_add')); ?></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ev&egrave;nements<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $this->Html->link('Tous les evenements', array('controller'=>'events', 'action'=>'admin_index')); ?></li>
                                    <li><?php echo $this->Html->link('Saisir un nouvel evenement', array('controller'=>'events', 'action'=>'admin_add')); ?></li>
                                </ul>
                            </li>
                        <?php endif ?>
                        
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->Session->read('Auth.User.firstname').' '.$this->Session->read('Auth.User.name'); ?><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link('Acceuil', array('controller'=>'users', 'action'=>'admin_home')); ?></li>
                            <li><?php echo $this->Html->link('Mon profil', array('controller'=>'users', 'action'=>'admin_my_profile')); ?></li>
                            <li><?php echo $this->Html->link('Deconnexion', array('controller'=>'users', 'action'=>'logout')); ?></li>
                            <!--
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            -->
                          </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<?php endif ?>