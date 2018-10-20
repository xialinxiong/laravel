@extends("layouts.main")

@section("content")
    <form  action="/fenlei/add" method="post" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" name="fenlei" id="exampleInputEmail3" value="{{old("fenlei")}}" placeholder="分类">
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>




@endsection