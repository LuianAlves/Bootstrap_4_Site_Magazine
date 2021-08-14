<!--Tittle-->
<title>Teste de Velocidade</title>

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
                    <li class="breadcrumb-item active">Teste de Velocidade</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!--Speed Teste-->
<div class="dark-grey-text">
    <div class="container my-3">
        <h3 class="text-center font-weight-normal mb-4 pb-2">Saiba sua velocidade de Internet</h3>
        <p class="text-center lead grey-text mx-auto mb-5">
            Utilize nosso medidor para saber sua velocidade em tempo real.
        </p>
        <div class="row">
            <div class="col-12">
                <iframe width="100%" height="650px" frameborder="0" src="https://jrnetcomunicacao.speedtestcustom.com"></iframe>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<?php include('_inc/footer.php'); ?>