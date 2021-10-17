<?php $this->load->view('header'); ?>

<main>
    <div class="conteiner">
        <div class="principal">

            <header class="header_n">
                <h1><?php echo $titulo ?></h1>
            </header>


            <table>
                <tr>
                    <th class="tb_titulo">Título</th>
                    <th class="tb_data">Data</th>
                    <th class="tb_acesso">Acesso</th>
                </tr>

                <tr>
                    <td class="dados"><a href="#">Nota de Esclarecimento</a></td>
                    <td>11/10/2021</td>
                    <td>21</td>
                </tr>

                <tr>
                    <td class="dados">
                        <a href="#">Secretaria Municipal de Educação de Patrocínio/MG divulga Edital para inscrições
                            e matrículas do 1º e 6º anos do ensino fundamental da rede municipal</a>
                    </td>

                    <td>11/10/2021</td>
                    <td>16</td>
                </tr>


                <tr>
                    <td class="dados">
                        <a href="#">Prefeito Deiró Marra recebe convite para lançamento da pedra
                            fundamental do Hospital de Amor</a>
                    </td>

                    <td>08/10/2021</td>
                    <td>22</td>
                </tr>


                <tr>
                    <td class="dados">
                        <a href="#">Secretário Municipal de Saúde realiza visita a UBS de São João da Serra Negra
                            recebe doação de Autoclave do Sicoob Coopacredi</a>
                    </td>

                    <td>08/10/2021</td>
                    <td>36</td>
                </tr>

            </table>

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