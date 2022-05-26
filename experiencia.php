<?php include 'components/header.php' ?>

<div class="session" style="background-image: linear-gradient(0deg, rgba(0, 59, 15, 0.8), rgba(0, 59, 15, 0.8)),url('img/interna.jpg');">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="font-40 color-light text-uppercase">Cavalgada ao Ar Livre</h2>
                <p class="font-16 color-light mb-0">Inicial » Experiências</p>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="font-35 color-primary mb-3">Detalhes da experiência</h2>
                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <div class="owl-carousel owl-destaques owl-theme my-5">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <img src="img/calvagada.jpg" alt="" class="img-fluid rounded">
                    <?php } ?>
                </div>

                <h2 class="font-30 color-primary mb-3">Subtítulo Experiência</h2>
                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>