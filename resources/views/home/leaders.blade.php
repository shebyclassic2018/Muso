@extends('template.lr-bars')
@section('mainContentLeaders')
<h1 class="row pad-15 underline ">
    <div class="flex-1">LEADERS BOARD - {{"2020/2021"}}</div>
    <div><input type="search" placeholder="Search"></div>
</h1>
    <div class="row leader-board-content">
        <div class="left-side-bar wt-220 bg-black-color pad-5">
            @foreach($duration as $dur)
                <div class="underline-333"><button type="button" class="btn wt-100 mg-auto" value="{{ $dur->id }}"><a href="/leaders/{{ $dur->id }}" class="btn mg-auto">{{ $dur->timerange }}</a></button></div>
            @endforeach
        </div>
        <div class="right-side-bar bg-ddd-color flex-1 flow-y-auto pad-15">
            <!-- <================ LEADER CARD ================> -->
            
            <div class="grid-auto">
                @foreach($leaders as $lea)
                <div class="leader-card mg-5">
                    <div class="profile-picture">
                        <img src="{{ URL::to('file/passport/' . $lea->passport) }}" alt="Image failed to open" sizes="" srcset="">
                    </div>
                    <div class="leader-details ">
                        <div class="top-details align-center pad-5 bold">
                            <span class="leader-pos">PRESIDENT</span><br>
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
@stop