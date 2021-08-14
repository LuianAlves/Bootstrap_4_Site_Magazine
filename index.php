<!--Tittle-->
<title>Home Page</title>

<!--Header-->
<?php include('_inc/header.php'); ?>
<!--Navbar-->
<?php include('_inc/nav.php'); ?>

<!--Página HTML-->

<!--Idenficador de Página-->
<div class="container mt-0">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!--Primeira Section-->
<section class="SectionPrincipal dark-grey-text">
    <div class="container my-3">
        <div class="row">
            <!--Lado Esquerdo-->
            <div class="col-lg-6 col-md-6 justify-content-center">
                <div class="single-news mb-4">
                    <!--Imagem Grande-->
                    <div class="view overlay rounded z-depth-1 mb-4">
                        <img class="img-fluid" src="_img/t2.jpg" alt="sample image">
                        <a href="_Planos.php">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Texto abaixo da Imagem-->
                    <div class="news-data d-flex justify-content-between">
                        <a href="_Planos.php" class="light-blue-text">
                            <h6 class="font-weight-bold"><i class="bi bi-chevron-double-right mr-2"></i>Planos</h6>
                        </a>
                        <p class="font-weight-bold dark-grey-text">Contrate Já</p>
                    </div>
                    <h3 class="font-weight-bold dark-grey-text mb-3"><a>Serviços</a></h3>
                    <p class="dark-grey-text text-justify">
                        Estamos disponibilizando diversos planos de Internet para que possa
                        assistir seus filmes online sem travamentos, jogar sem se preocupar com oscilações no ping e
                        muito mais!!.<br />
                        Vizualize nossos planos.
                    </p>
                </div>
                <!--Planos Fibra-->
                <div class="single-news mb-4" data-toggle="modal" data-target="#modalFibra">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <div class="view overlay rounded z-depth-1 mb-4">
                                <img class="img-fluid" src="_img/gm1.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="font-weight-bold dark-grey-text">Fibra Ótica</p>
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a href="#!" class="dark-grey-text">Não há limites quando se trata de internet
                                        fibra ótica</a>
                                </div>
                                <a><i class="bi bi-chevron-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Planos Personalizados-->
                <div class="single-news mb-4" data-toggle="modal" data-target="#modalPersonalizado">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <div class="view overlay rounded z-depth-1 mb-4">
                                <img class="img-fluid " src="_img/pe.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="font-weight-bold dark-grey-text">Crie seu plano</p>
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a href="#!" class="dark-grey-text">Escolha o plano mais adequado a você...</a>
                                </div>
                                <a><i class="bi bi-chevron-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Teste de Velocidade-->
                <div class="single-news mb-4" data-toggle="modal" data-target="#modalSpeed">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <div class="view overlay rounded z-depth-1 mb-4">
                                <img class="img-fluid " src="_img/ec.png" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="font-weight-bold dark-grey-text">Velocidade</p>
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a href="#!" class="dark-grey-text">Faça o teste e veja sua velocidade de
                                        internet em</a>
                                </div>
                                <a><i class="bi bi-chevron-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Final Lado Esquerdo-->

            <!--Lado Direito-->
            <div class="col-lg-6 col-md-6 justify-content-center">
                <div class="single-news mb-4">
                    <!--Imagem Grande-->
                    <div class="view overlay rounded z-depth-1-half mb-4">
                        <img class="img-fluid" src="_img/b2.jpg" alt="Sample image">
                        <a href="_Duvidas.php">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Texto abaixo da Imagem-->
                    <div class="news-data d-flex justify-content-between">
                        <a href="_Duvidas.php" class="pink-text">
                            <h6 class="font-weight-bold"><i class="bi bi-house-door-fill pr-2"></i>Dúvidas?</h6>
                        </a>
                        <p class="font-weight-bold dark-grey-text"><i class="bi bi-clock-fill pr-2"></i>O que procura?
                        </p>
                    </div>
                    <h3 class="font-weight-bold dark-grey-text mb-3"><a>FAQ</a></h3>
                    <p class="dark-grey-text text-justify">
                        Ainda não sabe ao certo o que procura?
                        Veja nossa sessão com perguntas feitas diariamente, se mesmo assim ainda restar alguma
                        dúvida entre
                        em contato conosco via Email. <br />
                        Responderemos o mais breve possível.
                    </p>
                </div>
                <!--Segunda Via-->
                <div class="single-news mb-4" data-toggle="modal" data-target="#modalSegundaVia">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <div class="view overlay rounded z-depth-1 mb-4">
                                <img class="img-fluid " src="_img/2via.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="font-weight-bold dark-grey-text">Segunda Via <i>(Gerencianet)<i></p>
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a href="#!" class="dark-grey-text">Esqueceu de pagar no dia? Tire agora sua 2°
                                        via facilmente!</a>
                                </div>
                                <a><i class="bi bi-chevron-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Cadastro-->
                <div class="single-news mb-4" data-toggle="modal" data-target="#modalCadastre">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <div class="view overlay rounded z-depth-1 mb-4">
                                <img class="img-fluid " src="_img/cada.jpg" alt="Sample image">
                                <a href="_Cadastro.php">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="font-weight-bold dark-grey-text">Cadastre-se</p>
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a href="_Cadastro.php" class="dark-grey-text">Se adiante e realize seu
                                        cadastro online para facilitar sua instalação</a>
                                </div>
                                <a><i class="bi bi-chevron-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Upload/Download-->
                <div class="single-news mb-4" data-toggle="modal" data-target="#modalUpload">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <div class="view overlay rounded z-depth-1 mb-4">
                                <img class="img-fluid " src="_img/img12.png" alt="Sample image">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-8">
                            <p class="font-weight-bold dark-grey-text">Upload e Download</p>
                            <div class="d-flex justify-content-between">
                                <div class="col-11 text-truncate pl-0 mb-3">
                                    <a href="#!" class="dark-grey-text">Entenda finalmente a diferença entre
                                        Upload/Download</a>
                                </div>
                                <a><i class="bi bi-chevron-bar-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Final Lado Direito-->
        </div>
    </div>
