@extends('tamplate.template')

@section('content')
<br><br>
    <table  class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $list)
                <tr>
                    @foreach ($list as $item)
                        <td>{{$item}}</td>
                    @endforeach
                </tr> 
            @endforeach
        </tbody>
    </table>
    
    
    <br>
    <br>

@endsection

{{-- <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($data as $key => $value)
        <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['email']}}</td>
        </tr> 
    @endforeach
</table> --}}