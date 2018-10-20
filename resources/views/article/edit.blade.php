@extends("layouts.main")

@section("content")
    <form  action="/article/edit/{{$article->id}}" method="post" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" name="name" value="{{$article->name}}" id="exampleInputEmail3" placeholder="名字">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" name="content" value="{{$article->content}}"  id="exampleInputPassword3" placeholder="密码">
        </div>
        <div class="form-group">

            <select name="fenlei_id" class="form-control">
                @foreach($fl as $fls)
                    <option value="{{$fls->id}}" <?php if($article->fenlei_id==$fls->id) echo "selected"?>>    {{$fls->fenlei}}    </option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-default">编辑</button>
    </form>




@endsection