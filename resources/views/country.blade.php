

@extends('layouts.app', ['activePage' => 'adverts', 'titlePage' => __('Nationality Representation')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Nationality Representation') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                          
              <!--     <div class="col-12 text-right">
                    <a href="{{ route('programs.create') }}" class="btn btn-sm btn-primary">{{ __('Add Program') }}</a>
                  </div> -->

                   
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                  
                      <th>
                        {{ __('Total') }}
                      </th>
                       
                    
               
                    </thead>
                    <tbody>
                        @foreach( $country as $job)
                        <tr>
                          <td>
                         {{ $job->country }}
                          </td>
                          <td>
                          {{ $job->Total }}
                          </td>

                         
                         <!--  -->
                        </tr>
                  @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection