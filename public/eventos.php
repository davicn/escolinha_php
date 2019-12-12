<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title> Escolinha :: Eventos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="150" height="150" alt="">
        </a>-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a data-pagina="#home" class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='inscr.php'>Inscrições</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#inscr" class="nav-link" href='galeria.php'>Galeria</a>
                </li>
                <li class="nav-item active">
                    <a data-pagina="#inscr" class="nav-link" href='eventos.php'>Eventos <span class="sr-only">(current)</span> </a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#contatos" class="nav-link" href='contatos.php'>Contatos</a>
                </li>
                <li class="nav-item">
                    <a data-pagina="#about" class="nav-link" href='about.php'>Sobre nós</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>



    <div class="container">

        <div class="row align-items-center my-5">
            <div class="col-lg-5">
                <h3>Calendário de Eventos</h3>
                <p> Confira nosso calendário de eventos e programe-se para não perder
                    nenhuma de nossas atividades! </p>
            </div>
            <div class="col-lg-7">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="../img/calendario1.jpg" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-200">
                    <div class="card-body">
                        <h3>Estadual Sub-12</h3>
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="../img/real/levantandotaca.jpeg" alt="">
                        <p class="card-text">
                            <br>    
                            No próximo domingo iniciam-se as inscrições para participar do campeonato
                            estadual da categoria Sub-12. Traga seu filho para fazer parte da nossa
                            equipe vencedora!
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-200">
                    <div class="card-body">
                        <h3 class="card-title">Escolinha Solidária</h3>
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="../img/doacao1.jpg" alt="">
                        <p class="card-text">
                        <br>
                            Ajude-nos a ajudar! Durante o período de inscrições para as turmas do ano de
                            2020, você ganha 20% de desconto na taxa de matrícula ao trazer alimentos não 
                            perecíveis para doação. Toda a ajuda será redirecionada para instituições carentes. 
                            Não fique de fora e faça <a href="inscr.php">aqui</a> sua inscrição!</p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Jogando com a família</h3>
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="../img/real/timemisto.jpeg" alt="">
                        <p class="card-text">
                        <br>
                            Neste final de ano teremos nosso tradicional dia "Jogando com a Família"! 
                            Traga seus parentes para um dia de muita diversão e descontração na nossa escolinha. 
                            Para mais informações, entre em contato conosco através das nossas <a href="contatos.php">redes</a>.</p>
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