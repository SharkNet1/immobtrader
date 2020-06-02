@extends('layouts.base',['titre'=>'Acceuil'])

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content text-center p-md" style="background-color: #24bbf6a1"><br>
                        <h2><span  style="font-size: larger;font-size: xxx-large" class="label label-info">AGENCE ImmobTrader</span></h2><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">En cours</span>
                        <h5>Procédure</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">4</h1>
                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                        <small>Nombre</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">En cours</span>
                        <h5>Démarches</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">12</h1>
                        <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                        <small>Nombre</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Au total</span>
                        <h5>Fournisseurs</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">34</h1>
                        <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                        <small>Nombre</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">A faire</span>
                        <h5>Taches</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">8</h1>
                        <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                        <small>Nombre</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content text-center p-md">
                        <h2 class="m-b-xxs">ACTUALITE</h2>
                        <p>legende</p>
                        <span class="simple_tag" style="background-color: #c8cbcf;">Rendez vous</span>
                        <span class="simple_tag" style="background-color: #aead64;">Entretien</span>
                        <span class="simple_tag" style="background-color: #328ebd;">Boxed layout</span>
                        <span class="simple_tag" style="background-color: #2aa198;">Scroll footer</span>
                        <span class="simple_tag" style="background-color: #ff7367;">Fixed footer</span>
                        <div class="m-t-md">
                            <p>List des evenements</p>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>Evenement</h5>
                                            <div class="pull-right">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-xs btn-white active">Cette semaine</button>
                                                    <button type="button" class="btn btn-xs btn-white">Ce mois</button>
                                                    <button type="button" class="btn btn-xs btn-white">Cette année</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ibox-content">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="flot-chart">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop