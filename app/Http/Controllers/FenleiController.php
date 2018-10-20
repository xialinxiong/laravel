<?php

namespace App\Http\Controllers;
use App\Models\Fenlei;
use Illuminate\Http\Request;

class FenleiController extends Controller
{
//    找到所有数据
    public function index()
    {
        //找到全部

        $fenlei = Fenlei::paginate(2);
        //显示并返回数据
        return view("fenlei.index", compact("fenlei"));
    }

    //添加
    public function add(Request $request)
    {

        if ($request->isMethod("post")) {
            $this->validate($request, [
                "fenlei" => "required",

            ]);


            Fenlei::create($request->post());

            //返回
            session()->flash("success", "添加成功");
            return redirect("/fenlei/index");

        }


        return view("fenlei.add");

    }
//编辑
    public function edit(Request $request,$id)
    {
        //查找一条
        $fenlei=Fenlei::find($id);

        if($request->isMethod("post")){
            $this->validate($request,[
                "fenlei"=>"required",

            ]);
            $fenlei->update($request->post());

            //返回
            session()->flash("success","修改成功");
            return redirect("/fenlei/index");

        }

        return view("fenlei.edit",compact("fenlei"));

    }

    //删除


    public function del(Request $request,$id)
    {
        //查找一条
        $fenlei = Fenlei::find($id);

        $fenlei->delete();
//返回
        return redirect("/fenlei/index");
    }



}
