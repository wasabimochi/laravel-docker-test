<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Http\Requests\FormConfirmRequest;

class FormController extends BaseController
{
    /* フォーム入力画面表示 */
    public function index() {
        return view('index');
    }
    /**
     * フォーム確認画面表示
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   service $service
     * @return view $view
     */
    public function confirm(FormConfirmRequest $request) {
        // バリデーションが通っていなければ入力画面を表示（入力画面には先の入力内容を入れる）
        $input = $request->all();
        return view('confirm')->with('input',$input);
    }
    /* フォーム完了画面表示 */
    public function complete() {
        // セッションに格納された内容をDBに登録予定
        return view('complete');
    }
}
