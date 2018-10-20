@extends("layouts.main")

@section("content")
    <form  action="/commodity/edit/{{$commodity->id}}" method="post" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail3" value="{{$commodity->name}}" placeholder="名字">
        </div>
        <div class="form-group">
            <select name="part_id" class="form-control">
                @foreach($fl as $fls)
                    <option value="{{$fls->id}}" <?php if($commodity->part_id==$fls->id) echo "selected"?>>{{$fls->lei}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" name="price" value="{{$commodity->price}}" placeholder="价格">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" name="frame" value="{{$commodity->frame}}"  placeholder="1上架0不上架">
        </div>

        <button type="submit" class="btn btn-default">修改</button>
    </form>




@endsection