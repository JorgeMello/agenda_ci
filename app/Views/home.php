<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>

<body>

    <!-- nav -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <a href="<?= base_url('/') ?>">
                    <img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Agendamento de tarefas" width="30" height="24" class="d-inline-block align-text-top mx-2">
                </a>
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= base_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= base_url('protutos') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= base_url('sobre') ?>">Sobre</a></div>
            </div>
        </div>
    </nav>
    <!-- main -->
    <section class="container-fluid bg-color-02">

        <div class="row">
            <div class="col text-center p-5">
                <div class="mb-5"><img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Agendamento de tarefas" width="150" height="100" class="ima-fluid"></div>
                <div class="text-center">
                    <h1>Agendamento de tarefas</h1>
                    <a href="<?= base_url('login') ?>" class="btn btn-primary">Entrar</a>

                </div>

            </div>
        </div>


    </section>

    <footer>
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-6 d-flex flex-row justify-content-center">
                    <div class="text-center mx-4">
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Agendamento de tarefas" width="30" height="24" class="d-inline-block align-text-top mx-2"></a>
                    </div>
                    <div class="text-center mx-4">
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Agendamento de tarefas" width="30" height="24" class="d-inline-block align-text-top mx-2"></a>
                    </div>
                    <div class="text-center mx-4">
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Agendamento de tarefas" width="30" height="24" class="d-inline-block align-text-top mx-2"></a>
                    </div>
                    <div class="text-center mx-4">
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Agendamento de tarefas" width="30" height="24" class="d-inline-block align-text-top mx-2"></a>
                    </div>


                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <p class="text-center">Desenvolvido por <a href="https://github.com/JorgeMello" target="_blank">Jorge Mello</a> &copy; <?= date('Y') ?></p>

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="<?= base_url('assets/bootstrap5/js/bootstrap.bundle.min.js') ?>">
        < />
    </script>
</body>

</html>