</section>

<hr class="d-block w-50 my-2 mt-4 py-2" />

<!--Secunda Section-->
<!--Banner com Imagem-->
<section class="SectionSegundary dark-grey-text">
    <div class="container my-1 p-2">
        <h3 class="text-center font-weight-normal mb-4 pb-2">O que está esperando?</h3>
        <p class="text-center lead grey-text mx-auto mb-5">Não perca mais tempo!<br />
            Um novo conceito em internet para quem busca qualidade de navegação,
            Venha fazer parte!!
        </p>
        <div class="row">
            <div class="col-md-4 col-6">
                <!--Banner Navegação-->
                <div class="row mb-3">
                    <div class="col-2">
                        <i class="bi bi-cloud-check-fill text-info" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="font-weight-bold ml-3 mb-3">Navegação</h5>
                        <p class="grey-text text-justify">
                            Procurando boa qualidade? Pois achou o lugar certo!
                        </p>
                    </div>
                </div>
                <!--Banner Planos-->
                <div class="row mb-3">
                    <div class="col-2">
                        <i class="bi bi-newspaper text-info" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="font-weight-bold ml-3 mb-3"><a href="_Planos.php">Planos</a></h5>
                        <p class="grey-text text-justify">
                            Temos diversos planos que foram projetados para satisfazer quaisquer áreas!
                        </p>
                    </div>
                </div>
                <!--Banner Velocidade-->
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-lightning-charge-fill text-info" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="font-weight-bold ml-3 mb-3"><a href="_Test.php">Velocidade</a></h5>
                        <p class="grey-text mb-md-0 text-justify">
                            Cansado de atingir o limite de tráfego? Aqui sua velocidade permanece a mesma durante
                            todo o mês!
                        </p>
                    </div>
                </div>
            </div>
            <!--Final Banner Lado Esquerdo-->

            <!--Imagem Central-->
            <div class="col-md-4 d-none d-md-block text-center">
                <img class="img-fluid" src="_img/Iphone.jpg" alt="Sample image">
            </div>

            <!--Inicio Lado Esquerdo-->
            <div class="col-md-4 col-6">
                <!--Duvidas-->
                <div class="row mb-3">
                    <div class="col-2">
                        <i class="bi bi-chat-quote-fill text-info" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="font-weight-bold ml-3 mb-3"><a href="_Duvidas.php">Dúvidas</a></h5>
                        <p class="grey-text text-justify">
                            Acesse nossa página para sanar todas suas dúvidas.
                        </p>
                    </div>
                </div>
                <!--Chat-->
                <div class="row mb-3">
                    <div class="col-2">
                        <i class="bi bi-chat-square-text-fill text-info" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="font-weight-bold ml-3 mb-3">Contato</h5>
                        <p class="grey-text text-justify">
                            Caso não tenha encontrado nada que lhe ajude, entre em contato via email.
                        </p>
                    </div>
                </div>
                <!--Cadastro-->
                <div class="row">
                    <div class="col-2">
                        <i class="bi bi-pencil-square text-info" style="font-size: 2rem;"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="font-weight-bold ml-3 ml-3 mb-3"><a href="_Cadastro.php">Cadastro</a></h5>
                        <p class="grey-text mb-0 text-justify">
                            Agilize sua instalação se cadastrando online, assim restará apenas agendar o dia
                            para instação.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="d-block w-50 my-2 mt-4 py-2" />

