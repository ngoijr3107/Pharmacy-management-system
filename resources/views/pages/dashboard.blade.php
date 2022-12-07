@extends('home')
@include('includes.sidebar')
<div id="content" class="pl-5">
@include('includes.navbar')
 @section('content')
 <div class="container">
     <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="">Stock count</h5>
                    <small class="text-right">15</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="">Orders</h5>
                    <small class="text-right">325</small>
                </div>
                <!-- <div class="card-footer text-center">
                    <a href="#">See more<i class="fas fa-arrow-right"></i></a>
                </div> -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="">Sales</h5>
                    <small class="text-right">3</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="">Expenses</h5>
                    <small class="text-right">14000</small>
                </div>
                <!-- <div class="card-footer text-center">
                    <a href="#">See more<i class="fas fa-arrow-right"></i></a>
                </div> -->
            </div>
        </div>
     </div>
 </div>
    
 @endsection