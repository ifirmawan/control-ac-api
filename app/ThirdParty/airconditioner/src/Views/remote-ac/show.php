<?php
// set title
$title = $air_conditioners->getRow()->class_name ?? '';
$this->setVar('title', $title);

// extends layout
echo $this->extend('AirConditioner\Views\layout');

// begin section content
echo $this->section('content');?>
<div class="row">
    <div class="col-12 mb-3">
        <h3><?php $class_name = $air_conditioners->getRow()->class_name ?? ''; echo strtoupper($class_name); ?></h3>
        <small class="text-muted">
            <?php $section_name = $air_conditioners->getRow()->section ?? ''; echo strtoupper($section_name); ?> Section
            <?php
            $floor = $air_conditioners->getRow()->floor ?? 0;
            $floor = (intval($floor) > 1)? $floor.'nd ' : $floor.'st';
            echo $floor;
             ?> Floor
        </small>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header p-3">
        <div class="row">
            <div class="col-lg-6 col-12">
                <p class="float-left mr-3">INSTRUCTION : </p>
                <div class="card bg-dark float-left mr-3" style="width:25px;height:25px;">
                </div>
                <p class="float-left mr-3">OFF</p>
                <div class="card border-dark float-left mr-3" style="width:25px;height:25px;">
                </div>
                <p class="float-left">ON</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="text-right">
                    <a href="/" class="btn btn-outline-secondary ml-2">
                        Go Back
                    </a>
                    <a href="#acModal" data-toggle="modal" class="btn btn-primary ml-2">
                        Add AC
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <?php  foreach ($air_conditioners->getResult() as $index => $ac): ?>
        <div class="col-md-6 col-12">
            <div class="card bg-dark text-white mb-4 box-shadow">
                <div class="card-header text-center">
                    <h4 class="card-title"><?php $title = $ac->name ?? ''; echo strtoupper($title); ?></h4>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item list-group-item-dark">
                        <div class="float-left">
                            <i class="fas fa-temperature-low"></i>
                        </div>
                        <div class="float-left text-muted pl-2">
                            <h1 id="temp-<?= $ac->id ?>"><?= $ac->temp ?? '-' ?></h1>
                        </div>
                        <div class="float-right">
                            <div class="btn-group" role="group" aria-label="Basic counter">
                                <button type="button" class="btn btn-secondary">-</button>
                                <button type="button" class="btn btn-secondary">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-dark">
                        <div class="float-left">
                            <i class="fas fa-wind"></i>
                        </div>
                        <div id="wind-<?= $ac->id ?>">
                            <?php
                                $wind = $ac->wind ?? 0;
                                $wind = intval($wind);
                             ?>
                            <?php if($wind === 0) : ?>
                                <span class="card border-dark ml-2 float-left card-bar-wind card-bar-empty" ></span>
                            <?php else: ?>
                                <?php
                                    for ($i=0; $i < $wind; $i++) {
                                        if ($i <= 2) {
                                            echo '<span class="card bg-success ml-2 float-left card-bar-wind" ></span>';
                                        }elseif ($i > 2 && $i < 5) {
                                            echo '<span class="card bg-warning ml-2 float-left card-bar-wind" ></span>';
                                        }else{
                                            echo '<span class="card bg-danger ml-2 float-left card-bar-wind card-bar-blink" ></span>';
                                        }
                                    }
                                ?>
                            <?php endif; ?>
                        </div>
                        <div class="float-right">
                            <div class="btn-group" role="group" aria-label="Basic counter">
                                <button type="button" class="btn btn-secondary">-</button>
                                <button type="button" class="btn btn-secondary">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    <small><i>Updated <?= \CodeIgniter\I18n\Time::parse($ac->updated_at,'Asia/Jakarta')->humanize() ?></i> </small>
                    <label class="switch ">
                        <input type="checkbox" class="default">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>

<!-- Modal -->
<div class="modal fade" id="acModal" tabindex="-1" role="dialog" aria-labelledby="acModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php
            helper('form');
            echo form_open(route_to('ac.store'));
            echo form_hidden('class_room_id', $class_room_id ?? 0);
            ?>
            <div class="modal-header">
                <h5 class="modal-title" id="acModalLabel">Add New AC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <?php
                    echo form_label('AC Name', 'inputName');
                    echo form_input('name', '',['class' => 'form-control', 'id'=> 'inputName']);
                    ?>
                    <small class="text-danger"><i>*Required</i></small>
                </div>
                <div class="form-group">
                    <?php
                    echo form_label('Room Temperature', 'inputTemp');
                    echo form_input('temp', '',['class' => 'form-control', 'id'=> 'inputTemp']);
                    ?>
                    <small><i>Leave empty if you don't know</i></small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
    </div>
</div>
<?php
// end section content
echo $this->endSection();
?>
