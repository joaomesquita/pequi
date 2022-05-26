<?php include 'components/header.php' ?>

<div class="session" style="background-image: linear-gradient(0deg, rgba(0, 59, 15, 0.8), rgba(0, 59, 15, 0.8)),url('img/interna.jpg');">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="font-40 color-light text-uppercase">Contato</h2>
                <p class="font-16 color-light mb-0">Inicial » Contato</p>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="font-35 color-primary fw-bold">Aguardamos você!</h2>
                <p class="font-16 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                <h3 class="font-20 text-semibold mb-4">Deseja saber mais<br>sobre a pousada?</h3>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="img/email.svg" class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="font-15 mb-0">pousadapequi@yahoo.com.br</p>
                    </div>
                </div>
                <div class="d-flex align-items-center my-4">
                    <div class="flex-shrink-0">
                        <img src="img/endereco.svg" class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="font-15 mb-0">Estrada MS 171 40 km, área rural,<br>Campo Grande/MS</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="img/telefone.svg" class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="font-15 mb-0">+55 (67) 99934-5781</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="font-20 text-semibold mb-4">Tem alguma dúvida, crítica ou sugestão?<br>Estamos à disposição!</h3>
                <form action="">
                    <div class="mb-3">
                        <label for="input" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="input">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="input" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="input">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="input" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="input">
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="textarea" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="textarea" rows="3"></textarea>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="checkbox" id="check">
                        <label class="form-check-label font-14" for="check">Li e estou de acordo com a <a href="#" class="color-primary">Política de Privacidade</a></label>
                    </div>
                    <div>
                        <button class="btn bg-secondary color-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="session border-top pb-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="font-35 color-primary">Localização</h2>
            </div>
        </div>
    </div>
</div>
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>
<div class="session pt-4">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <p class="font-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                <a href="#" class="btn btn-outline-primary">Ver rota</a>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>