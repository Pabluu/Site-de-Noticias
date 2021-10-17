<?php $this->load->view('header'); ?>

<main>
    <div class="conteiner">
        <div class="principal">

            <header class="header_n">
                <h1><?php echo $titulo ?></h1>
                <span>12 de Outubro de 2021 às 10:37</span>
            </header>

            <article class="noticia">
                <!-- <center> -->
                <figure>
                    <img src="<?php echo base_url('assets/imagens/covid.jpg'); ?>" style="width:100%" />
                </figure>
                <!-- </center> -->


                <p>A Prefeitura Municipal de Patrocínio divulgou na manhã de segunda-feira, dia 11
                    de outubro, a jornada dupla de vacinação, para a 2° dose da vacina Coronavac e Oxford para
                    pessoas que ainda não receberam o reforço.</p>

                <p>A aplicação da Coronavac será nesta quarta-feira, 13/10 dividida em dois turnos na
                    Policlínica.
                    Não será no sistema de drive-thru.</p>

                <p>Para as mulheres será das 08h00min até 10h30min. Para os homens será das 13h00 até as
                    16h00min.
                </p>

                <p>As pessoas que foram imunizadas com a 1° dose devem apresentar o cartão com vacina da
                    primeira
                    dose.</p><br><br>

                <h2>2º Dose Oxford</h2>

                <p>A aplicação será 13/10, quarta-feira divida em dois turnos no Espaço Cultural através do
                    sistema de drive-thru para aqueles que ainda não vacinaram a 2° dose até essa data.</p>

                <p>Para as mulheres será das 07h00min até 10h30min. Para os homens será das 11h30 até as
                    15h00min.</p>

                <p>As pessoas que foram imunizadas com a 1° dose devem apresentar o cartão com vacina da
                    primeira dose.</p>

                <p>Só serão vacinados com a segunda dose as pessoas que estavam marcadas até 13/10.</p><br><br>


                <figure style="width: 700px">
                    <img src="<?php echo base_url('assets/imagens/covid2.png'); ?>" style="max-width: 100%" />
                </figure>

            </article>

        </div>

        <aside class="lateral">
            <div class="mais_buscados">
                <h4>MAIS BUSCADOS</h4>
                <a href="noticia.html"><span>1</span>Município de Patrocínio pagará R$ 500 mil por não tomar medidas...</a><br />
                <a href="covid.html"><span>2</span>Nesta quarta-feira, 13/10, Patrocínio terá jornada dupla...</a><br />
                <a href="prefeitura.html"><span>3</span>Notícias sobre a cidade de Patrocínio/MG</a><br />
                <a href="emprego.html"><span>4</span>Vagas de Empregos Disponível em Patrocínio/MG</a><br />
            </div>
        </aside>

</main>

<?php $this->load->view('footer'); ?>

</body>

</html>