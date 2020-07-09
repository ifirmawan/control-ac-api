<?php
// set title
$title = 'Classroom';
$this->setVar('title', $title);

// extends layout
echo $this->extend('AirConditioner\Views\layout');

// begin section content
echo $this->section('content'); ?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <h3>Add Classroom</h3>
        <small class="text-muted">register new classroom</small>
        <div class="card">
            <div class="card-body">
                <?php
                helper('form');
                $classroom_id = $classroom['id'] ?? null;
                if ($classroom_id) {
                    echo form_open(route_to('classroom.edit',$classroom['id']));
                    echo form_hidden('id', $classroom['id']);
                }else{
                    echo form_open(route_to('classroom.store'));
                }
                ?>
                <div class="form-group">
                    <?php
                    echo form_label('Class Name', 'name', ['for' => 'name']);
                    echo form_input('name', set_value('name', $classroom['name'] ?? ''), ['class' => 'form-control']);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo form_label('Section', 'section', ['for' => 'section']);
                    echo form_input('section', set_value('section', $classroom['section'] ?? ''), ['class' => 'form-control']);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo form_label('Floor', 'floor', ['for' => 'floor']);
                    echo form_input('floor', set_value('floor', $classroom['floor'] ?? ''), ['class' => 'form-control']);
                    ?>
                </div>
                <div class="text-right">
                    <a href="/" class="btn btn-outline-secondary">Go Back</a>
                    <button type="reset" class="btn btn-warning ml-2" >Reset</button>
                    <button type="submit" class="btn btn-primary ml-2" >Save</button>
                </div>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
</div>
<?php
// end section content
echo $this->endSection();
?>
