<div class="navbar shadow">
    <div class="mx-2">
        <div class="logo">
            <img src="/assets/img/logoterang.png" alt="nyaman" width=95px>
        </div>
        <?php  
        if(session()->get('username') == ''){?>
            <a href="/Sign-In">Login</a></li>
            <a href="/list-kamar">List Kamar</a></li>
            <a href="/">Home</a></li>
        <?php } else { ?>
            <a href="<?= base_url('login/logout'); ?>">Logout</a></li>
            <a href="/Profil">Profil</a>
            <?php if(session()->get('username') == 'admin'){?> ?>
            <div class="dropdown">
                <button class="dropbtn">Kamar 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="/list-kamar">List Kamar</a>
                <a href="/no-kamar">Nomor Kamar</a>
                </div>
            </div> 
            <?php } else {?>
                <a href="/list-kamar">List Kamar</a></li>
            <?php } ?>
            <a href="/">Home</a>
        <?php  }?>
        <div class="clearfix"></div>
    </div>
</div>