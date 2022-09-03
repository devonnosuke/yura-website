    <!-- Back to top button -->
    <a class="btn-to-top btn btn-medium waves-effect grey darken-3 waves-dark tooltipped back-to-top" href="#home" data-position="left" data-delay="50" data-tooltip="Back to top"><i class="bi bi-chevron-bar-up"></i></a>

    <!-- **** Navbar Secion ***-->
    <div class="navbar-fixed" id="navbar">
        <nav class="nav-index grey darken-3">
            <div class=" container">
                <div class="nav-wrapper">
                    <?php
                    $base = '';
                    ($title == 'Portfolio' || $title == 'Contact us' || $title == 'Sejarah Yura') ? $base = base_url() . '/' : $base = '';
                    ?>
                    <!-- Menu Button -->
                    <a href="#" data-activates="slide-out" class="button-collapse nav-link"><i class="bi bi-list"></i></a>
                    <!-- The Logo Brand -->
                    <a href="<?= $base ?>#home" class="brand-logo nav-link">
                        <!-- <span class="hide-on-med-and-up">SB</span> -->
                        <div class="valign-wrapper">
                            <img src="<?= base_url() ?>/assets/img/logo_baru.png" class="responsive-img logo" alt="Yura Company Logo">
                            <span class="hide-on-small-only light" style="font-weight: 400;">Yura Company</span>
                        </div>
                    </a>
                    <!-- %%% Dekstop Nav %%% -->
                    <ul class="right hide-on-med-and-down">
                        <li><a class="nav-link" href="<?= $base ?>#about">Tentang</a></li>
                        <li><a class="nav-link" href="<?= $base ?>#visi">Visi Misi</a></li>
                        <!-- <li><a class="nav-link" href="<? //= $base 
                                                            ?>#skills">Skills</a></li> -->
                        <!-- <li><a class="nav-link" href="<? //= $base 
                                                            ?>#education">Educational</a></li> -->
                        <li><a class="nav-link" href="<?= $base ?>#services">Layanan</a></li>
                        <li><a class="nav-link" href="<?= $base ?>#faq">Sering Ditanyakan</a></li>
                        <li><a class="nav-link" href="<?= base_url() ?>/contact">Contact Us</a></li>
                        <li><a class="nav-link" href="<?= base_url() ?>/portfolio">Portfolio</a></li>
                        <li><a class="nav-link" href="<?= base_url() ?>/sejarah">Sejarah</a></li>
                        <!-- Dropdown Trigger Menu -->
                        <!-- <li>
                            <a class="dropdown-button center-align nav-link" href="#!" data-activates="menu-dropdown">
                                <span>Menu</span>
                                <i class="bi bi-caret-down-fill right small-icon"></i>
                            </a>
                        </li> -->
                    </ul>
                    <!-- The Dropdown Menu -->
                    <!-- <ul id="menu-dropdown" class="dropdown-content">
                        <li><a href="#!" class="light"><i class="bi bi-house-door-fill left"></i> Home</a></li>
                        <li><a href="#!" class="light"><i class="bi bi-globe2 left"></i> Blog</a></li>
                        <li><a href="code/index.html" class="light"><i class="bi bi-file-earmark-code-fill left"></i> My code</a></li>
                    </ul> -->
                    <!-- %%% Mobile Nav %%% -->
                    <ul id="slide-out" class="side-nav">
                        <li>
                            <div class="userView">
                                <div class="background">
                                    <img class="responsive-img sampul" src="<?= base_url() ?>/img/wallpaper4.png" alt="Thumbnail">
                                </div>
                                <a href="#!user"><img class="circle responsive-img" src="<?= base_url() ?>/assets/img/Personal_Aug_21_2022-AM-06-23_1661080996.jpg" alt="Channel Logo"></a>
                                <a href="#!name"><span class="name">PT.Yura Afirmatif Digital</span></a>
                                <a href="#!email"><span class="email">cs@yuracompany.com</span></a>
                            </div>
                        </li>
                        <ul class="collapsible" data-collapsible="accordion">
                            <li class="daftar-menu">
                                <div class="collapsible-header waves-effect waves-light black-text grey-text text-darken-4">
                                    <span class="icon-nav-menu">
                                        <i class="bi bi-house-door-fill cyan-text text-darken-2 left"></i>
                                        <span>Menu</span>
                                    </span>
                                    <i class="material-icons right bi bi-chevron-right nav-chev"></i>
                                </div>

                                <!-- <div class="collapsible-body menu cyan darken-2">
                                    <ul>
                                        <li>
                                            <a class="white-text" href="home/index.html">
                                                <i class="bi bi-house-door-fill left white-text"></i>
                                                Home
                                            </a>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <a class="white-text" href="code/index.html">
                                                <i class="bi bi-file-earmark-code-fill left white-text">library_books</i>
                                                My Code
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>
                        </ul>
                        <div class="divider div-collapse"></div>
                        <li><a class="subheader">Navigation</a></li>
                        <li><a class="waves-effect mobile" href="<?= $base ?>#about"><i class="bi bi-info-circle-fill left"></i>Tentang</a></li>
                        <li><a class="waves-effect mobile" href="<?= $base ?>#visi"><i class="bi bi-person-bounding-box left"></i>Visi Misi</a></li>
                        <!-- <li><a class="waves-effect mobile" href="<? //= base_url() 
                                                                        ?>#skills"><i class="bi bi-pie-chart-fill left"></i>Skills</a></li> -->
                        <!-- <li><a class="waves-effect mobile" href="<? //= base_url() 
                                                                        ?>#education"><i class="bi bi-graph-up left"></i>Educational</a></li> -->
                        <li><a class="waves-effect mobile" href="<?= $base ?>#services"><i class="bi bi-grid-fill left"></i>Layanan</a></li>
                        <li><a class="waves-effect mobile" href="<?= base_url() ?>#faq"><i class="bi bi-question-circle-fill left"></i>Sering Ditanyakan</a></li>
                        <li><a class="waves-effect mobile" href="<?= $base ?>/contact"><i class="bi bi-chat-dots-fill left"></i>Contact Us</a></li>
                        <li><a class="waves-effect mobile" href="<?= base_url() ?>/portfolio"><i class="bi bi-images left"></i>Portfolio</a></li>
                        <li><a class="waves-effect mobile" href="<?= base_url() ?>/sejarah"><i class="bi bi-clock-history left"></i>Sejarah</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>