<!--Terceira Section-->
<!--Diferença entre fibra e cabo-->
<section class="SectionThree white-text">
    <div class="container my-1 pb-2">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center dark-grey-text font-weight-normal mb-4 pb-2">Diferença entre nossos planos
                </h3>
                <div class="card z-depth-2">
                    <div class="card-body p-0">
                        <div class="row mx-0">
                            <div class="col-lg-6 col-md-6 col-6 rounded-left py-5 px-md-5" style="background-color: #d4ebfa">
                                <h4 class="font-weight-bold text-center text-white ml-3 mb-4 pb-2">Planos Fibra</h4>
                                <ul class="fa-ul text-white mb-0">
                                    <li class="mb-2 font-weight-bold"><i class="bi bi-check2-all mr-2" style="font-size: 25px;"></i>Velocidades acima de 100MBs</li>
                                    <li class="mb-2 font-weight-bold"><i class="bi bi-check2-all mr-2" style="font-size: 25px;"></i>Melhor
                                        estabilidade na Conexão</li>
                                    <li class="mb-2 font-weight-bold"><i class="bi bi-check2-all mr-2" style="font-size: 25px;"></i>Navegação sem Perdas</li>
                                    <li class="mb-2 font-weight-bold"><i class="bi bi-check2-all mr-2" style="font-size: 25px;"></i>Rapidez
                                        no Suporte Técnico</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6 white accent-3 rounded-right py-5 px-md-5">
                                <h4 class="font-weight-bold font-center text-black-50 ml-3 mb-4 pb-2">Planos Cabo</h4>
                                <ul class="fa-ul text-black-50 mb-0">
                                    <li class="mb-2 font-weight-bold"><i class="bi bi-x mr-2" style="font-size: 25px;"></i>Velocidade
                                        Máxima 30MBs</li>
                                    <li class="mb-2 font-weight-bold"><i class="bi bi-check2-all mr-2" style="font-size: 25px;"></i>Rapidez
                                        no Suporte Técnico</li>
                                    <li class="mb-2 font-weight-bold"><i class="bi bi-check2-all mr-2" style="font-size: 25px;"></i>Custo
                                        Benefício</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="d-block w-50 my-2 mt-4 py-2" />

<!--Quarta Section-->
<!--Teste de Velocidade-->
<section class="SectionFour">
    <div class="container my-1 pb-2">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center dark-grey-text font-weight-normal mb-4 pb-2">Teste sua Velocidade</h3>
                <iframe width="100%" height="650px" frameborder="0" src="https://jrnetcomunicacao.speedtestcustom.com"></iframe>
            </div>
        </div>
    </div>
