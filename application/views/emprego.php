<?php $this->load->view('header'); ?>

<main>
    <div class="conteiner">
        <div class="principal">

            <header class="header_n">
                <h1><?php echo $titulo ?></h1>
            </header>

            <article class="noticia">
                <center>
                    <figure style="width: 700px">
                        <img src="<?php echo base_url('assets/imagens/sine.jpg'); ?>" sizes="(max-width: 700px) 100vw, 700px" />
                    </figure>
                </center>

                <ol>
                    <li>
                        <p><strong>AUXILIAR ADMINISTRATIVO</strong></p>
                        Ensino médio completo. Informática intermediária. CNH AB É necessário possuir na
                        área
                        administrativa. Horário: Segunda a sexta 08:00 às 18:00. Sábado 08:00 às 12:00.
                        Salário R$
                        1500,00.

                        <p><strong>Ramo de Atividade: Alimentício.</strong></p>
                    </li>
                </ol><br><br>


                <ol>
                    <li>
                        <p><strong>CONTROLADOR DE PRAGA</strong></p>
                        Ensino médio incompleto. Não é necessário possuir experiência. Ter
                        disponibilidade de horários.
                        CNH
                        AB. Disponibilidade para realizar viagens pela região de Patos de Minas.
                        Horário: Segunda a
                        sexta
                        07:30 às 18:00. Sábado 08:00 às 12:00 Salário: R$1302,36 (iniciais) + vale
                        alimentação (R$
                        350,00).

                        <p><strong>Ramo de Atividade: Controladora de Pragas.</strong></p>

                    </li>
                </ol><br><br>


                <ol>
                    <li>
                        <p><strong>VENDEDOR (A) INTERNO</strong></p>
                        Ensino médio completo. É necessário possuir experiência com vendas.
                        Horário: Segunda a sexta
                        08:00
                        às 18:00. Sábado 08:00 às 12:00 Salário: R$1500,00 + comissão (a
                        combinar) vale transporte.

                        <p><strong>Ramo de Atividade: Comércio.</strong></p>
                    </li>
                </ol><br><br>


                <ol>
                    <li>
                        <p><strong>PROMOTOR DE VENDAS</strong></p>
                        Ensino fundamental completo. Informática básica. É necessário
                        possuir experiência. Horário:
                        Segunda
                        a sexta 13:00 às 20:00. Sábado 08:00 às 12:00. Salário: R$1100,00+
                        comissão (a combinar) e vale
                        transporte.

                        <p><strong>Ramo de Atividade: Alimentício.</strong></p>
                    </li>
                </ol><br><br>


                <ol>
                    <li>
                        <p><strong>CAIXA</strong></p>
                        Ensino médio completo. Informática básica. Não é necessário
                        possuir experiência. Horário:
                        Segunda a
                        sexta 09:00 às 18:00. Sábado 09:00 às 13:00 ou 10:00 às 14:00.
                        Escala de revezamento. Salário:
                        R$1100,00 (iniciais) e vale transporte.

                        <p><strong>Ramo de Atividade: Comércio.</strong></p>
                    </li>
                </ol><br><br>


                <ol>
                    <li>
                        <p><strong>VENDEDOR EXTERNO (A)</strong></p>
                        Ensino médio completo. Informática básica. CNH A. Não é
                        necessário experiência com vendas de
                        produtos de beleza Horário: Segunda a sexta 08:45 às 18:15.
                        Sábado 09:00 às 13:00. Salário: R$
                        1400,00 + bonificação por meta batida + ajuda de custo
                        (gasolina) e premiação conforme
                        resultado.

                        <p><strong>Ramo de Atividade: Cosméticos.</strong></p>
                    </li>

                </ol><br><br>


                <ol>
                    <li>
                        <p><strong>ADMINISTRATIVO</strong></p>
                        Ensino superior completo em Administração e Ciências
                        Contábeis. Informática intermediária. É
                        necessário possuir na área contábil e financeira.
                        Horário: Segunda a sexta 07:30 às 17:30.
                        Sábado
                        07:30às 11:30. Salário R$ 2000,00 e assistência médica.

                        <p><strong>Ramo de Atividade: Madeireira.</strong></p>
                    </li>
                </ol><br><br>


                <ol>
                    <li>
                        <p><strong>ANALISTA DE REDES SOCIAIS</strong></p>
                        Ensino médio completo Informática intermediária. É
                        necessário possuir Habilidade em redes
                        sociais.
                        Horário: Segunda a sexta 08:00 às 18:00. Salário R$
                        1300,00.

                        <p><strong>Ramo de Atividade: Instituto de
                                Ensino.</strong></p>
                    </li>
                </ol><br><br>

            </article>
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

<footer>
    <div class="superior">
        <div class="conteiner">
            <img src="<?php echo base_url('assets/imagens/logoprincipal.png'); ?>" alt="">
            <ul>
                <li><a href="">PARCEIROS</a></li>
                <li><a href="">FALE CONOSCO</a></li>
                <li><a href="">ANUNCIE</a></li>
            </ul>
        </div>
    </div>
    <?php $this->load->view('footer'); ?>

</body>

</html>