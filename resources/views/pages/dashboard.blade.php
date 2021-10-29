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
                    <h5 class="text-center">Total Candidates</h5>
                    <h5 class="text-right">15</h5>
                </div>
                <div class="card-footer text-center">
                    <a href="#">See more<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Total Voters</h5>
                    <h5 class="text-right">325</h5>
                </div>
                <div class="card-footer text-center">
                    <a href="#">See more<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Total Cartegories</h5>
                    <h5 class="text-right">3</h5>
                </div>
                <div class="card-footer text-center">
                    <a href="#">See more<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center">Total Votes</h5>
                    <h5 class="text-right">14000</h5>
                </div>
                <div class="card-footer text-center">
                    <a href="#">See more<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
     </div>
 </div>
    
 @endsection