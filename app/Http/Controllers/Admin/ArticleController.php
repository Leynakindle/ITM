<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin/article/index')->withArticles(Article::all());
    }

    public function create()
    {
        return view('admin/article/create');
    }

    public function edit($article)
    {
        $item = Article::find($article);
        return view('admin/article/edit', compact('item'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:articles|max:255',
            'body' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->user_id = $request->user()->id;

        if ($article->save()) {
            return redirect('admin/article');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $article = Article::find($request->get('id'));
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->user_id = $request->user()->id;

        if ($article->save()) {
            return redirect('admin/article');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}