</section>

<hr class="d-block w-50 my-2 mt-4 py-2" />

<!--MODALS Lado Esquerdo-->
<!--Modal Fibra-->
<div class="modal fade" id="modalFibra" tabindex="-1" role="dialog" aria-labelledby="ModalFibra" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="background-color: #0291d380; padding-bottom: 0px;">
                <p class="text-white pb-0" style="font-weight: 600;"><i class="bi bi-cash-stack text-white"></i>&nbsp Fibra Ótica</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Plano</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Fibra 01</th>
                                <td>R$ 69,99</td>
                                <td>20 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 02</th>
                                <td>R$ 79,99</td>
                                <td>40 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 03</th>
                                <td>R$ 99,99</td>
                                <td>60 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 04</th>
                                <td>R$ 109,99</td>
                                <td>80 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 05</th>
                                <td>R$ 119,99</td>
                                <td>100 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 06</th>
                                <td>R$ 139,99</td>
                                <td>130 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 07</th>
                                <td>R$ 169,99</td>
                                <td>160 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 08</th>
                                <td>R$ 179,99</td>
                                <td>180 Megas</td>
                            </tr>
                            <tr>
                                <th scope="row">Fibra 09</th>
                                <td>R$ 199,99</td>
                                <td>200 Megas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-right pb-2 pt-2">
                <a type="button" class="btn btn-sm pl-3 pr-3 font-weight-bold" href="_PlanosFibra.php" style="font-family: verdana; font-size: 11px; background-color:#0291d380;color:#ffffff;border-color:#fff; border-radius: 10px;" class="white-text">
                    Contratar<i class="bi bi-chevron-double-right ml-2 ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--Modal Plano Personalizado-->
<div class="modal fade" id="modalPersonalizado" tabindex="-1" role="dialog" aria-labelledby="ModalPersonalizado" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="background-color: #0291d380; padding-bottom: 0px;">
                <p class="text-white pb-0" style="font-weight: 600;"><i class="bi bi-cash-stack text-white"></i>&nbsp Crie um plano para Você!</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-justify">
                    <form action="mail_Personalizado.php" method="post">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder=" Nome" required />
                        </div>
                        <div class="form-group">
                            <input name="telefone" type=number class="form-control" placeholder=" Telefone" required />
                        </div>
                        <div class="form-group">
                            <input name="email" type=text class="form-control" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <input name="cep" type=number class="form-control" placeholder="CEP" required />
                        </div>
                        <div class="form-group">
                            <select name="download" type="text" class="form-control">
                                <option class="">Velocidade de Download</option>
                                <option class="">10Mbs</option>
                                <option class="">20Mbs</option>
                                <option class="">30Mbs</option>
                                <option class="">40Mbs</option>
                                <option class="">50Mbs</option>
                                <option class="">60Mbs</option>
                                <option class="">70Mbs</option>
                                <option class="">80Mbs</option>
                                <option class="">90Mbs</option>
                                <option class="">100Mbs</option>
                                <option class="">120Mbs</option>
                                <option class="">130Mbs</option>
                                <option class="">150Mbs</option>
                                <option class="">160Mbs</option>
                                <option class="">180Mbs</option>
                                <option class="">200Mbs</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="upload" class="form-control">
                                <option class="">Velocidade de Upload</option>
                                <option class="">10Mbs</option>
                                <option class="">20Mbs</option>
                                <option class="">30Mbs</option>
                                <option class="">40Mbs</option>
                                <option class="">50Mbs</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Digite seu Comentário (Opcional)"></textarea>
                        </div>
                        <div class="modal-footer justify-content-right pt-1">
                            <button type="submit" class="btn btn-sm mb-0 pl-3 pr-3 font-weight-bold" style="font-family: verdana; font-size: 11px; background-color:#0291d380;color:#ffffff;border-color:#fff; border-radius: 10px;" class="white-text">
                                Enviar<i class="bi bi-chevron-double-right ml-2 ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal SpeedTest-->
