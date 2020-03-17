

@extends('layouts.app', ['activePage' => 'programs', 'titlePage' => __('Programs')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Programs') }}</h4>
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
                          
                  <div class="col-12 text-right">
                    <a href="{{ route('programs.create') }}" class="btn btn-sm btn-primary">{{ __('Add Program') }}</a>
                  </div>

                   
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                  
                      <th>
                        {{ __('Category') }}
                      </th>
                       
                    
               
                    </thead>
                    <tbody>
                        @foreach( $programs as $job)
                        <tr>
                          <td>
                         {{ $job->name }}
                          </td>
                          <td>
                          {{ $job->category }}
                          </td>

                          <td>
                            
                             <td class="td-actions text-right">

                            @if ($job->id )
                              <form action="{{ route('programs.destroy', $job) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('timetable.edit', $job->id) }}" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this program?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                            @else
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('timetable.edit',$job->id) }}" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </a>
                          
                               @endif
                          </td>
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