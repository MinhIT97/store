@extends('admin.layouts.master')
@section('content')

<div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Products</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order By Year</h4>
                                    <div id="lion-order-char" data-order="{{ $orderYear }}"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Daily Order</h4>
                                    <!-- <canvas id="barChart" style="height:230px"></canvas> -->
                                    <div id="dailyorder" data-dailyorder="{{ $productBuy }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Area chart</h4>
                                    <canvas id="areaChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Doughnut chart</h4>
                                    <canvas id="doughnutChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Pie chart</h4>
                                    <canvas id="pieChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Scatter chart</h4>
                                    <canvas id="scatterChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
