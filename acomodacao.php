<?php include 'components/header.php' ?>

<div class="session" style="background-image: linear-gradient(0deg, rgba(0, 59, 15, 0.8), rgba(0, 59, 15, 0.8)),url('img/interna.jpg');">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="font-40 color-light text-uppercase">Single/Duplo</h2>
                <p class="font-16 color-light mb-0">Inicial » Acomodações</p>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="font-35 color-primary mb-3">Nossa Pousada no Pantanal</h2>
                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <div class="row row-cols-1 row-cols-2 row-cols-md-4 my-4">
                    <div class="col text-center">
                        <p class="font-16"><img src="img/cama.svg" alt="" class="img-fluid me-2">2 Camas</p>
                    </div>
                    <div class="col text-center">
                        <p class="font-16"><img src="img/banheiro.svg" alt="" class="img-fluid me-2">1 Banheiro</p>
                    </div>
                    <div class="col text-center">
                        <p class="font-16"><img src="img/wifi.svg" alt="" class="img-fluid me-2">Wi-Fi</p>
                    </div>
                    <div class="col text-center">
                        <p class="font-16"><img src="img/wifi.svg" alt="" class="img-fluid me-2">Wi-Fi</p>
                    </div>
                    <div class="col text-center">
                        <p class="font-16"><img src="img/cama.svg" alt="" class="img-fluid me-2">2 Camas</p>
                    </div>
                    <div class="col text-center">
                        <p class="font-16"><img src="img/banheiro.svg" alt="" class="img-fluid me-2">1 Banheiro</p>
                    </div>
                    <div class="col text-center">
                        <p class="font-16"><img src="img/wifi.svg" alt="" class="img-fluid me-2">Wi-Fi</p>
                    </div>
                    <div class="col text-center">
                        <p class="font-16"><img src="img/wifi.svg" alt="" class="img-fluid me-2">Wi-Fi</p>
                    </div>
                </div>

                <div class="owl-carousel owl-destaques owl-theme">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <img src="img/quarto-pousada.jpg" alt="" class="img-fluid rounded">
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <h2 class="font-35 color-primary mb-3">Nossa Estrutura</h2>
                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <div class="row row-cols-2 row-cols-md-3 g-3 justify-content-center">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="col">
                        <img src="img/estrutura.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>