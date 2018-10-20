@extends("layouts.main")

@section("content")
    <form  action="/fenlei/edit/{{$fenlei->id}}" method="post" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" name="fenlei" value="{{$fenlei->fenlei}}" id="exampleInputEmail3" placeholder="分类">
        </div>
        <button type="submit" class="btn btn-default">编辑</button>
    </form>




@endsection