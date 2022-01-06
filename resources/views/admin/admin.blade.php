@extends('template.admin-template')
@section('mainContentAdmin')
<div class="row ht-100 bg-black-color">
    <div class="left-side-bar wt-250  bg-black-color flow-y-auto">
        <div class="li ddd pointer padt-5 padl-15 black-underline mg-5 dashboard">Dashboard</div>
        <div class="ddd pointer  padb-5 padl-15 black-underline mg-5 dashboard-menu">
            <div class="ministry padl-15 padb-5"><span class="fa fa-angle-right"></span> <a href="/ministry" target="screen" style="color:#ddd">Ministry</a></div>
            <div class="facult padl-15 padb-5"><span class="fa fa-angle-right"></span> <a href="/faculty" target="screen" style="color:#ddd">Faculty</a></div>
            <div class="facult padl-15 padb-5"><span class="fa fa-angle-right"></span> <a href="/position" target="screen" style="color:#ddd">Position</a></div>
            <div class="leadership-year padl-15 padb-5"><span class="fa fa-angle-right"></span> <a href="/year" target="screen" style="color:#ddd">Leadership Year</a></div>
        </div>
        <div class="li ddd pointer padt-5 padb-5 padl-15 black-underline mg-5 our-site">Our site</div>
        <div class="li ddd pointer padt-5 padb-5 padl-15 black-underline mg-5 leader-form">Leaders</div>
        <div class="li ddd pointer padt-5 padb-5 padl-15 black-underline mg-5 event">Events</div>
        
        <div class="li ddd pointer padt-5 padb-5 padl-15 black-underline mg-5 galleryForm">Gallery</div>
        <div class="li ddd pointer padt-5 padb-5 padl-15 black-underline mg-5">Suggestion box</div>
        <div class="li ddd pointer padt-5 padb-5 padl-15 black-underline mg-5 news">News & Updates</div>
    </div>
    <div class="right-side-bar ht-100 flex-1 bg-fff">
        <iframe class="ht-100 wt-100" src="/" frameborder="0" name="screen"></iframe>
    </div>
</div>
@stop 

