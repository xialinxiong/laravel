@extends("layouts.main")

@section("content")
    <form  action="/commodity/add" method="post" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail3" value="{{old("name")}}" placeholder="名字">
        </div>
        <div class="form-group">
            <select name="part_id" class="form-control">
                @foreach($fl as $fls)
                    <option value="{{$fls->id}}">{{$fls->lei}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" name="price" value="{{old("price")}}" placeholder="价格">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" name="frame" value="{{old("frame")}}"  placeholder="1上架0不上架">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="hidden" class="form-control" name="frequency" value="0" placeholder="浏览次数">
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>




@endsection