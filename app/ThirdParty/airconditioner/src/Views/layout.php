<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ac Control - <?php echo $this->getData()['title'] ?? ''; ?> </title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/switch.css') ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
</head>
<body>
    <header>

        <div class="navbar navbar-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <img src="<?= base_url('assets/images/logoittelkom.png') ?>" alt="logo ittp" class="col-md-8 col-6"/>
                </a>

            </div>
        </div>
    </header>

    <main role="main">
        <div class="album py-5">
            <div class="container">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript">
$(document).ready(function(){

});
</script>
</html>
