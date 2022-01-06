@extends('template.links')
@section('adminForm')

<br>
<form class="admin-leader-form" method="POST" action="/register-leader" enctype="multipart/form-data" class="form">
    @csrf
    <!-- list of registered leader -->
    <div class="row leader-board-content ht-100">
        <div class="left-side-bar pad-5">
            @foreach($duration as $dur)
                <div class="underline-333"><button type="button" class="btn wt-100 mg-auto" value="{{ $dur->id }}"><a href="/leaders/{{ $dur->id }}" class="btn mg-auto">{{ $dur->timerange }}</a></button></div>
            @endforeach
        </div>
        <div class="right-side-bar bg-ddd-color flex-1 flow-y-auto pad-15 ht-100">
            <!-- <================ LEADER CARD ================> -->
            
            <div class="grid-auto">
                @foreach($leaders as $lea)
                <div class="leader-card mg-5">
                    <div class="profile-picture">
                        <img src="{{ URL::to('file/passport/' . $lea->passport) }}" alt="Image failed to open" sizes="" srcset="">
                    </div>
                    <div class="leader-details ">
                        <div class="top-details align-center pad-5 bold">
                            <span class="leader-pos">{{ $lea->pos}}</span><br>
                            <span class="leader-name">{{ $lea->name}}</span><br>
                            <span class="ministry">{{ $lea->m_name}}</span>
                        </div>
                        <div class="down-details pad-15">
                        <div class="row">
                            <div class="flex-1 align-center">{{ $lea->faculty_name}} <br> {{ $lea->faculty_abbr}}</div>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- <================ LEADER CARD ================> -->
        </div>
    </div>



    <!-- Registration form -->
    <div class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
    <div class="pad-lr-15"><h3>Register</h3></div>
        <br>
        <div class="">
            <div class="flex-1 flex-center"><input type="text" name="fname" id="" placeholder="First Name"></div><br>
            <div class="flex-1 flex-center"><input type="text" name="lname" id="" placeholder="Last Name"></div><br>
        </div>
        <div >
            <div class="flex-1 flex-center"><input type="text" name="phone" id="" placeholder="Phone number"></div><br>
            <div class="flex-1 flex-center"><input type="email" name="email" id="" placeholder="Email"></div><br>
        </div>
        <div >
            
            <div class="flex-1 flex-center">
                <select name="sex" id="" class="pad-5">
                    <option value="none">-- Choose sex --</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div><br>
            <div class="flex-1 flex-center">
                <select name="duration" id=""  class="pad-5">
                        <option value="none">-- Choose duration --</option>
                        @foreach($duration as $dur)
                            <option value="{{ $dur->id }}">{{ $dur->timerange }}</option>
                        @endforeach
                </select>
            </div>
            <br>
        </div>
        <div >
            <div class="flex-1 flex-center">
            <select name="fac_id" id=""  class="pad-5">
                    <option value="none">-- Choose faculty --</option>
                    @foreach($faculty as $fac)
                        <option value="{{ $fac->id }}">{{ $fac->faculty_name }} ({{$fac->faculty_abbr}})</option>
                    @endforeach
                </select>
            </div><br>
            <div class="flex-1 flex-center">
            <select name="min_id" id=""  class="pad-5">
                    <option value="none">-- Choose Ministry --</option>
                    @foreach($ministry as $min)
                        <option value="{{ $min->id }}">{{ $min->m_name }}</option>
                    @endforeach
                </select>
            </div>
            <br>

            <div class="flex-1 flex-center">
                <select name="position" class="pad-5">
                    <option value="none">-- Choose position --</option>
                    @foreach($position as $pos)
                        <option value="{{ $pos->id }}">{{ $pos->pos }}</option>
                    @endforeach
                </select>
            </div>
            <br>
        </div>
        <div >
            <div class="flex-1">
            <div class="flex-center">
                <input type="file" name="passport" id="passport">
                <label for="passport" class="btn btn-blue round-5"><span class="fa fa-photo"></span> Choose passport</label>
            </div>
            <div class="flex-center">
                <label><small id="filename" class="alert-display bold"></small></label>
            </div><br>
                
            </div>
            <div class="flex-1 flex-center">
            <input type="file" name="cv" id="cv">
                <label for="cv" class="btn btn-green round-5"><span class="fa fa-file"></span> Upload CV</label>
            </div>
        </div>
        <br>
        <div class="row row-with-passport">
            <div class="flex-1"></div>
            <div class="passport flex-center"><img id="img" src="{{ asset('image/bg1.jpg') }}" alt=""></div>
        </div>
        <br>
        <div class="row">
            <div class="flex-1 align-right">
                <button class="btn btn-blue round-5">Register</button>
            </div>
        </div>
        <div class="row">
            <div class="alert-info">{{ session('alert') }}</div>
        </div><br><br>
        <div class="row"><a href="/leader-action"><span class="fa fa-eye"></span> Leader list</a></div>
    </div>
</div>
@stop