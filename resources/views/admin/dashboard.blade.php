@extends('admin.layouts.app_admin')
@section('content')
    <h1>Admin panel</h1>
    <div class="conteiner">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Categories 0</span> </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Materials 0</span> </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Visitors all time 0</span> </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="label label-primary">Visitors today 0</span> </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create category</a>
                <a class="list-group-item" href="{{route('admin.category.create')}}">
                    <h4 class="list-group-item-heading">First category</h4>
                    <p class="list-group-item-text">
                        Count of materials
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="#">Create material</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">First material</h4>
                    <p class="list-group-item-text">
                        Category
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection
