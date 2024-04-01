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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="<?= base_url('assets/img/logo.jpg') ?>" alt="Agendamento de tarefas" width="30" height="24" class="d-inline-block align-text-top mx-2">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Início</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/produtos') ?>">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/agendamentos') ?>">Agendamentos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Agendamentos</h1>


    <script src="<?= base_url('assets/bootstrap5/js/bootstrap.bundle.min.js') ?>"></></script>
</body>
</html>