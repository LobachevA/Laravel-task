<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Word;

class WordController extends Controller
{
    public function index()
    {
        $res = Word::getAll();
        return view('words.start',['words' => $res]);
    }
    public function req()
    {
        $res = Word::getAll();
        $s = '';
        if ((!empty($_POST['submit'])) and (!empty($_POST['words'])) and (!empty($_POST['alg']))) {
            foreach ($_POST['words'] as $word) {
                foreach ($_POST['alg'] as $alg) {
                    $s .= '<p>Слово ' . $word . ' Метод ' . $alg . ' Результат: ' . hash($alg, $word) . '</p>';
                }
            }
     
        return view('words.hash', ['words' => $res, 's' => $s]);
    } else
            return view('words.start',['words' => $res]);
    }
}
