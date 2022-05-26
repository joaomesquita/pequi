<?php include 'components/header.php' ?>

<div class="session" style="background-image: linear-gradient(0deg, rgba(0, 59, 15, 0.8), rgba(0, 59, 15, 0.8)),url('img/interna.jpg');">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="font-40 color-light text-uppercase">Gastronomia</h2>
                <p class="font-16 color-light mb-0">Inicial » Gastronomia</p>
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
                
                <div class="owl-carousel owl-destaques owl-theme">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <img src="img/gastronomia.jpg" alt="" class="img-fluid rounded">
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <h2 class="font-35 color-primary mb-3">Funcionamento Restaurante</h2>
                <p class="font-16">No restaurante da pousada oferecemos café da manha, almoço, lanche da tarde e jantar.</p>
                
                <p class="font-18 text-semibold">Horários:</p>
                <p class="font-16">Café da manhã 07:00 as 09:00 horas</p>
                <p class="font-16">Almoço 12:00 as 13:00 horas</p>
                <p class="font-16">Jantar 20:00 as 21:00 horas</p>
                <p class="font-16">Lanche da tarde 15:00 horas</p>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>