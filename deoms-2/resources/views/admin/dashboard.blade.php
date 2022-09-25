@extends('layouts.admin')

@section('page-title', 'DEOMS::Dashboard')
@section('pageTitle', 'Welcome to DEOMS Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>200</h3>
                <p>Students</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
         </div>   
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>30</h3>
                <p>Teachers</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
         </div>   
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>5</h3>
                <p>Non Uniform Personnel</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
         </div>   
    </div>
</div>
<!-- /.row -->
@endsection