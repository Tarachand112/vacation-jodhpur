@extends('admin.layouts.app')
@section('title' , 'Dashboard')
@section('content')
  <div class="main-content">
    <section class="section">
      <div class="row ">
        <div class="col-xl-6">
          <div class="card l-bg-green-dark">
            <div class="card-statistic-3">
              <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
              <div class="card-content">
                <h4 class="card-title">Customers</h4>
                <span>{{ $user_count }}</span>
                <div class="progress mt-1 mb-1" data-height="8">
                  <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 text-sm">
                  <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card l-bg-cyan-dark">
            <div class="card-statistic-3">
              <div class="card-icon card-icon-large"><i class="fa fa-briefcase"></i></div>
              <div class="card-content">
                <h4 class="card-title">Pages</h4>
                <span>5</span>
                <div class="progress mt-1 mb-1" data-height="8">
                  <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 text-sm">
                  <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