<div class="modal fade" id="modalSpeed" tabindex="-1" role="dialog" aria-labelledby="ModalSpeed" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="background-color: #0291d380; padding-bottom: 0px;">
                <p class="text-white pb-0" style="font-weight: 600;"><i class="bi bi-cash-stack text-white"></i>&nbsp Teste sua Velocidade!</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-jusify">
                    <iframe width="100%" height="600px" frameborder="0" src="https://jrnetcomunicacao.speedtestcustom.com"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODALS Lado Direito-->
<!--Modal Segunda via-->
<div class="modal fade" id="modalSegundaVia" tabindex="-1" role="dialog" aria-labelledby="Modal2Via" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="background-color: #0291d380; padding-bottom: 0px;">
                <p class="text-white pb-0" style="font-weight: 600;"><i class="bi bi-cash-stack text-white"></i>&nbsp Segunda via de Boletos</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="text-justify">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="row">
                                        <p class="lead text-muted mx-auto mt-2 mb-3 text-justify" style="font-size: 17px;  font-weight: 500;">
                                            Ao clicar em Segunda Via, desça a página até:<br /><br />
                                            Caso seu boleto seja registrado pelo banco GERENCIANET digite o código
                                            de barras (presente no boleto vencido)
                                            e seu CPF nesse campo.</p>
                                        <img class="img-fluid" src="_img/bangerencianet.png" alt="Sample image">
                                        <hr>
                                        <p class="lead text-muted mx-auto mt-4 pt-2 mb-3 text-justify" style="font-size: 17px;  font-weight: 500;">
                                            Se for registrado por outro banco, desça até:
                                            <img class="img-fluid mt-1 mb-1" src="_img/banparceiro.png" alt="Sample image">
                                            E, clique no link do banco correspondente ao seu Boleto/Carnê.
                                        </p>
                                        <hr>
                                        <p class="lead text-muted mx-auto mt-4 pt-2 mb-3 text-justify" style="font-size: 17px;  font-weight: 500;">
                                            Na próxima página digite o código de barras (presente no boleto vencido)
                                            e seu CPF.</p>
                                        <img class="img-fluid" src="_img/banbrasil.png" alt="Sample image">
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-rigth">
                <a type="button" class="btn btn-sm pl-3 pr-3 font-weight-bold" href="https://usuario.gerencianet.com.br/segunda-via" style="font-family: verdana; font-size: 11px; background-color:darkorange;color:#ffffff;border-color:#fff; border-radius: 10px;" class="white-text">
                    Segunda Via<i class="bi bi-chevron-double-right ml-2 ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!--Modal Upload-->
<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="ModalUpload" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="background-color: #0291d380; padding-bottom: 0px;">
                <p class="text-white pb-0" style="font-weight: 600;">Diferença entre velocidade de Download e Upload
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-justify">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td class="text-justify">
                                    Digamos que ambos sejam importantes e influenciam em sua navegação,
                                    pois trabalham em conjunto.<br />
                                    Quando, por exemplo, você manda mensagem para um amigo no WhatsApp
                                    acaba-se utilizando a velocidade de 'Upload', e no momento em que recebe uma
                                    mensagem
                                    você faz 'Download' para visualizá-la.
                                    <br />Geralmente só é utilizado cerca de 8-12% de velocidade de Upload,
                                    portanto caso você tenha 50MBs
                                    de internet seu download baixará numa média de 5-7Mb/s, claro que também
                                    dependerá de seu equipamento e o serviço contratado.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-rigth">
                <a type="button" class="btn btn-sm btn-outline-light waves-effect pl-3 pr-3 font-weight-bold" style="font-family: verdana; font-size: 11px; background-color:darkorange;color:#ffffff;border-color:#fff; border-radius: 10px;" class="white-text" data-dismiss="modal">
                    Fechar
                </a>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include('_inc/footer.php'); ?>