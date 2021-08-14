<!--Tittle-->
<title>Sobre a Empresa</title>

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
                    <li class="breadcrumb-item active">Empresa</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!--Empresa-->
<div class="text-center">
    <div class="container my-2 px-5 pt-2 pb-1">
        <h6 class="font-weight-normal text-uppercase font-small grey-text mb-4">Quem Somos</h6>
        <h2 class="font-weight-bold mb-3 dark-grey-text">XXXXX Xxxxxx</h2>
        <p class="lead grey-text mx-auto mb-5">Conheça um pouco sobre nossa Empresa</p>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <ul class="nav md-pills nav-justified pills-rounded pills-primary">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#empresa" role="tab">Nossa Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#missao" role="tab">Missão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#valores" role="tab">Valores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#visao" role="tab">Visão</a>
                        </li>
                    </ul>
                    <div class="row mt-3">
                        <div class="tab-content">
                            <!-- Sobre a Empresa-->
                            <div class="tab-pane fade in show active" id="empresa" role="tabpanel">
                                <div class="col-sm-6 col-md-4 col-lg-8">
                                    <p class="text-justify">
                                        A XXXXXXXX está á alguns anos na área tecnológica trazendo um novo conceito tanto em navegação casual quanto profissional,
                                        contamos com uma equipe técnica altamente qualificada estando preparada para quaisquer situações.<br />
                                        Estamos localizados em grande parte no Grajaú (Zona Sul de São Paulo), tendo cobertura por quase toda a região.<br />
                                        Entre em <a href="contato.php">Contato</a>
                                        conosco via e-mail ou telefone para saber se nossos planos estão disponiveis para sua residência.<br />
                                        Prestamos suporte técnico todos os dias na semana em horário comercial, visando sempre solucionar problemas recorrentes, caso houver.
                                    </p>
                                </div>
                            </div>
                            <!--Missão-->
                            <div class="tab-pane fade" id="missao" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-4">
                                            <i class="bi bi-exclude text-center mt-1 pt-2" style="font-size: 35px; color: #4980ad"></i>
                                            <div class="mb-4">
                                                <p class="text-justify mt-4" style="font-family: verdana;">
                                                    Nossa pretensão é promover internet com a maior qualidade possível para satisfazer nossos clientes com todo suporte técnico necessário de alto nível.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <img src="_img/telem.jpg" alt="missao" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!--Valores-->
                            <div class="tab-pane fade" id="valores" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-4">
                                            <i class="bi bi-hourglass-split text-center  mt-1 pt-2" style="font-size: 35px; color: #4980ad"></i>
                                            <div class="mb-4">
                                                <p class="text-justify mt-4" style="font-family: verdana;">
                                                    • Agir com ética frente aos clientes e colaboradores.<br />
                                                    • Tornar a qualidade de navegação a melhor possível.<br />
                                                    • Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe.<br />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <img src="_img/tel.jpg" alt="valores" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!--Visão-->
                            <div class="tab-pane fade" id="visao" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-4">
                                            <i class="bi bi-tropical-storm text-center  mt-1 pt-2" style="font-size: 35px; color: #4980ad"></i>
                                            <div class="mb-4">
                                                <p class="text-justify mt-4" style="font-family: verdana;">
                                                    Se tornar referência no cenário tecnológico estadual, com excelência em todos nossos serviços prestados.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <img src="_img/tele.jpg" alt="visao" class="img-fluid">
                                    </div>
                                </div>
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