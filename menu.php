<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Online Psiholog</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Početna</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="onama.php">O nama</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="blogovi.php">Blog</a>
                    </li>
                    <?php if(!empty($_SESSION['ulogovaniKorisnik'])){ ?>
                      <li>
                          <a class="page-scroll" href="spisak.php">Psiholozi</a>
                      </li>
                    <?php if(!empty($_SESSION['ulogovaniKorisnik']['admin'])){ ?>
                    <li>
                        <a class="page-scroll" href="admin.php">Admin</a>
                    </li>
                  <?php } ?>
                  <li>
                      <a class="page-scroll" href="logout.php">Logout</a>
                  </li>
                <?php }else{ ?>
                  <li>
                      <a class="page-scroll" href="register.php">Registracija</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="login.php">Login</a>
                  </li>
                  <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
