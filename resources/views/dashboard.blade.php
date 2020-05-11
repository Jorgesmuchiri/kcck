
@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">business_center

</i>
              </div>
              <p class="card-category">Enquiries</p>
              <h3 class="card-title">{{$enquiries}}
                <small></small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                    <a href="{{ route('enquiries.index') }}" class="btn btn-sm btn-primary">{{ __('View More') }}</a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">business_center

</i>
              </div>
              <p class="card-category">Partners</p>
              <h3 class="card-title">{{$partners}}
                <small></small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                    <a href="{{ route('partner.index') }}" class="btn btn-sm btn-primary">{{ __('View More') }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Courses</p>
              <h3 class="card-title">{{$courses}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                    <a href="{{ route('courses.index') }}" class="btn btn-sm btn-primary">{{ __('View More') }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Users</p>
              <h3 class="card-title">10</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                      <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('View More') }}</a>
              </div>
            </div>
          </div>
        </div>


         <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">calendar_today</i>
              </div>
              <p class="card-category">Events</p>
              <h3 class="card-title">{{$events}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                      <a href="{{ route('events.index') }}" class="btn btn-sm btn-primary">{{ __('View More') }}</a>
              </div>
            </div>
          </div>
        </div>
      
      </div>
<!--       <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Email Subscriptions</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush