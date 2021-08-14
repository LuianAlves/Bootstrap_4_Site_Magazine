<!--Tittle-->
<title>Página de Cadastro</title>

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
                    <li class="breadcrumb-item active">Ficha de Cadastro</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!--Cadastro-->
<div class="contact-section dark-grey-text mb-5">
    <div class="container my-3">
        <h6 class="text-uppercase grey-text mb-4 text-center">Formulário de Cadastro</h6>
        <div class="card">
            <div class="row">
                <!--Lado do Formulário-->
                <div class="col-lg-8 pr-lg-0 mr-lg-0">
                    <form action="mailcadastro.php" method="post">
                        <div class="card-header text-white bg-success" style="font-weight: 600">
                            <i class="bi bi-clipboard-plus"></i>&nbsp Cadastre-se
                        </div>
                        <div class="card-body form">
                            <!--Nome e Telefone-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="name" type="text" class="form-control" placeholder=" Nome" required />
                                        <label for="name"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="telefone" type="number" class="form-control" placeholder=" Telefone" required />
                                        <label for="telefone"></label>
                                    </div>
                                </div>
                            </div>
                            <!--RG e CPF-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="rg" type="number" class="form-control" placeholder=" RG" />
                                        <label for="rg"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="cpf" type="number" class="form-control" placeholder=" CPF" required />
                                        <label for="cpf"></label>
                                    </div>
                                </div>
                            </div>
                            <!--CEP-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="cep" type="text" class="form-control" placeholder=" Endereço/CEP" required />
                                        <label for="cep"></label>
                                    </div>
                                </div>
                            </div>
                            <!--Planos-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="plano" type="text" class="form-control" placeholder="Velocidade do Plano" required />
                                        <label for="plano"></label>
                                    </div>
                                </div>
                            </div>
                            <!--Mensagem-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-form-group mb-0">
                                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Alguma mensagem adicional? Digite aqui .. (Opcional)"></textarea>
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
                <!--Lado Informações-->
                <div class="col-lg-4 pl-lg-0 ml-lg-0">
                    <div class="card-body dark-grey-text p-0 m-0">
                        <div class="card-header grey-text">
                            <i class="bi bi-chat-quote-fill"></i>&nbsp Informações de Contato
                        </div>
                        <ul class="text-lg-left grey-text list-unstyled mt-4 ml-2 pl-2">
                            <li>
                                <p><i class="bi bi-house-door-fill mr-2" style="font-size: 18px;color: #4980ad"></i>Grajaú/SP</p>
                            </li>
                            <li>
                                <p><i class="bi bi-telephone-inbound-fill mr-2" style="font-size: 18px; color: #4980ad"></i>(11) 95723-4497</p>
                            </li>
                            <li>
                                <p><i class="bi bi-envelope-open-fill mr-2" style="font-size: 18px; color: #4980ad"></i>suporte@luianalves.com.br</p>
                            </li>
                        </ul>
                    </div>
                    <!--Accordion-->
                    <div class="accordion sm-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <div class="card border-top border-bottom-0 border-left border-right border-light">
                            <div class="card-header text-center" style="padding-bottom: 13px; background-color: #d4ebfa" role="tab" id="headingOne1">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                    <h6 class="white-text font-weight-bold mb-0">
                                        Clique para ver os valores !! <i class="bi bi-chevron-double-down ml-3"></i>
                                    </h6>
                                </a>
                            </div>
                            <div id="collapseOne1" class="collapse mt-0 pt-0" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                <div class="card-body">
                                    <table class="table table-sm  text-center table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Fibra</th>
                                                <th scope="col">Cabo</th>
                                                <th scope="col">Econômico</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>20 Megas <p class="font-weight-bold mb-0 pb-0">R$69,99</p>
                                                </td>
                                                <td>10 Megas <p class="font-weight-bold mb-0 pb-0">R$59,99</p>
                                                </td>
                                                <td>5 Megas <p class="font-weight-bold mb-0 pb-0">R$42,80</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>40 Megas <p class="font-weight-bold mb-0 pb-0">R$79,99</p>
                                                </td>
                                                <td>15 Megas <p class="font-weight-bold mb-0 pb-0">R$69,99</p>
                                                </td>
                                                <td>8 Megas <p class="font-weight-bold mb-0 pb-0">R$49,99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>60 Megas <p class="font-weight-bold mb-0 pb-0">R$99,99</p>
                                                </td>
                                                <td>20 Megas <p class="font-weight-bold mb-0 pb-0">R$79,99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>80 Megas <p class="font-weight-bold mb-0 pb-0">R$109,99</p>
                                                </td>
                                                <td>25 Megas <p class="font-weight-bold mb-0 pb-0">R$89,99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>100 Megas <p class="font-weight-bold mb-0 pb-0">R$119,99</p>
                                                </td>
                                                <td>30 Megas <p class="font-weight-bold mb-0 pb-0">R$99,99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>130 Megas <p class="font-weight-bold mb-0 pb-0">R$139,99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>160 Megas <p class="font-weight-bold mb-0 pb-0">R$169,99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>180 Megas <p class="font-weight-bold mb-0 pb-0">R$179,99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>200 Megas <p class="font-weight-bold mb-0 pb-0">R$199,99</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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