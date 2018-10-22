@extends("layouts.main")

@section("content")
    <form  action="/article/add" method="post" class="form-inline">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail3" value="{{old("name")}}" placeholder="作者">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="text" class="form-control" name="content" value="{{old("content")}}" id="exampleInputPassword3" placeholder="内容">
        </div>
        <div class="form-group">

            <select name="fenlei_id" class="form-control">
                @foreach($fl as $fls)
                    <option value="{{$fls->id}}">{{$fls->fenlei}}</option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-default">添加</button>
    </form>




@endsection