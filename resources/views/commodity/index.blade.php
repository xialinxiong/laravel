@extends("layouts.main")

@section("content")
    <a href="/commodity/add" class="btn btn-success">添加</a>
    <a href="/part/index" class="btn btn-success">文章分类</a>
    <table class="table">
        <tr>
            <th>id</th>
            <th>名称</th>
            <th>分类</th>
            <th>价格</th>
            <th>上架</th>
            <th>浏览次数</th>
            <th>创建时间</th>
            <th>最后操作</th>

            <th>操作</th>
        </tr>
        @foreach($data as $datas)
            <tr>
                <td>{{$datas->id}}</td>
                <td>{{$datas->name}}</td>
                <td>{{$datas->lei}}</td>
                <td>{{$datas->price}}</td>
                <td><?php echo($datas->frame==0?"未上架":"已上架")?></td>
                <td>{{$datas->frequency}}</td>
                <td>{{$datas->created_at}}</td>
                <td>{{$datas->updated_at}}</td>

                <td>
                    <a href="/commodity/yi/{{$datas->id}}" class="btn btn-info">详情</a>
                    <a href="/commodity/edit/{{$datas->id}}" class="btn btn-info">编辑</a>
                    <a href="/commodity/del/{{$datas->id}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
            @endforeach
    </table>
    {{--{{$data->links()}}--}}
@endsection