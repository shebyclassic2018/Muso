@extends('template.links')
@section('adminForm')
<div class="ministry-page">
<div class="row">{{ session('pos-alert') }}</div>
        <!-- FACULTY TABLE -->
        <div class="position ht-100 flow-y-auto wt-100">
            <div class="row pad-15">
                <div class="flex-1"><h1>POSITION</h1></div>
            </div>
            <form method="POST" action="/update-pos" class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
                @csrf
                <h3>Add Position</h3><br>
                <input type="text" placeholder="Enter Position" name="pos" class="wt-100" value="{{ session('pos') }}"><br><br>
                <select name="year" id="" class="wt-100">
                    <option value="none"> -- Choose Year --</option>
                    @foreach ($year as $yr)
                        <option value="{{ $yr->id }}"> {{ $yr->timerange }} </option>
                    @endforeach
                </select><br><br>
                <input type="hidden" name="id" value="{{ session('pos_id') }}">
                <div class="align-right">
                    <a href="/position" class="btn bold">&times; Cancel</a>
                    <button type="submit" class="btn btn-blue"><span class="fa fa-edit"></span> Update</button>
                </div>
            </form>
            <table style="" class="ministry-table" cellspacing=0>
                <tr>
                    <th>S/No</th>
                    <th>POSITION</th>
                    <th>ACTION</th>
                </tr>
                @foreach($position as $pos)
                <tr>
                    <td align=center>{{ $i++ }}</td>
                    <td>{{ $pos->pos}}</td>
                    <td align=center>
                        <a href="/edit-pos/{{ $pos->id }}" class=""><span class="fa fa-edit"></span> Edit</a>&nbsp;&nbsp;
                        <a href="/delete-pos/{{ $pos->id }}" class="txt-red bold"><span class="fa fa-trash-o"></span> Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
</div>
@stop
