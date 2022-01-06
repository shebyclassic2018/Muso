@extends('template.links')
@section('adminForm')
<div class="add-container ht-100 pos-rel">
    <div class="row pad-15">
        <div class="flex-1 flex-center"><button class="btn btn-blue ministry-btn" type="button">Ministry </button></div>
        <div class="flex-1 flex-center"><button  class="btn btn-red faculty-btn" type="button">Faculty </button></div>
        <div class="flex-1 flex-center"><button  class="btn btn-green duration-btn" type="button">Duration </button></div>
    </div>
    <div class="add-main pos-rel ">
        <div class="row">{{ session('add_alert') }}</div>
        <!-- MINISTRY TABLE -->
        <div class="ministry ht-100 flow-y-auto wt-100">
            <div class="row pad-15">
                <div class="flex-1">MINISTRY TABLE</div>
                <form method="POST" action="ministry_post" class="flex-1 align-right ministry_form">
                    @csrf
                    
                    <input type="text" placeholder="Enter Ministry" name="m_name" class="new_ministry">
                    <button type="submit" class="btn"><span class="fa fa-save"></span> Save</button>
                </form>
            </div>
            <table style="width:80%;margin:auto;">
                <tr>
                    <th>S/No</th>
                    <th>MINISTRY NAME</th>
                    <th>ACTION</th>
                </tr>
                @foreach($ministry as $min)
                <tr>
                    <td align=center>{{ $i++ }}</td>
                    <td align=center>{{ $min->m_name }}</td>
                    <td align=center>
                        <button type="button" class="btn btn-blue"><span class="fa fa-edit"></span> Edit</button>
                        <button type="button" class="btn btn-red"><span class="fa fa-trash-o"></span> Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <!-- FACULTY TABLE -->
        <div class="faculty ht-100 flow-y-auto wt-100">
            <form method="POST" action="faculty_post" class="flex-1 align-right">
                @csrf
                <input type="text" name="f_name" placeholder="Enter Faculty Name" id="new_faculty">
                <input type="text" name="f_abbr" placeholder="Enter Abbreviate" id="new_abbr">
                <button type="submit" class="btn"><span class="fa fa-save"></span> Save</button>
            </form>
            <table style="width:80%;margin:auto;">
                <tr>
                    <th>S/No</th>
                    <th>FACULTY NAME</th>
                    <th>ACTION</th>
                </tr>
                @foreach($faculty as $fac)
                <tr>
                    <td align=center>{{ $j++ }}</td>
                    <td align=center>{{ $fac->faculty_name }} ({{ $fac->faculty_abbr }})</td>
                    <td align=center>
                        <button type="button" class="btn btn-blue"><span class="fa fa-edit"></span> Edit</button>
                        <button type="button" class="btn btn-red"><span class="fa fa-trash-o"></span> Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <!-- DURATION TABLE -->
        <div class="duration ht-100 flow-y-auto wt-100">
            <div class="row pad-15">
                <div class="flex-1">DURATION TABLE</div>
                <form method="POST" action="duration_post" class="flex-1 align-right">
                    @csrf
                    <input type="text" name="duration" placeholder="Enter Duration" id="new_duration">
                    <button type="submit" class="btn"><span class="fa fa-save"></span> Save</button>
                </form>
            </div>
            <table style="width:80%;margin:auto;">
                <tr>
                    <th>S/No</th>
                    <th>DURATION</th>
                    <th>ACTION</th>
                </tr>
                @foreach($duration as $dur)
                <tr>
                    <td align=center>{{ $k++ }}</td>
                    <td align=center>{{ $dur->timerange }}</td>
                    <td align=center>
                        <button type="button" class="btn btn-blue"><span class="fa fa-edit"></span> Edit</button>
                        <button type="button" class="btn btn-red"><span class="fa fa-trash-o"></span> Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop