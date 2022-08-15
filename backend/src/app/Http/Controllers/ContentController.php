<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function input()
    {
        return view('contents.input');
    }

    public function save(Request $request)
    {
        // DB保存用インスタンス作成
        $input_content = new Content();

        // リクエストを送る
        // $input_title->title = $request['title'];
        // $input_content->content = $request['content'];
        // $input_image_url->image_url = $request['image_url'];
        // $input_delete_flg->delete_flg= $request['delete_flg'];
        $input_content->title = $request['title'];
        $input_content->content = $request['content'];
        $input_content->image_url = $request['image_url'];
        $input_content->updated_at = $request['updated_at'];
        $input_content->created_at = $request['created_at'];
        // $input_content->image_url = $request['image_url'];
        // $input_content->delete_flg= $request['delete_flg_yes'];

        // データ保存用
        // $input_title->save();
        $input_content->save();
        // $input_image_url->save();
        // $input_delete_flg->save();

        return redirect(route('output'));
    }

    public function output()
    {
        $contents_get_query = Content::select('*');
        $items = $contents_get_query->get();

        return view('contents.output', [
            'items' => $items,
        ]);
    }

        public function detail($content_id)
    {
        $content_get_query = Content::select('*');
        $items = $content_get_query->find($content_id);

        return view('contents.detail', [
            'item' => $items,
        ]);
    }

    public function edit($content_id)
    {
        $content_get_query = Content::select('*');
        $items = $content_get_query->find($content_id);

        return view('contents.edit', [
            'item' => $items,
        ]);
    }

    public function update(Request $request)
    {
        $content_get_query = Content::select('*');
        $content_info = $content_get_query->find($request['id']);
        $content_info->title = $request['title'];
        $content_info->content = $request['content'];
        $content_info->save();

        return redirect(route('output'));
    }

    public function article_delete($id)
    {
        // 削除対象レコードを検索
        $article = Content::find($id);

        //削除
        $article->delete();

        //リダイレクト
        return redirect()->to('output')->with('flash_msg','削除が完了しました');

    }

}
