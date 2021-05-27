<?= $this->loadView('comuns/cabecalho') ?>

<div class="contato-header">
    <h1 class="text-center">
        Entre em contato conosco!
    </h1>
</div>
<div class="contact-section">
    <div class="contato-content container">
        <div>
            <lottie-player class="contact-lottie" src="<?=SITEURL?>assets/img/contact-animation.json" background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div>
            <form action="#">
                <div class="row">
                    <div class="col">
                        <label for="nome">Seu Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Informe seu nome" aria-label="Nome">
                    </div>
                    <div class="col">
                        <label for="Email">Email:</label>
                        <input type="email" class="form-control" placeholder="Seu melhor Email" aria-label="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Descrição:</label>
                        <textarea class="form-control" name="email-description" id="email-description" cols="30" rows="5">
                    </textarea>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn-enviar">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->loadView('comuns/rodape') ?>