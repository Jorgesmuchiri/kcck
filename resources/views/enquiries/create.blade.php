@extends('layouts.app', ['activePage' => 'enquiries', 'titlePage' => __('Enquiries')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('enquiries.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data" >
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('New Enquiry') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('enquiries.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                                   <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                   <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="email" name="email" id="email" placeholder="{{ __('Email') }}" value="" required />
                      @if ($errors->has('email'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Phone No') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="text" name="phone_no" id="input-password" placeholder="{{ __('Phone No') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                 <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Country') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" input type="text" name="country" id="input-country" placeholder="{{ __('Country') }}" value="" required />
                      @if ($errors->has('country'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('country') }}</span>
                      @endif
                    </div>
                  </div>
                </div>



                    <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Course Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="text" name="course" id="input-password" placeholder="{{ __('Course Name') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-intake">{{ __(' Intake') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('intake') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('intake') ? ' is-invalid' : '' }}" input type="text" name="intake" id="input-intake" placeholder="{{ __('Intake') }}" value="" required />
                      @if ($errors->has('intake'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('intake') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                     <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-intake">{{ __(' Advert') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('advert') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('advert') ? ' is-invalid' : '' }}" input type="text" name="advert" id="input-advert" placeholder="{{ __('Advert') }}" value="" required />
                      @if ($errors->has('advert'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('advert') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                   <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-enquiry_date">{{ __(' Enquiry Date') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('enquiry_date') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('enquiry_date') ? ' is-invalid' : '' }}" input type="text" name="enquiry_date" id="enquiry_date" placeholder="{{ __('Enquiry Date') }}" value="" required />
                      @if ($errors->has('enquiry_date'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('enquiry_date') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                   
                   <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-intake">{{ __(' Comment') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('advert') ? ' has-danger' : '' }}">
                     <textarea id="w3mission" rows="4" cols="50" class="form-control{{ $errors->has('enquiry_date') ? ' is-invalid' : '' }}"        placeholder="Comment" value="" required>

</textarea>
                      @if ($errors->has('advert'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('advert') }}</span>
                      @endif
                    </div>
                  </div>
                </div>


                       
     
                          


                             

                              <!--   <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Day of the week') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="text" name="day_of_the_week" id="day_of_the_week" placeholder="{{ __('Day of the Week') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div> -->
                             

                                 
                
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection