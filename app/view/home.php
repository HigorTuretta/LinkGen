<?= $this->loadView('comuns/cabecalho') ?>

<section class="banner">
    <div class="banner-area">
        <div class="banner-text">
            <p>Todos os Seus Links</p>
            <h1> Em um só lugar!</h1>
        </div>
        <div class="player">
            <lottie-player src="<?=SITEURL?>assets/img/app-animation.json" background="transparent" style="width:500px; height:500px" speed="1" loop autoplay></lottie-player>

        </div>
    </div>
</section>
<section class="container">
    <div class="about-cards">

        <div>
            <div class="card cards-grid">
                <img src="<?= SITEURL ?>assets/img/positive-vote.png" class="card-img-top" alt="Fácil de Usar">
                <div class="card-body">
                    <p class="card-text text-center">Extremamente simples de utilizar!</p>
                </div>
            </div>
        </div>
        <div>
            <div class="card cards-grid">
                <img src="<?= SITEURL ?>assets/img/chronometer.png" class="card-img-top" alt="Poupe Tempo">
                <div class="card-body">
                    <p class="card-text text-center">Poupe muito tempo dos seus clientes!</p>
                </div>
            </div>
        </div>
        <div>
            <div class="card cards-grid">
                <img src="<?= SITEURL ?>assets/img/responsive-website.png" class="card-img-top" alt="Totalmente Responsivo">
                <div class="card-body">
                    <p class="card-text text-center">Totalmente Responsivo!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-banner">
        <div class="about-banner-text">
            <h1>
                Link de todos os lugares em apenas um lugar.
            </h1>
            <p>
                Com o LinkGen você expoe todos os seus links de negócios e redes sociais em apenas um lugar! Facilitando sua vida, e a vida de seus clientes.
            </p>
        </div>
        <div class="about-banner-video">
            <video src="<?= SITEURL ?>assets/videos/linktree-for-tiktok-hero-2.mp4" autoplay loop></video>
        </div>
    </div>

    <div class="about-banner">
        <div class="about-banner-video">
            <video src="<?= SITEURL ?>assets/videos/linkemtodolugar.mp4" autoplay loop></video>
        </div>
        <div class="about-banner-text">
            <h1>
                Use onde quiser
            </h1>
            <p>
                ‎Leve seu LinkGen onde quer que seu público esteja, para ajudá-los a descobrir todo o seu conteúdo importante.‎
            </p>
        </div>

    </div>

    <div class="do-it">
        <button>Faça o seu agora</button>
    </div>
</section>

<?= $this->loadView('comuns/rodape') ?>