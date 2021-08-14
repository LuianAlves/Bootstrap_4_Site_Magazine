<!--Tittle-->
<title>Página de Dúvidas</title>

<!--Header-->
<?php include('_inc/header.php'); ?>
<!--Navbar-->
<?php include('_inc/nav.php'); ?>

<!--Idenficador de Página-->
<div class="container mt-0">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dúvidas</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!--Dúvidas-->
<div>
    <div class="container my-3">
        <h6 class="font-small grey-text mb-4 text-center">FAQ</h6>
        <p class="lead text-muted mx-auto mt-4 pt-2 mb-5 text-center" style="font-size: 17px;  font-weight: 500;">
            Está com alguma dúvida? Disponibilizamos algumas perguntas frequentes ja respondidas. <br />Nos mande
            <a href="contato.php">uma mensagem</a> caso ainda tenha dúvidas.
        </p>
        <div class="row">
            <div class="col-md-12 col-lg-10 mx-auto mb-5">
                <div class="accordion md-accordion" id="DuvidasEx" role="tablist" aria-multiselectable="true">
                   <!--Segunda Via-->
                   <div class="card border-top border-bottom-0 border-left border-right border-light">
                        <div class="card-header border-bottom border-light" role="tab" id="2Via">
                            <a data-toggle="collapse" data-parent="#DuvidasEx" href="#SegundaVia" aria-expanded="true"
                            aria-controls="SegundaVia">
                                <h6 class="black-text font-weight-normal mb-0">
                                    Como retirar Segunda Via do Boleto/Carnê? <i class="bi bi-chevron-down" style="margin-left: 100%"></i>
                                </h6>
                            </a>
                        </div>
                        <div id="SegundaVia" class="collapse show" role="tabpanel" aria-labelledby="2Via"
                            data-parent="#DuvidasEx">
                            <div class="card-body">
                                Ao clicar em <a href="https://usuario.gerencianet.com.br/segunda-via"><i>2° via</i></a>,
                                desça a página e digite o código de barras (presente no boleto vencido) e seu CPF.<br />
                                Será redirecionado para a página do banco correspondente ao seu Boleto/Carnê,
                                caso seja preciso digite novamente seus dados.
                            </div>
                        </div>
                    </div> 
                    <!--Cadastro Online-->
                    <div class="card border-bottom-0 border-left border-right border-light">
                        <div class="card-header border-bottom border-light" role="tab" id="CadastroOnline">
                            <a class="collapsed" data-toggle="collapse" data-parent="#DuvidasEx" href="#Cadastro"
                               aria-expanded="false" aria-controls="Cadastro">
                                <h6 class="black-text font-weight-normal mb-0">
                                    Como se cadastrar online? <i class="bi bi-chevron-down" style="margin-left: 100%;"></i>
                                </h6>
                            </a>
                        </div>
                        <div id="Cadastro" class="collapse" role="tabpanel" aria-labelledby="CadastroOnline"
                             data-parent="#DuvidasEx">
                            <div class="card-body">
                                Sua Instalação consiste em duas etapas: Cadastro no sistema e a Instalação.
                                <br />
                                O Cadastro pode ser feito presencialmente no momento da instalação, mas
                                caso queira agilizar faça-o em
                                <a href="fichacadastro.php"><i>Cadastro</i></a>,
                                assim restará apenas agendar o dia de sua instalação.
                            </div>
                        </div>
                    </div>
                    <!--Fibra e Cabo-->
                    <div class="card border-bottom-0 border-left border-right border-light">
                        <div class="card-header border-bottom border-light" role="tab" id="DiferencaCabos">
                            <a class="collapsed" data-toggle="collapse" data-parent="#DuvidasEx" href="#FibraCabo"
                               aria-expanded="false" aria-controls="FibraCabo">
                                <h6 class="black-text font-weight-normal mb-0">
                                    Existe alguma diferença entre Fibra Ótica e Cabo UTP? <i class="bi bi-chevron-down" style="margin-left: 100%;"></i>
                                </h6>
                            </a>
                        </div>
                        <div id="FibraCabo" class="collapse" role="tabpanel" aria-labelledby="DiferencaCabos"
                             data-parent="#DuvidasEx">
                            <div class="card-body">
                                A Fibra Ótica é composta por uma série de tubos feitos de vidro que transportam dados através da luz, resultando
                                em uma velocidade muito maior do que os cabos convencionais (UTP) feitos de cobre. <br />
                                Quando se trata de velocidades acima de 30 Megas utilizando cabos de cobre a conexão passa a sofrer bastante oscilação e perdas, sendo aí o destaque da Fibra Ótica,
                                que suporta velocidades altíssimas sem que haja oscilações que comprometam sua velocidade.

                            </div>
                        </div>
                    </div>
                    <!--Download e Upload-->
                    <div class="card border-left border-right border-light">
                        <div class="card-header border-bottom border-light" role="tab" id="DiferencaVelocidade">
                            <a class="collapsed" data-toggle="collapse" data-parent="#DuvidasEx" href="#DownloadUpload"
                               aria-expanded="false" aria-controls="DownloadUpload">
                                <h6 class="black-text font-weight-normal mb-0 ">
                                    Qual a diferença entre Velocidade de Download e Upload? <i class="bi bi-chevron-down" style="margin-left: 100%;"></i>
                                </h6>
                            </a>
                        </div>
                        <div id="DownloadUpload" class="collapse" role="tabpanel" aria-labelledby="DiferencaVelocidade"
                             data-parent="#DuvidasEx">
                            <div class="card-body">
                                Digamos que ambos sejam importantes e influenciam em sua navegação,
                                pois trabalham em conjunto.<br />
                                Quando, por exemplo, você manda  mensagem para um amigo no WhatsApp
                                acaba-se utilizando a velocidade de 'Upload', e no momento em que recebe uma mensagem
                                você faz 'Download' para visualiza-la.
                                <br />Geralmente só é utilizado cerca de  8-12% de velocidade de Upload,
                                portanto caso você tenha 50MBs
                                de internet, seu download baixará numa média de 5-7Mb/s, claro que também
                                dependerá de seu equipamento e o serviço contratado.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include('_inc/footer.php'); ?>