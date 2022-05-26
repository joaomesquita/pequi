<?php include 'components/header.php' ?>

<div class="session" style="background-image: linear-gradient(0deg, rgba(0, 59, 15, 0.8), rgba(0, 59, 15, 0.8)),url('img/interna.jpg');">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="font-40 color-light text-uppercase">Acomodações</h2>
                <p class="font-16 color-light mb-0">Inicial » Acomodações</p>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-8">
                <h2 class="font-35 color-primary mb-3">Nossa Pousada no Pantanal</h2>
                <p class="font-16">Possui acomodação distribuída em 10 apartamentos sendo 5 triplos, 2 quádruplos, 2 duplos e 1 quíntuplo com ar condicionado, ventilador de teto, frigobar, televisão área de lazer com piscina, sala de estar com tv, salão para refeições e redário.</p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-single-tab" data-bs-toggle="pill" data-bs-target="#pills-single" type="button" role="tab" aria-controls="pills-single" aria-selected="true">Single/Duplo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-triplo-tab" data-bs-toggle="pill" data-bs-target="#pills-triplo" type="button" role="tab" aria-controls="pills-triplo" aria-selected="false">Triplo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-quadruplo-tab" data-bs-toggle="pill" data-bs-target="#pills-quadruplo" type="button" role="tab" aria-controls="pills-quadruplo" aria-selected="false">Quadruplo</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-quintuplo-tab" data-bs-toggle="pill" data-bs-target="#pills-quintuplo" type="button" role="tab" aria-controls="pills-quintuplo" aria-selected="false">Quintuplo</button>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-single" role="tabpanel" aria-labelledby="pills-single-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="acomodacao.php">
                                    <img src="img/acomodacoes.jpg" alt="" class="img-fluid rounded w-100 mb-4 mb-lg-0">
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <a href="acomodacao.php">
                                    <img src="img/acomodacoes.jpg" alt="" class="img-fluid rounded w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-triplo" role="tabpanel" aria-labelledby="pills-triplo-tab">...</div>
                    <div class="tab-pane fade" id="pills-quadruplo" role="tabpanel" aria-labelledby="pills-quadruplo-tab">...</div>
                    <div class="tab-pane fade" id="pills-quintuplo" role="tabpanel" aria-labelledby="pills-quintuplo-tab">...</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>