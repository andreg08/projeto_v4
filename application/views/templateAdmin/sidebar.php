
<body>

    <div class="app">
        <div class="app-body">
         	<div class="app-sidebar sidebar-slide-left">
            	<div class="text-right"><button type="button" class="btn btn-sidebar" data-dismiss="sidebar"><span class="x"></span></button></div>
                	<div class="sidebar-header"><img src="<?php echo base_url(); ?>assets/img/john-doe.png" class="user-photo">
                    	<p class="username">André Gonçalves <small>Root</small></p>
					</div>
                	<div id="sidebar" class="sidebar-nav">
                    	<div class="sidebar-nav-btn"><a class="btn btn-block btn-outline-light">BANK SECURITY</a></div>
                    		<div class="sidebar-nav-group"><a href="#input-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-people"></i>Gestão de Clientes</a>
                        		<div id="input-controls" class="sidebar-nav-group collapse" data-parent="#sidebar">
									<a href="<?php echo base_url(); ?>clients/new_client" class="sidebar-nav-link">Novo Cliente </a> 
									<a href="<?php echo base_url(); ?>clients/client_table" class="sidebar-nav-link">Tabela Clientes</a> 
								</div>
                    		</div>
                    		<div class="sidebar-nav-group"><a href="#device-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-book-open"></i>Gestão de Contas</a>
                        		<div id="device-controls" class="sidebar-nav-group collapse" data-parent="#sidebar"><a href="<?php echo base_url(); ?>clients/new_acc" class="sidebar-nav-link">Nova Conta</a> <a href="./pages/device-controls/file-manager.html" class="sidebar-nav-link">Editar Conta</a>
								</div>
                    		</div>
                    	<div class="sidebar-nav-group"><a href="#content" class="sidebar-nav-link" data-toggle="collapse"><i class="fas fa-recycle"></i> Movimentos</a>
                        	<div id="content" class="collapse" data-parent="#sidebar"> <a href="#" class="sidebar-nav-link">Efetuar Movimento</a> <a href="#" class="sidebar-nav-link">Consultar Movimentos</a>
							</div>
                    	</div>
                    	<div class="sidebar-nav-group"><a href="#layout" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-ban"></i> Brevemente</a>
                        	<div id="layout" class="collapse" data-parent="#sidebar"><a href="./pages/layout/sidebar.html" class="sidebar-nav-link">Sidebar</a> <a href="./pages/layout/spinner.html" class="sidebar-nav-link">Spinner</a> <a href="./pages/layout/theming.html" class="sidebar-nav-link">Theming</a></div>
                    	</div>
                	</div>
                	<div class="sidebar-footer"><a href="./pages/content/chat.html" data-toggle="tooltip" title="Support"><i class="fa fa-comment"></i> </a><a href="./pages/content/settings.html" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i> </a><a href="<?php echo base_url('user/logout'); ?>" data-toggle="tooltip" title="Logout"><i class="fa fa-power-off"></i></a></div>
            	</div>
            	<div class="app-content">
                	<nav class="navbar navbar-expand navbar-light bg-white"><button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="fa fa-bars"></i></button>
						<div class="navbar-brand">Painel de Administração <i class="fas fa-address-card"></i>
						</div>
							<ul class="navbar-nav ml-auto">
								<li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-primary">3</span> <i class="fa fa-bell-o"></i></a>
									<div class="dropdown-menu dropdown-menu-right"><a href="./pages/content/notification.html" class="dropdown-item"><small class="text-secondary">Lorem ipsum (today)</small><br><div>Lorem ipsum dolor sit amet...</div></a>
										<div class="dropdown-divider"></div><a href="./pages/content/notification.html" class="dropdown-item"><small class="text-secondary">Lorem ipsum (yesterday)</small><br><div>Lorem ipsum dolor sit amet...</div></a>
										<div class="dropdown-divider"></div><a href="./pages/content/notification.html" class="dropdown-item"><small class="text-secondary">Lorem ipsum (12/25/2017)</small><br><div>Lorem ipsum dolor sit amet...</div></a>
									<div class="dropdown-divider">
									</div><a href="./pages/content/notifications.html" class="dropdown-item text-primary">See all notifications</a>
                                    </div>
                                </li>
						</ul>
                	</nav>
				<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><?= $page_heading ?></li>
        </ol>
      </nav>
