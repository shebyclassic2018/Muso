@extends('template.links')
@section('adminForm')
<div class="ministry-page">
<div class="row">{{ session('add_alert') }}</div>
        <!-- FACULTY TABLE -->
        <div class="faculty ht-100 flow-y-auto wt-100">
            <div class="row pad-15">
                <div class="flex-1"><h1>FACULTY</h1></div>
            </div>
            <form method="POST" action="/update-faculty" class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
                @csrf
                <h3>New Faculty</h3><br>
                <input type="text" placeholder="Enter Faculty Name" name="f_name" value="{{ session('f_name') }}" class="wt-100"><br><br>
                <input type="text" placeholder="Enter Faculty Abbreviation" name="f_abbr" value="{{ session('f_abbr') }}"  class="wt-100"><br><br>
                <input type="hidden" name="id" value="{{ session('f_id') }}">
                <div class="align-right">
                    <a href="/faculty" class="btn bold">&times; Cancel</a>
                    <button type="submit" class="btn btn-blue"><span class="fa fa-edit"></span> Update</button>
                </div>
            </form>
            <table style="" class="ministry-table" cellspacing=0>
                <tr>
                    <th>S/No</th>
                    <th>FACULTY NAME</th>
                    <th>ACTION</th>
                </tr>
                @foreach($faculty as $fac)
                <tr>
                    <td align=center>{{ $i++ }}</td>
                    <td>{{ $fac->faculty_name }} ({{ $fac->faculty_abbr }})</td>
                    <td align=center>
                        <a href="/edit-faculty/{{ $fac->id }}" class=""><span class="fa fa-edit"></span> Edit</a>&nbsp;&nbsp;
                        <a href="/delete-faculty/{{ $fac->id }}" class="txt-red bold"><span class="fa fa-trash-o"></span> Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
</div>
@stop