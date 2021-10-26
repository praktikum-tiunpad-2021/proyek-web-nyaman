<div class="topnav shadow">
    <div class="mx-1">
        <div class="logo">
            <img src="/assets/img/logoterang.png" alt="nyaman" width=95px>
        </div>
        <?php  
        if(session()->get('username') == ''){?>
            <a href="/Sign-In">Sign In</a></li>
            <a href="/list-kamar">List Kamar</a></li>
            <a href="/">Home</a></li>
        <?php } else { ?>
            <a href="<?= base_url('login/logout'); ?>">Logout</a></li>
            <a href="/Profil">Profil</a></li>
            <a href="/list-kamar">List Kamar</a></li>
            <a href="/">Home</a></li>
        <?php  }?>
        <div class="clearfix"></div>
    </div>
</div>