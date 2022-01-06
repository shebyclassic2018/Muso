@extends('template.links')
@section('adminForm')
<div class="ministry-page">
<div class="row">{{ session('pos-alert') }}</div>
        <!-- FACULTY TABLE -->
        <div class="position ht-100 flow-y-auto wt-100">
            <div class="row pad-15">
                <div class="flex-1"><h1>POSITION</h1></div>
            </div>
            <form method="POST" action="/pos_post" class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
                @csrf
                <h3>Add Position</h3><br>
                <input type="text" placeholder="Enter Position" name="pos" class="wt-100"><br><br>
                <select name="year" id="" class="wt-100">
                    <option value="none"> -- Choose Year --</option>
                    @foreach ($year as $yr)
                        <option value="{{ $yr->id }}"> {{ $yr->timerange }} </option>
                    @endforeach
                </select><br><br>
                <div class="align-right">
                <button type="submit" class="btn btn-blue"><span class="fa fa-save"></span> Save</button>
                </div>
            </form>
            @foreach ($grouped_date as $year)

            <div class="pad-15"><h3>{{ $year->timerange }}</h3></div>
            <table style="" class="ministry-table" cellspacing=0>
                <tr>
                    <th>S/N</th>
                    <th>POSITION</th>
                    <th>ACTION</th>
                </tr>
                @foreach($position as $pos)
                   
                    @if($pos->lship_year == $year->year_id)
                    <tr>
                        <td align=center>{{ $i++ }}</td>
                        <td>{{ $pos->pos}}</td>
                        <td align=center>
                            <a href="/edit-pos/{{ $pos->id }}" class=""><span class="fa fa-edit"></span> Edit</a>&nbsp;&nbsp;
                            <a href="/delete-pos/{{ $pos->id }}" class="txt-red bold"><span class="fa fa-trash-o"></span> Delete</a>
                        </td>
                    </tr>
                    @endif

                @endforeach
            </table><br><br>
            @php
                $i = 1;
            @endphp
            @endforeach
        </div>
</div>
@stop
