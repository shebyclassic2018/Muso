@extends('template.links')
@section('adminForm')
<div class="ministry-page">
<div class="row">{{ session('year-alert') }}</div>
        <!-- FACULTY TABLE -->
        <div class="year ht-100 flow-y-auto wt-100">
            <div class="row pad-15">
                <div class="flex-1"><h1>LEADERSHIP YEAR</h1></div>
            </div>
            <form method="POST" action="/add-year" class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
                @csrf
                <h3>New leadership year</h3><br>
                <input type="text" placeholder="Enter Year" name="year" class="wt-100"><br><br>
                <div class="align-right">
                <button type="submit" class="btn btn-blue"><span class="fa fa-save"></span> Save</button>
                </div>
            </form>
            <table class="ministry-table" cellspacing=0>
                <tr>
                    <th>S/No</th>
                    <th>YEAR</th>
                    <th>ACTION</th>
                </tr>
                @foreach($year as $yr)
                <tr>
                    <td align=center>{{ $i++ }}</td>
                    <td>{{ $yr->timerange }}</td>
                    <td align=center>
                        <a href="/edit-year/{{ $yr->id }}" class=""><span class="fa fa-edit"></span> Edit</a>&nbsp;&nbsp;
                        <a href="/delete-year/{{ $yr->id }}" class="txt-red bold"><span class="fa fa-trash-o"></span> Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
</div>
@stop
