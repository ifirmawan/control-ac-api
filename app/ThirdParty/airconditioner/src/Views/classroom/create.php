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
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Section</label>
                        <input type="text" name="" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">Floor</label>
                        <input type="text" name="" value="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="">AC</label>
                        <input type="text" name="" value="" class="form-control" />
                    </div>
                    <div class="text-right">
                        <a href="/" class="btn btn-outline-secondary">Go Back</a>
                        <button type="reset" class="btn btn-warning ml-2" >Reset</button>
                        <button type="submit" class="btn btn-primary ml-2" name="button">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
// end section content
echo $this->endSection();
?>
