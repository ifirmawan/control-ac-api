<?php
// set title
$title = 'TT105';
$this->setVar('title', $title);

// extends layout
echo $this->extend('AirConditioner\Views\layout');

// begin section content
echo $this->section('content'); ?>
<div class="row">
    <div class="col-12 mb-3">
        <h3>TT105</h3>
        <small class="text-muted">Telecomunication Section 1st Floor</small>
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
                    <a href="#" class="btn btn-primary ml-2">
                        Add AC
                    </a>
                </div>
            </div>
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
                        <h1>-</h1>
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
                    <span class="card border-dark ml-2 float-left card-bar-wind card-bar-empty" ></span>
                    <div class="float-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">-</button>
                            <button type="button" class="btn btn-secondary">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-muted">
                <small><i>Last update 1 hours ago</i> </small>
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
                <h4 class="card-title">AC #2</h4>
            </div>
            <div class="list-group list-group-flush">
                <div class="list-group-item ">
                    <div class="float-left">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <div class="float-left text-muted pl-2">
                        <h1>16 C</h1>
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
                    <span class="card bg-success ml-2 float-left card-bar-wind" ></span>
                    <span class="card bg-success ml-2 float-left card-bar-wind" ></span>
                    <span class="card bg-success ml-2 float-left card-bar-wind" ></span>
                    <span class="card bg-warning ml-2 float-left card-bar-wind" ></span>
                    <span class="card bg-warning ml-2 float-left card-bar-wind" ></span>
                    <span class="card bg-warning ml-2 float-left card-bar-wind" ></span>
                    <span class="card bg-danger ml-2 float-left card-bar-wind card-bar-blink" ></span>
                    <div class="float-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">-</button>
                            <button type="button" class="btn btn-secondary">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-muted">
                <small><i>Last update 2 minutes ago</i> </small>
                <label class="switch ">
                    <input type="checkbox" class="default" checked/>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
</div>
<?php
// end section content
echo $this->endSection();
?>
