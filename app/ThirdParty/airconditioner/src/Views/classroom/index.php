<?php
// set title
$title = 'Classroom';
$this->setVar('title', $title);

// extends layout
echo $this->extend('AirConditioner\Views\layout');

// begin section content
echo $this->section('content'); ?>

<div class="row">
    <div class="col-12 mb-2">
        <h3>Classroom</h3>
        <small class="text-muted">a list of all rooms</small>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card bg-light">
            <div class="card-header">
                <div class="row mb-3">
                    <div class="col-lg-8 col-12">
                        <form action="<?= route_to('classroom.index') ?>" class="form-inline" method="get">
                            <label >Filter Class</label>
                            <select class="form-control ml-2" name="s">
                                <option value="">All Section</option>
                                <?php  foreach ($section as $key => $option) { ?>
                                    <option value="<?= $option['section'] ?>"><?= $option['section'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="input-group mt-2">
                                <select class="form-control ml-2" name="f">
                                    <option value="">All floor</option>
                                    <?php  foreach ($floor as $key => $option) { ?>
                                        <option value="<?= $option['floor'] ?>"><?= $option['floor'] ?></option>
                                    <?php } ?>
                                </select>
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-outline-primary mb-2">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-4 col-12 pt-2">
                        <div class="text-right">
                            <a href="<?= route_to('classroom.create') ?>" class="btn btn-primary">
                                Add Class
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= (isset($table)) ? $table->generate() : '' ?>
            </div>
        </div>
    </div>
</div>

<?php
// end section content
echo $this->endSection();
?>
