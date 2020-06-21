<?php
// set title
$title = 'Classroom';
$this->setVar('title', $title);

// extends layout
echo $this->extend('AirConditioner\Views\layout');

// begin section content
echo $this->section('content'); ?>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row mb-3">
            <div class="col-6">
                <p class="float-left mr-3">BACKGROUND COLOR MEANING : </p>
                <div class="card bg-dark float-left mr-3" style="width:25px;height:25px;">
                </div>
                <p class="float-left mr-3">OFF</p>
                <div class="card border-dark float-left mr-3" style="width:25px;height:25px;">
                </div>
                <p class="float-left">ON</p>
            </div>
            <div class="col-6">
                <div class="text-right">
                    <a href="#" class="btn btn-primary">
                        Add AC
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-dark text-white mb-4 box-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">AC #1</h4>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item list-group-item-dark">
                            <div class="float-left">
                                <i class="fas fa-temperature-low"></i>
                            </div>
                            <div class="float-left text-muted pl-2">
                                <p>45 C</p>
                            </div>
                            <div class="float-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">-</button>
                                    <button type="button" class="btn btn-secondary">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-dark">
                            <div class="float-left">
                                <i class="fas fa-wind"></i>
                            </div>
                            <div class="float-left text-muted pl-2">
                                <p>400 m/s</p>
                            </div>
                            <div class="float-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">-</button>
                                    <button type="button" class="btn btn-secondary">+</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        <small><i>Last update 2 days ago</i> </small>
                        <label class="switch ">
                            <input type="checkbox" class="default">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 border-dark box-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">AC #1</h4>
                    </div>
                    <div class="list-group list-group-flush">
                        <div class="list-group-item ">
                            <div class="float-left">
                                <i class="fas fa-temperature-low"></i>
                            </div>
                            <div class="float-left text-muted pl-2">
                                <p>45 C</p>
                            </div>
                            <div class="float-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">-</button>
                                    <button type="button" class="btn btn-secondary">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item ">
                            <div class="float-left">
                                <i class="fas fa-wind"></i>
                            </div>
                            <div class="float-left text-muted pl-2">
                                <p>400 m/s</p>
                            </div>
                            <div class="float-right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary">-</button>
                                    <button type="button" class="btn btn-secondary">+</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        <small><i>Last update 2 days ago</i> </small>
                        <label class="switch ">
                            <input type="checkbox" class="default">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// end section content
echo $this->endSection();
?>
