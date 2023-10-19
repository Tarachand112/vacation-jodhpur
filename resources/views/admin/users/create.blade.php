@extends('layouts.admin')

 @section('title' , 'Microlent Property')

@section('content')
    <!-- Main Content -->

    <div class="main-content">
        <section class="section">
            <div class="section-body">
        <a href="{{ route('city.list')   }}"><button type="button" class="btn btn-primary">
          <span class="fas fa-arrow-left"></span>   Back </button></a>
        <br>
        <br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
 
                            <div class="card-header">
                                <h4>Add City</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('city.store') }}"
                                onsubmit="return lettersAndSpaceCheck()">
                                    {{ @csrf_field() }}

                                    @if (Session::has('success'))
                                        @include('includes.form-success')
                                    @endif

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Country Name 
                                          <span id="asterisk">*</span></label>
                                        <div class="col-sm-12 col-md-7">
                                          <select class="form-control selectric form-select" id="page" name="country_id">
                                            @foreach($country as $value)
                                               <option value="{{ $value->id }}"
                                                @if (old('country_id') ==$value->id) selected  @endif 
                                                 >{{ $value->country_name}}</option>
                                            @endforeach
                                        
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">State Name 
                                          <span id="asterisk">*</span></label>
                                        <div class="col-sm-12 col-md-7">
                                          <select class="form-control selectric form-select" id="page" name="state_id">
                                            @foreach($state as $value)
                                               <option value="{{ $value->id }}" 
                                                @if (old('state_id') ==$value->id) selected  @endif 
                                                >{{ $value->state_name}}</option>
                                            @endforeach
                                        
                                          </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City
                                            Name <span id="asterisk">*</span></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" placeholder="Enter city name" class="form-control @error('city_name') is-invalid @enderror" name="city_name"
                                            value="{{ old('city_name') }}"
                                            maxlength="30" id="name">
                                            <strong id="msg" > </strong>


                                            @error('city_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>    
                                    </div>
 

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary">  Save  </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label>
                    <span class="control-label p-r-20">Mini Sidebar</span>
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <div class="disk-server-setting m-b-20">
                    <p>Disk Space</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="80%" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>26% remaining</small>
                      </span>
                    </div>
                  </div>
                  <div class="disk-server-setting">
                    <p>Server Load</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="58%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>Highly Loaded</small>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div> --}}
    </div>
@endsection

 
@section('script')
<script> 
  function lettersAndSpaceCheck()
  {
 
     var name =$('#name').val();
     if(/^[A-z ]+$/.test(name)== false)
       {
        const style = document.createElement('style');
        style.innerHTML = ` #name { border-color:#dc3545; } #msg{  color: #dc3545; }
                   #msg::after{  content: "Invalid  city name."; }`;
      
        document.head.appendChild(style);
        return false;
       }
  }    
  </script>

@endsection