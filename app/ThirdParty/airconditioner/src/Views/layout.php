<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ac Control - <?php echo $this->getData()['title'] ?? ''; ?> </title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/switch.css') ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</head>
<body>
    <header>

        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="<?= base_url('assets/images/logo.svg')?>" alt="logo" class="col-3"/>
                    <strong><?php echo esc($title); ?></strong>
                </a>
                <form class="form-inline" action="index.html" method="post">
                    <div class="input-group">
                        <input type="search" name="search" value="" class="form-control" placeholder="Search here" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <main role="main">
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>
