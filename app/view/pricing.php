<?= $this->loadView('comuns/cabecalho') ?>

<section id="pricing" class="container">
    <div class="pricing-header">
        <h1>Nossos<br>Preços</h1>
        <lottie-player src="<?=SITEURL?>assets/img/wallet-animation.json" background="transparent" style="width:200px; height:200px" speed="1" loop autoplay></lottie-player>
    </div>

    <div class="pricing-content">
        <h2>Escolha a melhor opção para você!</h2>
        <div class="card pricing-card" style="width: 21rem;">
            <lottie-player class="cord-img-top" src="<?=SITEURL?>assets/img/star-animation.json" background="transparent" speed="1" loop autoplay></lottie-player>
            <div class="card-body">
                <h5 class="card-title text-center"> Pacote Estrela </h5>

                <p class="card-text">
                    ✔️ Adicionar e Gerenciar Links. <br>
                    ✔️ Compartilhar Link e QR Code. <br>
                    ✔️ Sem limite de Clicks. <br>
                    ❌ Acesso a todas as métricas do link. <br>
                    ❌ +1.000 Estilos de botões e Backgrounds.
                </p>

                <a href="#" class="btn obter-button"><span class="badge rounded-pill bg-danger">- Free - </span><br>Obter</a>
            </div>
        </div>
        <div class="card pricing-card" style="width: 21rem;">
            <lottie-player class="cord-img-top" src="<?=SITEURL?>assets/img/rocket-animation.json" background="transparent" speed="1" loop autoplay></lottie-player>

            <div class="card-body">
                <h5 class="card-title text-center">Pacote Rocket</h5>
                <p class="card-text">
                    ✔️ Adicionar e Gerenciar Links. <br>
                    ✔️ Compartilhar Link e QR Code. <br>
                    ✔️ Sem limite de Clicks. <br>
                    ✔️ Acesso a todas as métricas do link. <br>
                    ✔️ +1.000 Estilos de botões e Backgrounds.
                </p>
                <a href="#" class="btn obter-button"><span class="badge rounded-pill bg-danger">- Pro - </span><br>Obter</a>
            </div>
        </div>
    </div>
</section>

<?= $this->loadView('comuns/rodape') ?>