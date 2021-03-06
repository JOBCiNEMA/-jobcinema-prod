@extends('layouts.employer_mypage_master')

@section('title', '求人票| JOB CiNEMA')
@section('description', '釧路の職場を上映する求人サイト')

@section('header')
  @component('components.employer.mypage_header')
  @endcomponent
@endsection

@section('contents')
<!-- パンくず -->
<div id="breadcrumb" class="e-mypage-bread only-pc">
<ol>
  <li>
      <a href="/company/mypage"><span class="bread-text-color-blue">企業ページ</span></a>
  </li>
  <li>
   <span class="bread-text-color-red">求人票</span>
  </li>
</ol>
</div>
<div class="main-wrap">
    <section class="main-section job-top_create_section">
        <div class="inner">
            <div class="pad">
                @if (Auth::guard('employer')->check())
                    @if(!empty(Auth::guard('employer')->user()->company->cname))
                    <p class="h3">{{Auth::guard('employer')->user()->company->cname}}様の管理ページ<span class="caret"></span></p>
                    @else
                    <p class="h3">ゲスト様の管理ページ<span class="caret"></span></p>
                    @endif
                @endif
                <div class="row w-100 mx-0 justify-content-center mt-4">
                    <div class="col-md-11 card e-mypage-card p-0 px-0">
                        <div class="card-header">求人票をつくる</div>
                        <div class="card-body text-left">
                            <div class="job-create-note">
                                【求人票を作成における注意点】<br>
                                求人票は雇用形態別に作成ください<br><br>
                                ＜正社員＞<br class="only-sp">職種別・都道府県ごとに1つ作成してください。<br><br>
                                ＜契約社員＞<br class="only-sp">職種別・都道府県ごとに1つ作成してください。<br><br>
                                ＜アルバイト・パート＞<br class="only-sp">職種別・市区町村ごとに1つ作成してください。<br><br>
                                例）<br class="only-sp">アルバイト・パートと社員を同時に掲載する場合<br><br>アルバイト・パートで１つ、社員で１つ作成します。<br>アルバイト・パートの求人票の中に社員募集の条件などを記載することはNGです。<br>同様に、社員の求人票の中にアルバイト・パート募集の条件などを記載することはNGです。<br>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{route('job.create.step1')}}" class="btn" target="_blank">＋求人票を新規作成</a>
                            </div>
                            
                        </div>

                    </div>
                </div><!-- row -->
                <div class="text-center mt-5">
                    <a class="btn back-btn" href="/company/mypage"><i class="fas fa-reply mr-1"></i>前に戻る</a>
                </div>
            </div>  <!-- pad -->
        </div>  <!-- inner --> 
    </section>
</div> <!-- main-wrap -->
@endsection

@section('footer')
  @component('components.employer.mypage_footer')
  @endcomponent
@endsection