<?php $this->load->view('header'); ?>

<main>
    <div class="conteiner">
        <div class="principal">

            <section class="manchete">
                <center>
                    <a href="<?php echo base_url('noticia'); ?>">
                        <h1>Município de Patrocínio pagará R$ 500 mil por não tomar medidas contra trabalho infantil na cidade
                        </h1>
                    </a>
                </center>
            </section>

            <section class="destaque">
                <div class="conteiner_img">
                    <a href="<?php echo base_url('noticia'); ?>">
                        <div class="img_destaque"></div>
                    </a>
                </div></br><br>
            </section>
        </div>

        <aside class="lateral">
            <div class="mais_buscados">
                <h4>MAIS BUSCADOS</h4>
                <a href="<?php echo base_url('noticia'); ?>"><span>1</span>Município de Patrocínio pagará R$ 500 mil por não tomar medidas...</a><br />
                <a href="<?php echo base_url('covid'); ?>"><span>2</span>Nesta quarta-feira, 13/10, Patrocínio terá jornada dupla...</a><br />
                <a href="<?php echo base_url('prefeitura'); ?>"><span>3</span>Notícias sobre a cidade de Patrocínio/MG</a><br />
                <a href="<?php echo base_url('sobre'); ?>"><span>4</span>Vagas de Empregos Disponível em Patrocínio/MG</a><br />
            </div>
        </aside>
</main>


<?php $this->load->view('footer'); ?>

</body>

</html>