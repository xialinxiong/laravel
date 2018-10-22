<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\fenlei;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //显示
    public function index()
    {
      $data=DB::table("articles")
          ->join("fenleis","fenleis.id","=","articles.fenlei_id")
          ->select("articles.*","fenleis.fenlei")
          ->get();
//      dd($data);
      return view("/article/index",compact("data"));

    }

    //添加
    public function add(Request $request)
    {
        if($request->isMethod("post")){
//            dd($request->post());
        $this->validate($request,[
            "name"=>"required",
            "content"=>"required"
        ]);
        Article::create($request->post());

        //返回
        session()->flash("success","添加成功");
        return redirect("/article/index");
    }

        $fl=Fenlei::all();
//        dd($fl);
        return view("/article/add",compact("fl"));
    }


    //编辑
    public function edit(Request $request,$id)
    {
        //查找一条
        $article=Article::find($id);
        if($request->isMethod("post")){
//            dd($request->post());
            $this->validate($request,[
                "name"=>"required",
                "content"=>"required"
            ]);
            $article->update($request->post());
            //返回
            session()->flash("success","修改成功");
            return redirect("/article/index");
        }
      //查找从表全部
        $fl=Fenlei::all();
        return view("/article/edit",compact("article","fl"));
    }



     //删除
    public function del(Request $request,$id)
    {
        //查询一条
        $article=Article::find($id);
        $article->delete();
        return redirect("/article/index");
    }

}
