<!--Tittle-->
<title>Contratar Planos</title>

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
                    <li class="breadcrumb-item active"><a href="_Planos.php">Planos</a></li>
                    <li class="breadcrumb-item active">Requerimento de Planos</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!--Planos Economico-->
<div class="contact-section dark-grey-text mb-5">
    <div class="container my-3">
        <h6 class="text-uppercase grey-text mb-4 text-center">Formulário de Planos Econômico</h6>
        <div class="card">
            <div class="row">
                <!-- Lado Direito | Formulário | -->
                <div class="col-lg-8 mr-lg-0 pr-lg-0">
                    <form action="mail_Economico.php" method="post">
                        <div class="card-header text-white bg-success" style="font-weight: 600">
                            <i class="bi bi-clipboard-plus"></i>&nbsp Requerimento de Planos Econômico
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
                                        <input name="telefone" type="number" class="form-control" placeholder="Telefone" required />
                                        <label for="telefone"></label>
                                    </div>
                                </div>
                            </div>
                            <!--CEP e Email-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="cep" type="number" class="form-control" placeholder=" CEP" required />
                                        <label for="cep"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <input name="email" type="email" class="form-control" placeholder="Email" />
                                        <label for="email"></label>
                                    </div>
                                </div>
                            </div>
                            <!--Planos-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <select type="text" name="plano" class="form-control">
                                            <option class="">-- Selecione seu Plano --</option>
                                            <option class="font-weight-bolder text-muted">Planos Economicos</option>
                                            <option class=""></option>
                                            <option class="">5 Megas</option>
                                            <option class="">8 Megas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--Mensagem-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-form-group mb-0">
                                        <textarea id="message" name="message" class="form-control" rows="4" placeholder="Digite seu Comentário (Opcional)"></textarea>
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
                <!-- Lado Esquerdo | Accordion com Valores | -->
                <div class="col-lg-4 ml-lg-0 pl-lg-0">
                    <div class="accordion sm-accordion" id="ValoresEx" role="tablist" aria-multiselectable="true">
                        <div class="card border-top border-bottom-0 border-left border-right border-light">
                            <div class="card-header text-center" style="padding-bottom: 13px; background-color: #d4ebfa" role="tab" id="ValorPlanos">
                                <a data-toggle="collapse" data-parent="#ValoresEx" href="#ValoresPlanos" aria-expanded="false" aria-controls="ValoresPlanos">
                                    <h6 class="white-text font-weight-bold mb-0">
                                        Clique para ver os valores !! <i class="bi bi-chevron-double-down ml-3"></i>
                                    </h6>
                                </a>
                            </div>
                            <div id="ValoresPlanos" class="collapse" role="tabpanel" aria-labelledby="ValorPlanos" data-parent="#ValoresEx">
                                <div class="card-body text-center">
                                    <table class="table table-sm table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Planos</th>
                                                <th scope="col">Valores</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-bold">5 Megas</td>
                                                <td>R$ 42,80</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">8 Megas</td>
                                                <td>R$ 49,99</td>
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