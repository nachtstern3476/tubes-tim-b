<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('halaman.home', ['article' => $article]);
    }

    public function search(Request $request)
    {
        $search = $request->input('q');
        $article = Article::where('title', 'LIKE', '%' . $search . '%')->get();

        return view('halaman.list_article', ['article' => $article]);
    }

    public function article()
    {
        $article = Article::all();
        return view('halaman.list_article', ['article' => $article]);
    }

    public function article_detail($id)
    {
        $article = Article::find($id);
        $article->attachment = str_replace('attachment/', '', $article->attachment);
        $article->attachment = explode(',', $article->attachment);

        $user = User::find($article->user_id);

        return view('halaman.detail_article', ['article' => $article, 'user' => $user]);
    }

    public function article_form()
    {
        return view('halaman.form_article');
    }

    public function article_create(Request $request)
    {
        $storeAttachmentPath = '';
        $attachment = $request->file('attachment');
        if ($attachment) {
            $storeAttachmentPath = implode(',', array_map(function ($file) {
                return $file->store('attachment', 'public');
            }, $attachment));
        }

        $article = Article::create([
            'user_id' => session('id'),
            'title' => $request->input('title'),
            'detail' => $request->input('description'),
            'attachment' => $storeAttachmentPath
        ]);

        if ($article) {
            return redirect(route('article'))->with('success', 'Artikel Berhasil Ditambahkan');
        }

        return redirect(route('article'))->with('error', 'Artikel Gagal Ditambahkan');
    }

    public function download($path)
    {
        $filePath = storage_path("app/public/attachment/$path");
        if (!file_exists($filePath)) {
            abort(404);
        }

        return response()->download($filePath);
    }
}
