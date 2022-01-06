@extends('template.links')
@section('adminForm')
<div class="ministry-page">
<div class="row">{{ session('min-alert') }}</div>
        <!-- MINISTRY TABLE -->
        <div class="ministry ht-100 flow-y-auto wt-100">
            <div class="row pad-15">
                <div class="flex-1"><h1>MINISTRY</h1></div>
            </div>
            <form method="POST" action="/add_ministry" class="form-box bg-ddd pad-15 ht-100 flow-y-auto">
                @csrf
                <h3>New Ministry</h3><br>
                <input type="text" placeholder="Enter Ministry" name="m_name" class="new_ministry wt-100"><br><br>
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
            <table style="" class="ministry-table" cellspacing=0>
                <tr>
                    <th>S/No</th>
                    <th>MINISTRY NAME</th>
                    <th>ACTION</th>
                </tr>
                @foreach($ministry as $min)
                <tr>
                    <td align=center>{{ $i++ }}</td>
                    <td>{{ $min->m_name }}</td>
                    <td align=center>
                        <a href="/edit-ministry/{{ $min->id }}" class=""><span class="fa fa-edit"></span> Edit</a>&nbsp;&nbsp;
                        <a href="/delete-ministry/{{ $min->id }}" class="txt-red bold"><span class="fa fa-trash-o"></span> Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
</div>
@stop
