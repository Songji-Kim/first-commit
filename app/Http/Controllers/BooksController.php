<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;//Bookモデルを使うよー
use App\Models\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//バリデータ

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
           // <!--ページネーション-->
        $books = Book::orderBy('created_at', 'desc')->paginate(20);
        
        return view('books',[
            'books'=> $books
            ]);
            
        $rg01Datas = [
            "op1" => "できている",
            "op2" => "できていない",
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    //  1.本の登録　
    public function store(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
        'radioGrp01' => 'integer |min:1|max:2',
        'radioGrp02' => 'integer |min:1|max:2',
        'radioGrp03' => 'integer |min:1|max:2',
        'radioGrp04' => 'integer |min:1|max:2',
        'radioGrp05' => 'integer |min:1|max:2',
        ]);
        
        //バリデーション:エラー 
        if ($validator->fails()) {
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
        }
        

        
         // Eloquent モデル
         $books = new Book;
         $books->radioGrp01 = $request->radioGrp01;
         $books->radioGrp02 = $request->radioGrp02;
         $books->radioGrp03 = $request->radioGrp03;
         $books->radioGrp04 = $request->radioGrp04;
         $books->radioGrp05 = $request->radioGrp05;
         $books->user_id = Auth::id(); //ここでログインしているユーザidを登録しています
         $books->save(); 
         

         
         return redirect('/booksedit');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    public function task(Request $request)
    {
        //
    }



    //  2.本の更新
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function edit(Book $book)
    {

        $books = Book::all();
        return view('booksedit', compact('books'));
        
        return view('booksedit',[
        'book'=>$book
        ]);
        
        // ログインユーザー取ってくる用
        $reagents = Reagent::orderBy('user_id')->get();
        
        // 今ログインしているユーザー情報をデータベース取ってくる
        $user = Auth::user();
        // ログインしているユーザー情報のカラム(フラグ番号)を確認する
        $flag = $user->flag;

         return view('booksedit', 
            //  ['reagents' => $reagents, 'user' => $user, 'flag' => $flag]//下のコードと一緒
              compact('booksedit', 'user')
             
            //  []はヤマト運輸でコントローラーからビューに持っていくよ
            // reagentsは相手(=ビューに渡った時の名前)、右側が荷物
        );
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function update(Request $request)
    {
        //バリデーション
        $validator = Validator::make($request->all(), [
        'radioGrp01' => 'integer |min:1|max:2',
        'radioGrp02' => 'integer |min:1|max:2',
        'radioGrp03' => 'integer |min:1|max:2',
        'radioGrp04' => 'integer |min:1|max:2',
        'radioGrp05' => 'integer |min:1|max:2',
        ]);
        
        //バリデーション:エラー 
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        
        // Eloquent モデル
        $books = Book::find($request->id);
        $books->radioGrp01 = $request->radioGrp01;
        $books->radioGrp02 = $request->radioGrp02;
        $books->radioGrp03 = $request->radioGrp03;
        $books->radioGrp04 = $request->radioGrp04;
        $books->radioGrp05 = $request->radioGrp05;
        $books->save(); 
        
        return redirect('/');
    }
    
    // 3．本の削除
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/');
    }    

    // ログインしていない場合にはログイン画面へ
    public function __construct(){
        $this->middleware('auth');
    }

 }
