<!--Tittle-->
<title>Contato</title>

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
                    <li class="breadcrumb-item active">Página de Contato</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!--Formulário de Contato-->
<div class="contact-section dark-grey-text mb-5">
    <div class="container my-3">
        <div class="card">
            <div class="row">
                <!-- Lado Direito | Formulário | -->
                <div class="col-lg-7 pr-lg-0 ml-lg-0">
                    <form action="mail_Contato.php" method="post">
                        <div class="card-header text-white bg-success" style="font-weight: 600;"><i class="bi bi-chat-quote-fill"></i>&nbsp Fale Conosco</div>
                        <div class="card-body form">
                            <!--Nome e Email-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input type="text" name="name" class="form-control" placeholder=" Nome" required />
                                        <label for="name"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input type="email" name="email" class="form-control" placeholder=" Email" />
                                        <label for="email"></label>
                                    </div>
                                </div>
                            </div>
                            <!--Telefone e CEP-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input type="number" name="telefone" class="form-control" placeholder=" Telefone" required />
                                        <label for=telefone></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input type="number" name="cep" class="form-control" placeholder=" CEP" required />
                                        <label for="cep"></label>
                                    </div>
                                </div>
                            </div>
                            <!--Área de Mensagem/Botão Enviar-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-form-group mb-2">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Digite seu Comentário (Opcional)"></textarea>
                                        <label for="message"></label>
                                        <button type="submit" class="btn-floating btn-sm mt-4">
                                            <i class="bi bi-cursor-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Lado Esquerdo | Informações | -->
                <div class="col-lg-5 pl-lg-0 ml-lg-0">
                    <div class="card-body contact text-center h-100 white-text" style="background-color: #4980ad;">
                        <h3 class="font-weight-bold my-4 pb-2">Informações de Contato</h3>
                        <ul class="text-lg-left list-unstyled ml-4 pb-2">
                            <li>
                                <p><i class="bi bi-house-door-fill mr-3"></i>Grajaú - Zona Sul/SP</p>
                            </li>
                            <li>
                                <p><i class="bi bi-telephone-inbound-fill mr-3"></i>(11) 95723-4497</p>
                            </li>
                            <li>
                                <p><i class="bi bi-envelope-open-fill mr-3"></i>suporte@luianalves.com.br</p>
                            </li>
                        </ul>
                        <ul class="list-inline text-center list-unstyled">
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg text-white" href="https://twitter.com/LuianMorais">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg text-white" href="https://www.facebook.com/profile.php?id=100050804596276">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg text-white" href="https://br.linkedin.com/in/luian-alves-1a299b208">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 fa-lg text-white" href="https://github.com/LuianAlves">
                                    <i class="bi bi-github"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include('_inc/footer.php'); ?>