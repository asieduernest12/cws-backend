@extends('layouts.app')

@section('content')
<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Points & Payments</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0 align-items-center">
            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="cash" role="img"
                        class="md hydrated" aria-label="home outline"></ion-icon></a>
            </li>
            
        </ol>
    </nav>
</div>
  <div class="ms-auto">
      <div class="btn-group">
          <button type="button" class="btn btn-outline-primary">Settings</button>
          <button type="button"
              class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
              data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                  href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
      </div>
  </div>
</div>
<!--end breadcrumb-->

    <div class="ms-auto">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
            Points and Payment Transactions
        </button>
    </div><br>

    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3">
        
        <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="widget-icon-2 bg-gradient-branding text-white">
                    <ion-icon name="pie-chart-sharp" role="img" class="md hydrated" aria-label="pie chart sharp"></ion-icon>
                  </div>
                  <div class="fs-5 ms-auto"><ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated" aria-label="ellipsis horizontal sharp"></ion-icon></div>
                </div>
                <h5 class="my-3">Points Rate</h5>
                <div class="progress mt-1" style="height: 5px;">
                  <div class="progress-bar bg-gradient-branding" role="progressbar" style="width: 65%"></div>
                </div>
                <p class="mb-0 mt-2">24.3%<span class="float-end text-danger">-5.6%</span></p>
              </div>
            </div>
           </div>
         
         <div class="col">
          <div class="card radius-10">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="widget-icon-2 bg-gradient-success text-white">
                  <ion-icon name="wallet-sharp" role="img" class="md hydrated" aria-label="wallet sharp"></ion-icon>
                </div>
                <div class="fs-5 ms-auto"><ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated" aria-label="ellipsis horizontal sharp"></ion-icon></div>
              </div>
              <h5 class="my-3">Payments</h5>
              <div class="progress mt-1" style="height: 5px;">
                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%"></div>
              </div>
              <p class="mb-0 mt-2">$58,653,24<span class="float-end text-success">+5.9%</span></p>
            </div>
          </div>
         </div>
         <div class="col">
          <div class="card radius-10">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="widget-icon-2 bg-gradient-purple text-white">
                  <ion-icon name="people-sharp" role="img" class="md hydrated" aria-label="people sharp"></ion-icon>
                </div>
                <div class="fs-5 ms-auto"><ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated" aria-label="ellipsis horizontal sharp"></ion-icon></div>
              </div>
              <h5 class="my-3">Users</h5>
              <div class="progress mt-1" style="height: 5px;">
                <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 65%"></div>
              </div>
              <p class="mb-0 mt-2">87,532,16<span class="float-end text-success">+8.5%</span></p>
            </div>
          </div>
         </div>
    </div>
         
          <div class="row">
            <div class="col-12 col-lg-12 col-xl-12 d-flex">
                <div class="card radius-10 overflow-hidden w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Geo Location Statistics</h6>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                                        aria-label="ellipsis horizontal sharp"></ion-icon>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="chart-container5">
                            <canvas id="chart4" width="271" height="230"
                                style="display: block; box-sizing: border-box; height: 230px; width: 271px;"></canvas>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                            Regional Points
                            <span class="badge bg-tiffany rounded-pill">55</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Constituency Points
                            <span class="badge bg-success rounded-pill">20</span>
                        </li>
                    </ul>
                </div>
            </div>
          </div>
        
    
@endsection
