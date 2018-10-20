@extends("layouts.main")

@section("content")
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
        </tr>
        {{--@foreach($commodity as $datas)--}}
            <tr>
                <td>{{$commodity->id}}</td>
                <td>{{$commodity->name}}</td>
                <td>{{$commodity->lei}}</td>
                <td>{{$commodity->price}}</td>
                <td><?php echo($commodity->frame==0?"未上架":"已上架")?></td>
                <td>{{$commodity->frequency}}</td>
                <td>{{$commodity->created_at}}</td>
                <td>{{$commodity->updated_at}}</td>

                <td>
                    <a href="/commodity/index" class="btn btn-info">返回</a>
                </td>
            </tr>
        {{--@endforeach--}}
    </table>
    {{--{{$data->links()}}--}}
@endsection