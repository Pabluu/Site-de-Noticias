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
                        <img src="<?php echo base_url('assets/imagens/sine.jpg') ; ?>" sizes="(max-width: 700px) 100vw, 700px" />
                    </figure>
                </center>

                <p>Proin bibendum elit venenatis, cursus lacus vel, tempor leo. Maecenas tempus ornare nunc sit amet
                    maximus. Suspendisse enim diam, tincidunt nec massa ac, sodales eleifend metus. Fusce varius dictum
                    ex. Duis dictum, elit feugiat volutpat auctor, justo arcu eleifend sapien, quis dictum justo risus
                    sit amet ex. Sed ac blandit velit. Morbi aliquet laoreet lobortis. Pellentesque non tristique augue.</p>

                <p>Cras vehicula justo in sem volutpat commodo. Curabitur a sem a metus viverra interdum in non justo.
                    Morbi condimentum viverra mi nec suscipit. Integer aliquet dui neque, eu aliquet nunc aliquet in.
                    Pellentesque tristique vitae elit sit amet consequat. Nam posuere convallis ultricies. Duis id
                    commodo arcu, sit amet molestie odio. Praesent vitae consequat dui, eget imperdiet urna. Nullam
                    luctus tincidunt ultricies. Phasellus feugiat nisl dapibus, tincidunt risus non, feugiat lacus.
                    Praesent aliquet felis lectus, dapibus auctor enim aliquet non. Sed lectus lorem, porta ac enim ut,
                    iaculis tristique tellus. Integer at augue dictum, volutpat justo vitae, rhoncus velit. In ultrices
                    feugiat lacus quis tristique. Curabitur iaculis sodales vestibulum.</p>

                <p>Maecenas fringilla sed sapien et condimentum. Nullam interdum eu libero quis dictum. In ut congue
                    neque, a placerat risus. Proin urna elit, cursus quis maximus vitae, eleifend a neque. Integer
                    consequat ac turpis quis rhoncus. Mauris sodales ipsum ut quam interdum pharetra. Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit. Donec tincidunt ut sem efficitur fringilla. Cras consequat
                    aliquam lorem, a varius ipsum dictum nec. Praesent sed fermentum nulla. Sed rhoncus, ipsum quis
                    tincidunt varius, elit risus consequat dolor, eget vulputate nisi turpis in odio. Aliquam erat
                    volutpat. Nulla ornare sapien lectus, lobortis commodo felis maximus nec. In vel tellus non augue
                    semper facilisis et sit amet velit. Nullam eu nisl lobortis, sodales arcu sed, finibus turpis.</p>

                <p>Donec gravida et nisi vitae iaculis. Nunc luctus sed massa euismod blandit. Nunc ultrices felis
                    lacinia lobortis mollis. Vestibulum viverra lacinia mattis. Donec condimentum iaculis ante quis
                    finibus. Quisque placerat tellus nibh, a volutpat nisi pretium id. Curabitur orci orci, accumsan
                    accumsan quam eget, tincidunt varius ipsum. Nam eget pellentesque justo. Curabitur at imperdiet
                    justo, sit amet aliquet purus. Curabitur ultrices diam est, sagittis scelerisque turpis tempus eu.
                    Suspendisse potenti. Vestibulum ut est sit amet mauris lacinia porta. Ut erat mi, imperdiet nec
                    suscipit in, consequat a quam. Etiam id vestibulum ligula. Morbi vitae ante sit amet sapien
                    sollicitudin laoreet. Integer mattis odio at metus volutpat porta.</p>

                <p>In vel vehicula felis. Quisque urna mauris, ornare eu enim ut, sollicitudin faucibus sapien. Donec
                    quis diam sit amet augue sollicitudin tempus. Vestibulum ante ipsum primis in faucibus orci luctus
                    et ultrices posuere cubilia curae; Maecenas ut risus ac dui rhoncus ullamcorper. Nulla viverra massa
                    et malesuada viverra. Maecenas finibus dapibus massa quis volutpat. Cras nulla diam, cursus ac
                    vulputate nec, hendrerit a ex. Sed commodo ipsum at lacus feugiat auctor. Nulla facilisi. Donec
                    dapibus ipsum nec mi tincidunt rutrum.</p>

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

<?php $this->load->view('footer'); ?>

</body>

</html>