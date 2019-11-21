<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title> Escolinha :: Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="150" height="150" alt="">
        </a>-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a data-pagina="#home" class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='inscr.php'>Inscrições</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='galeria.php'>Galeria</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#contatos" class="nav-link" href='contatos.php'>Contatos</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#about" class="nav-link" href='about.php'>Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a onClick="document.location.href='login.php'" class="nav-link">Login</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <div class="container">

        <div class="row align-items-center my-5">
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="../img/imagem10.PNG" alt="">
            </div>
            <div class="col-lg-5">
                <h3>Ensinando Crianças</h3>
                <p> A prática de esportes na infância e na adolescência colabora para a formação de amizades e, claro, para a saúde. Mas a contribuição do esporte na formação de uma pessoa vai ainda além disso e pode ser extremamente benéfica para a assimilação
                    de valores e a formação do caráter. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h3>Valores</h3>
                        <p class="card-text">
                            O esporte ensina que nada na vida tem valor se não foi conquistado honestamente. É um campo que deixa clara a contradição entre os objetivos perseguidos e a desonestidade na hora de tentar alcançá-los. Quem quer trapacear acaba nas sarjetas do mundo do
                            esporte e, é claro, se sente sempre insatisfeito consigo mesmo.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Qualidade de Vida</h3>
                        <p class="card-text">
                            Este é um dos maiores contributos que o esporte pode dar a seus filhos: a capacidade de trabalhar ao lado de outras pessoas em favor de um propósito comum. Se um time quer chegar longe, cada membro precisa conhecer seus limites, ajudar os outros e refrear
                            o desejo de estrelismo. Poucas coisas ensinam isso de maneira tão vívida quanto o esporte.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Conheça a nossa escolinha</h4>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OOBntx-Zb_A" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>
    <script src="../js/jquery-3.4.1.js">
        $('[data-pagina]').on('click', () => {
            var pagina = $(this).data('pagina');
            $('pagina').hide();
            $(pagina).show();
        })
    </script>


</body>

</html>