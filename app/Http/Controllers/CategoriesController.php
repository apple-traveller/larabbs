<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        //读取分类id关联的话题并按照每页20条分页
        $topics = Topic::where('category_id',$category->id)->paginate(20);
        return view('topics.index',compact('topics','category'));
    }
}
