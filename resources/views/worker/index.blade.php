


@extends('layouts.app', ['activePage' => 'application', 'titlePage' => __('Exams Application')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Registered Workers') }}</h4>
                <p class="card-category"> </p>
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
                    <a href="{{ route('worker.create') }}" class="btn btn-sm btn-primary">{{ __('Apply') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Phone') }}
                      </th>
                      <th>
                        {{ __('Email') }}
                      </th>
                       <th>
                        {{ __('County') }}
                      </th>
                       <th>
                        {{ __('District') }}
                      </th>
                       <th>
                        {{ __('Proffesion') }}
                      </th>
                        <th>
                        {{ __('C.V') }}
                      </th>
                       <th>
                        {{ __('I.D No') }}
                      </th>
                      <th>
                        {{ __('Good Conduct') }}
                      </th>

                      <th class="text-right">
                        {{ __('Actions') }}
                      </th>
                     
                    </thead>
                    <tbody>
                      @foreach($Worker as $employee)
                        <tr>
                          <td>
                            {{ $employee->fname }}           {{ $employee->lname }}
                          </td>
                          <td>
                            {{ $employee->phone }}
                          </td>
                            <td>
                            {{ $employee->email }}
                          </td>
                             <td>
                            {{ $employee->county }}
                          </td>
                           <td>
                            {{ $employee->district }}
                          </td>
                           <td>
                            {{ $employee->proffesion }}
                          </td>
                           <td>
                            {{ $employee->cv }}
                          </td>
                           <td>
                            {{ $employee->good_conduct }}
                          </td>
                           <td>
                            {{ $employee->id_no }}
                          </td>
                          

                          <td>
     <a href="{{ route('download', $employee->fname.'.pdf') }}" class="btn btn-sm btn-primary">{{ __('View') }}</a>
                          </td>
 @if(Auth::user()->role_id != 5)
                                                    <td class="td-actions text-right">
                            @if ($employee->id != auth()->id())
                              <form action="{{ route('user.destroy', $employee) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                 <a class="btn btn-primary" href="{{ route('application.edit',$employee->id) }}">Edit</a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                            @else
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('application.edit',$employee->id ) }}" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </a>
                            @endif
                                @endif
                          </td>
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