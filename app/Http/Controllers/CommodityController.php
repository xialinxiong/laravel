<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommodityController extends Controller
{
    //详情
    public function yi(Request $request,$id)
    {
        //查找一条
        $commodity=Commodity::find($id);
        DB::table("commodities")->where("id",$id)->increment("frequency",1);
        return view("/commodity/yi",compact("commodity"));
    }
    //显示
    public function index()
    {
        $data=DB::table("commodities")
            ->join("parts","parts.id","=","commodities.part_id")
            ->select("commodities.*","parts.lei")
            ->get();
//      dd($data);
        return view("/commodity/index",compact("data"));

    }

    //添加
    public function add(Request $request)
    {
        if($request->isMethod("post")){
//            dd($request->post());
            $this->validate($request,[
                "name"=>"required",
                "price"=>"required",
                "frame"=>"required"
            ]);
            Commodity::create($request->post());

            //返回
            session()->flash("success","添加成功");
            return redirect("/commodity/index");
        }

        $fl=Part::all();
//        dd($fl);
        return view("/commodity/add",compact("fl"));
    }

    //编辑
    public function edit(Request $request,$id)
    {
        //查找一条
        $commodity=Commodity::find($id);

        if($request->isMethod("post")){
//            dd($request->post());
            $this->validate($request,[
                "name"=>"required",
                "price"=>"required",
                "frame"=>"required"
            ]);
            $commodity->update($request->post());
            //返回
            session()->flash("success","修改成功");
            return redirect("/commodity/index");
        }
        //查找从表全部
        $fl=Part::all();
        return view("/commodity/edit",compact("commodity","fl"));
    }


    //删除
    public function del(Request $request,$id)
    {
        //查询一条
        $commodity=Commodity::find($id);
        $commodity->delete();
        return redirect("/commodity/index");
    }


}
