@extends('layouts.admin')

@section('page-title', 'DEOMS::New Forms')
@section('pageTitle', '')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h5> New Form</h5>
                </div>
                <div class="card-body">
                    <div class="row">   
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Title...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success col start">
                                    <i class="fas fa-upload"></i>
                                    <span>Start upload</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-6">
                            <button type="button" class="btn btn-block btn-outline-success btn-lg">Save</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-block btn-outline-danger btn-lg">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer clearfix"></div>
            </div>
        </div>
    </div>
@endsection