@extends("layouts.main")

@section("content")
    <a href="/article/add" class="btn btn-success">添加</a>
    <a href="/fenlei/index" class="btn btn-success">文章分类</a>
    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>content</th>
            <th>fenlei</th>
            <th>操作</th>
        </tr>
        @foreach($data as $datas)
            <tr>
                <td>{{$datas->id}}</td>
                <td>{{$datas->name}}</td>
                <td>{{$datas->content}}</td>
                <td>{{$datas->fenlei}}</td>

                <td>
                    <a href="/article/edit/{{$datas->id}}" class="btn btn-info">编辑</a>
                    <a href="/article/del/{{$datas->id}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
            @endforeach
    </table>
    {{--{{$data->links()}}--}}
@endsection