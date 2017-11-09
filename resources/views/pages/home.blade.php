@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form id="form1">
            <input type="text" id="TextBox1"/>&nbsp;&nbsp;&nbsp;
            <input type="button" value="CheckNumber" onclick="IsEven()"/>
            </form>

            <table style="border:1px solid black; font-family:Arial">
                <tr>
                    <td>First Number</td>
                    <td><input type="text" placeholder="first" id="first"/></td>
                </tr>
                <tr>
                    <td>Second Number</td>
                    <td><input type="text" placeholder="second" id="second"/></td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td><input type="text" placeholder="result" id="result"/></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="button" value="Add" id="btnAdd" onclick="ResultAdd()"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
