<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url('home') ?>">
                    <img src="<?= base_url('assets/img/logoibs.png') ?>" />
                </a>

            </div>
            <!-- userdata : usa sessão -->
            <span class="logout-spn">
                <?php if ($this->session->userdata("usuario_logado")) : ?> 
                    <?= anchor('login/logout', 'Logout', 'style="color:#fff"') ?>                  
                <?php endif ?>
            </span>
    </div>
</div>

