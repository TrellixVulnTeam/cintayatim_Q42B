<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap dan JS -->
        <!-- <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
        -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?= base_url('style.css'); ?> ">
        <link rel="stylesheet" href="<?= base_url('custom.css'); ?> ">
        <link rel="stylesheet" href="<?= base_url('fontawesome/css/all.css'); ?>">
        <!-- End Bootstrap dan JS -->
        <title>Cinta Yatim</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg_cy">
                <div class="container">
                    <a class="navbar-brand fs-3 fw-bold" href="#">CINTA YATIM</a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php 
                        $uri = new \CodeIgniter\HTTP\URI(current_url(true));
                        // echo $uri->getSegment(2);
                    ?>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link <?= $uri->getSegment(2) == '' ? 'active' : ''; ?>" aria-current="page" href="<?= base_url('/') ?>"><i class="fas fa-home "></i>Beranda</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link <?= $uri->getSegment(2) == 'gallery' ? 'active' : ''; ?>"  href="<?= base_url('gallery')?>"><i class="fas fa-images"></i> Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $uri->getSegment(2) == 'donasi' ? 'active' : ''; ?>" href="<?= base_url('donasi'); ?>"><i class="fas fa-hand-holding-medical"></i> Donasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <?= $this->renderSection('content'); ?>
        <div class="top_button" onclick="keAtas()"><i class="fas fa-arrow-circle-up"></i></div>
        <footer>
            <div class="bg-primary text-center py-2 text-light">
                Copyright &copy <?php echo date('Y'); ?> by Cinta Yatim
            </div>
        </footer>

        <!-- Untuk scroll ke paling atas lah -->
        <script>
            const keAtas = () => {
                const up = window.scrollTo(0,0); // Ini agar scroll ke paling
                // const munjuk = document.getElementById(up);
                // up.scrollIntoView({
                //     behavior: "smooth"
                // });
            }

        </script>



        <!-- Java Script Bootstrap & Fontawesome -->
        <script src="<?= base_url('fontawesome/js/all.js'); ?>"></script>
        <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

        <!-- PARALAX EFFECT VANILLA TILT -->
        <script type="text/javascript" src="<?= base_url('node_modules/vanilla-tilt/dist/vanilla-tilt.js');?>"></script>
    </body>
</html>
    
       
