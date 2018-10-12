@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard </div>

                <!--
                    https://bootsnipp.com/snippets/X2Wlp
                -->
                <div class="card-body">
                    <h3>Profiles Status</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card profile-card-1">
                                    <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="profile-sample1" class="background"/>
                                    <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="profile-image" class="profile"/>
                                    <div class="card-content">
                                        <h2 class="white">USER PROFILE<!--<small>Active</small>--></h3>
                                        <div class="icon-block">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"> <i class="fab fa-twitter"></i></a>
                                            <a href="#"> <i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"> <i class="fas fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--<p class="mt-3 w-100 float-left text-center"><strong>USER PROFILE</strong></p>-->
                                <p class="mt-3 w-100 float-left text-center"><button class="btn btn-danger">Deactivate</button></p>
                            </div>
                            <div class="col-md-4">
                                <div class="card profile-card-1">
                                    <img src="https://i.pinimg.com/originals/75/70/cd/7570cdbe628f224732243ea80980612e.jpg" alt="profile-sample1" class="background"/>
                                    <i class="fas fa-heart profile fa-profile"></i>
                                    <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="profile-image" class="profile"/>
                                    
                                    <div class="card-content">
                                    <h2 class="white">PETSITTER PROFILE<!--<small>Inactive</small>--></h3>
                                    <div class="icon-block">
                                            <a href="#"><i class="fab fa-facebook-f fa-10x"></i></a>
                                            <a href="#"> <i class="fab fa-twitter fa-10x"></i></a>
                                            <a href="#"> <i class="fab fa-google-plus-g fa-10x"></i></a></div>
                                    </div>
                                </div>
                                <p class="mt-3 w-100 float-left text-center">
                                    <button class="btn btn-secondary" disabled>Not Available Yet</button>
                                    <button class="btn btn-info">GO !</button>
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="card profile-card-1">
                                    <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                    <i class="fas fa-paw fa-3x profile fa-profile ppfanmhg"></i>
                                    <div class="card-content">
                                    <h2 class="white">SHELTER PROFILE<!--<small>Inactive</small>--></h3>
                                    <div class="icon-block">
                                        
                                        @if(count($shelter) > 0)
                                            
                                            @if($shelter[0]->soc_facebook)
                                                <a href="{{ $shelter[0]->soc_facebook }}" target="_blank"><i class="fab fa-facebook-f fa-10x"></i></a>
                                            @endif

                                            @if($shelter[0]->soc_twitter != "")
                                                <a href="{{ $shelter[0]->soc_twitter }}" target="_blank"> <i class="fab fa-twitter fa-10x"></i></a>
                                            @endif

                                            @if($shelter[0]->soc_google_plus != "")
                                                <a href="{{ $shelter[0]->soc_google_plus }}" target="_blank"> <i class="fab fa-google-plus-g fa-10x"></i></a></div>
                                            @endif

                                        @else
                                            <a href="#"> <i class="fas fa-angle-down"></i></a></div>
                                        @endif

                                    </div>
                                </div>
                                <p class="mt-3 w-100 float-left text-center">
                                    @if(count($shelter) > 0)
                                        <a href="{{ route('visitAdminShelter') }}" class="btn btn-info" role="button">{{ __('Admin Panel') }}</a>
                                    @else
                                        <a href="{{ route('createStep1') }}" class="btn btn-success" role="button">{{ __('Activate') }}</a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                        <h3>Dump Status</h3>
                        <div class="container">
                            <div class="row">
                                
                                <?php
                                    //var_dump($shelter[0]);
                                    //var_dump($shelter[0]->soc_facebook);
                                    var_dump(count($shelter));
                                ?>
                                
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
