

@extends('layouts.app', ['activePage' => 'timetable', 'titlePage' => __('Timetable')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Jobs') }}</h4>
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
                            @if(Auth::user()->role = 'Worker')
                  <div class="col-12 text-right">
                    <a href="{{ route('timetable.create') }}" class="btn btn-sm btn-primary">{{ __('Create Job') }}</a>
                  </div>

                     @endif
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Company Name') }}
                      </th>
                      <th>
                        {{ __('Title') }}
                      </th>
                      <th>
                        {{ __('Category') }}
                      </th>
                                            <th>
                        {{ __('Expertise Level') }}
                      </th>
          
                          <th>
                        {{ __('Required Workers') }}
                      </th>
           
                         <th>
                        {{ __('Rate') }}
                      </th>
                         <th>
                        {{ __('Contact Person') }}
                      </th>
                     <th>
                        {{ __('Phone') }}
                      </th>
                    
               
                    </thead>
                    <tbody>
                        @foreach(  $jobs as $job)
                        <tr>
                          <td>
                         {{ $job->company_name }}
                          </td>
                          <td>
                          {{ $job->title }}
                          </td>

                          <td>
                          {{ $job->category }}
                          </td>
                          <td>
                          {{ $job->expertise_level }}
                          </td>
                          <td>
                         {{ $job->no_of_workers }}
                         </td>
                          <td>
                         {{ $job->rate }}
                         </td>
                           
                          <td>
                         {{ $job->fname }}  {{ $job->lname }} 
                          </td>
                         <td>
                         {{ $job->phone }}
                         </td>



                                                   
                        
                          <td>
                            
                             <td class="td-actions text-right">

                            @if ($job->id )
                              <form action="{{ route('timetable.destroy', $job) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('timetable.edit', $job->id) }}" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this timetable?") }}') ? this.parentElement.submit() : ''">
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