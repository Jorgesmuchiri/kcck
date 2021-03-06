

@extends('layouts.app', ['activePage' => 'enquiries', 'titlePage' => __('Enquiries')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Enquiries') }}</h4>
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


 
  @if(Session::has('success'))
  <script type="text/javascript">
    swal({
      title:'Success!',
      text:"{{Session::get('success')}}",
      timer:5000,
      type:'success'
    }).then((value) => {
       //location.reload();
   }).catch(swal.noop);
</script>
@endif
                <div class="row">
                           
                  <div class="col-12 text-right">
                    <a href="{{ route('enquiries.create') }}"  class="btn btn-sm btn-success">{{ __('Add Enquiry') }}</a>
                    <a href="upload" class="btn btn-sm btn-primary">{{ __('Upload Enquiries') }}</a>
                  </div>



                  

     
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('Name') }}
                      </th>
                      <th>
                        {{ __('Email') }}
                      </th>
                      <th>
                        {{ __('Phone No') }}
                      </th>
                     

                           <th>
                        {{ __('Message') }}
                      </th>
          

                          <th>
                        {{ __('Actions') }}
                      </th>
                    
               
                    </thead>
                    <tbody>
                        @foreach($Enquiries as $enquiry)
                        <tr>
                          <td>
                         {{ $enquiry->name }}
                          </td>
                          <td>
                          {{ $enquiry->email }}
                          </td>

                          <td>
                          {{ $enquiry->phone }}
                          </td>
                          <td>
                          {{ $enquiry->message }}
                          </td>
                         

                                                   
                        
                          <td>
                            
                             <td class="td-actions text-right">

                            @if ($enquiry->id )
                              <form action="{{ route('enquiries.destroy', $enquiry) }}" method="post">
                                  @csrf
                                  @method('delete')
                              
                                  <a rel="tooltip" class="btn btn-sm btn-success" href="{{ route('enquiries.edit', $enquiry->id) }}" data-original-title="" title="">Review
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this enquiries?") }}') ? this.parentElement.submit() : ''">Delete
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                            @else
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('enquiries.edit',$enquiry->id) }}" data-original-title="" title="">
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