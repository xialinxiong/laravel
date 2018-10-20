@extends("layouts.main")

@section("content")
    <a href="/fenlei/add" class="btn btn-success">添加</a>
    <table class="table">
        <tr>
            <th>id</th>
            <th>fenlei</th>
            <th>操作</th>
        </tr>
        @foreach($fenlei as $fenleis)
            <tr>
                <td>{{$fenleis->id}}</td>
                <td>{{$fenleis->fenlei}}</td>
                <td>
                    <a href="/fenlei/edit/{{$fenleis->id}}" class="btn btn-info">编辑</a>
                    <a href="/fenlei/del/{{$fenleis->id}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
            @endforeach
    </table>
    {{$fenlei->links()}}
@endsection