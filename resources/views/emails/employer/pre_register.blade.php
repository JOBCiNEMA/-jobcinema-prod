求人サイトJOBCiNEMA<br>
<br>
{{$employer->company->cname}}<br>
{{$employer->last_name}} {{$employer->first_name}} 様<br>
<br>
JOBCiNEMAへの会員仮登録が完了しましたので<br>
引き続き、以下のURLからログインを行い<br>
企業データのご登録をお願いいたします。<br>
ご登録完了後、求人票の作成など行えます。<br>
<br>
■ログイン情報<br>
-------------------------------------<br>
ログインID：{{$employer->email}}<br>
パスワード：（安全上、非表示にしています）<br>
-------------------------------------<br>
<br>
■以下のURLからログインして、本登録を完了させてください。<br>
-------------------------------------<br><br>
<a href="{{url('/employer/register/verify/'.$token)}}">{{url('/employer/register/verify/'.$token)}}</a><br>
-------------------------------------<br>
1）URLにアクセス<br>
2）企業データの入力<br>
3）本登録が完了<br>
<br>
<br>
■企業用ログインページ<br>
-------------------------------------<br>
<a href="{{url('/employer/login')}}">{{url('/employer/login')}}</a><br>

-------------------------------------<br>
※本登録が終わるまでログインできません。<br>
<br>
<br>
【お願い】<br>
職業安定法の主旨に則り、貴社への応募者の個人情報の取扱には十分ご注意ください。<br>
貴社の採用目的以外の利用はなさらないようお願いします。<br>
また、応募者からの問合せや応募者への連絡につきましても誠実にご対応いただくようお願いします。<br>
<br>
<br>
【運営会社】<br>
------------------------------------<br>
JOBCiNEMA：{{url('/')}}<br>
〒000-0000<br>
〇〇市〇〇　〇-〇-〇〇　〇〇ビル〇階<br>
メールアドレス：：<br>
受付時間：<br>
電話番号：000-0000-0000（平日9時～17時）<br>
FAX：0120-415-715<br>
------------------------------------<br>
<br>