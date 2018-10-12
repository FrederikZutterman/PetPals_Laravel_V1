@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Shelter Profile - Step 1/3</div>

                    <div class="card-body">
                        {!! Form::open(['action'=> 'ProfileController@postCreateStep1', 'method' => 'POST' ]) !!}
                        
                        <div class="container">

                            <div class="row">
                                <div class="col-md-6">
                                    <h3><i class="fas fa-map-marker"></i> Name & Location <small> - (All Fields Are Required)</small></h3><br/>
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name :')}}
                                        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Shelter Name']) }}
                                    </div>
                                
                                    <div class="form-group">
                                        {{ Form::label('address1', 'Address Line 1 :')}}
                                        {{ Form::text('address2','', ['class' => 'form-control', 'placeholder' => 'Address Line 1']) }}
                                    </div>
                                
                                    <div class="form-group">
                                        {{ Form::label('address2', 'Address Line 2 :')}}
                                        {{ Form::text('address2', '', ['class' => 'form-control', 'placeholder' => 'Address Line 2']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h3><i class="fas fa-address-card"></i> Contact Information <small> - (Fields With '*' Are Required)</small></h3><br/>
                                    <div class="form-group">
                                            {{ Form::label('email', '*E-mail :')}}
                                            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
                                        </div>
                                
                                    <div class="form-group">
                                        {{ Form::label('cellular', 'Cellular :')}}
                                        {{ Form::text('cellular', '', ['class' => 'form-control', 'placeholder' => 'Cellular']) }}
                                    </div>
                                
                                    <div class="form-group">
                                        {{ Form::label('phone', '*Phone :')}}
                                        {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone']) }}
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-6">
                                    <h3><i class="fas fa-info-circle"></i> General Information <small> - (Fields With '*' Are Required)</small></h3><br/>
                                    <div class="form-group">
                                        {{ Form::label('description', '* Description :')}}
                                        {{ Form::textarea('description', 'Please write a short description ...', ['rows' => 7, 'class' => 'form-control', 'placeholder' => 'Description']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h3><i class="fas fa-business-time"></i> &nbsp;</h3><br/>
                                    <div class="form-group">
                                        {{ Form::label('opening_hours', '* Opening Hours :')}}
                                        {{ Form::textarea('opening_hours', "Mon: 09:00 - 12:00\nTue: 09:00 - 12:00\nWed: 09:00 - 12:00\nThu: 09:00 - 12:00\nFri: 09:00 - 12:00\nSat: 09:00 - 12:00\nSun: 09:00 - 12:00", 
                                            ['rows' => 7, 'class' => 'form-control', 'placeholder' => 'Opening Hours']) }}
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-md-6">
                                    <h3><i class="fas fa-briefcase"></i> Business Information <small> - (Fields With '*' Are Required)</small></h3><br />
                                    <div class="form-group">
                                        {{ Form::label('enterpreneur_no', '* Enterpreneur Number :')}}
                                        {{ Form::text('enterpreneur_no', '', ['class' => 'form-control', 'placeholder' => 'Enterpreneur Number']) }}
                                    </div>
            
                                    <div class="form-group">
                                        {{ Form::label('iban', 'IBAN :')}}
                                        {{ Form::text('iban', '', ['class' => 'form-control', 'placeholder' => 'IBAN Number']) }}
                                    </div>
            
                                    <div class="form-group">
                                        {{ Form::label('bic', 'BIC :')}}
                                        {{ Form::text('bic', '', ['class' => 'form-control', 'placeholder' => 'BIC']) }}
                                    </div>
                                </div>
        
                                <div class="col-md-6">
                                    <h3><i class="fab fa-facebook-square"></i> Social Media Information</h3><br />
                                    <div class="form-group">
                                        {{ Form::label('facebook', 'Facebook :')}}
                                        {{ Form::text('facebook', '', ['class' => 'form-control', 'placeholder' => 'Facebook']) }}
                                    </div>
            
                                    <div class="form-group">
                                        {{ Form::label('twitter', 'Twitter :')}}
                                        {{ Form::text('twitter', '', ['class' => 'form-control', 'placeholder' => 'Twitter']) }}
                                    </div>
            
                                    <div class="form-group">
                                        {{ Form::label('google_plus', 'Google Plus :')}}
                                        {{ Form::text('google_plus', '', ['class' => 'form-control', 'placeholder' => 'Google Plus']) }}
                                    </div>
                                </div> 
                            </div>
                            <br /><br />
                            <div class="row">
                                <!--<div class="col-md-4">&nbsp;</div>-->
                                <div class="col-md-12 center-block text-center">
                                    {{ Form::submit('Save This Information', ['class' => 'btn btn-info']) }}
                                    {{ Form::reset('Reset', ['class' => 'btn btn-warning']) }}
                                </div>
                                <!--<div class="col-md-4">&nbsp;</div>-->
                            </div>
                            <br /><br />
                        </div>
                    
                        {!! Form::close() !!}
                    </div>                    
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
