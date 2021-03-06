@extends('layouts.employer_mypage_master')

@section('title', '求人票 | JOB CiNEMA')
@section('description', '釧路の職場を上映する求人サイト')

@section('header')
  @component('components.employer.mypage_header')
  @endcomponent
@endsection

@section('contents')
<div class="main-wrap">
<section class="main-section job-create-section">
<div class="inner">
<div class="pad">
    

    <div class="col-md-10 mr-auto ml-auto">
    <div class="border border-danger p-3 mb-4">
        <p class="text-danger h3 mb-3">まだ求人票の登録は完了していません！</p>
        下記の内容で間違いがなければ、登録ボタンを押してください。
    </div>
        <form  action="@if($job){{ route('job.store.complete', [$job->id]) }}@else{{ route('job.store.complete') }}@endif" class="job-create file-apload-form" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="status" value="1">
        <div class="card">
                <div class="card-header">募集カテゴリ</div>
                <div class="card-body">
                    <table class="job-create-table">
                        <tr>
                            <th>雇用形態</th>
                            <td>
                                <p>
                                @if(Session::has('data.form.category.cats_status.id')){{App\Job\Categories\Category::find(Session::get('data.form.category.cats_status.id'))->name}}
                                @elseif(Session::has('data.form.edit_category.cats_status.id')){{App\Job\Categories\Category::find(Session::get('data.form.edit_category.cats_status.id'))->name}}
                                @else
                                    @foreach($job->categories as $category)
                                        @if($category->parent->name == '雇用形態')
                                            {{App\Job\Categories\Category::find($category->id)->name}}
                                        @endif
                                    @endforeach
                                @endif
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>募集職種</th>
                            <td>
                                <p>
                                @if(Session::has('data.form.category.cats_type.id')){{App\Job\Categories\Category::find(Session::get('data.form.category.cats_type.id'))->name}}
                                @elseif(Session::has('data.form.edit_category.cats_type.id')){{App\Job\Categories\Category::find(Session::get('data.form.edit_category.cats_type.id'))->name}}
                                @else
                                    @foreach($job->categories as $category)
                                        @if($category->parent->name == '職種')
                                            {{App\Job\Categories\Category::find($category->id)->name}}
                                        @endif
                                    @endforeach
                                @endif
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>勤務地エリア</th>
                            <td>
                                <p>
                                @if(Session::has('data.form.category.cats_area.id')){{App\Job\Categories\Category::find(Session::get('data.form.category.cats_area.id'))->name}}
                                @elseif(Session::has('data.form.edit_category.cats_area.id')){{App\Job\Categories\Category::find(Session::get('data.form.edit_category.cats_area.id'))->name}}
                                @else
                                    @foreach($job->categories as $category)
                                        @if($category->parent->name == 'エリア')
                                            {{App\Job\Categories\Category::find($category->id)->name}}
                                        @endif
                                    @endforeach
                                @endif
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>最低給与</th>
                            <td>
                                <p>
                                @if(Session::has('data.form.category.cats_salary.id'))
                                    @foreach(Session::get('data.form.category.cats_salary.id') as $sCtegory)
                                        <p>{{App\Job\Categories\Category::find($sCtegory)->parent->name}}: {{App\Job\Categories\Category::find($sCtegory)->name}}</p>
                                    @endforeach
                                @elseif(Session::has('data.form.edit_category.cats_salary.id'))
                                    @foreach(Session::get('data.form.edit_category.cats_salary.id') as $sCtegory)
                                        <p>{{App\Job\Categories\Category::find($sCtegory)->parent->name}}: {{App\Job\Categories\Category::find($sCtegory)->name}}</p>
                                    @endforeach
                                @else
                                    @foreach($job->categories as $category)
                                        @if($category->parent->parent !== null &&$category->parent->parent->slug == 'salary')
                                            <p>{{App\Job\Categories\Category::find($category->id)->parent->name}}: {{App\Job\Categories\Category::find($category->id)->name}}</p>
                                        @endif
                                    @endforeach
                                @endif
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <th>最低勤務日数</th>
                            <td>
                                <p>@if(Session::has('data.form.category.cats_date.id')){{App\Job\Categories\Category::find(Session::get('data.form.category.cats_date.id'))->name}}
                                @elseif(Session::has('data.form.edit_category.cats_date.id')){{App\Job\Categories\Category::find(Session::get('data.form.edit_category.cats_date.id'))->name}}
                                @else
                                    @foreach($job->categories as $category)
                                        @if($category->parent->name == '勤務日数')
                                            {{App\Job\Categories\Category::find($category->id)->name}}
                                        @endif
                                    @endforeach
                                @endif
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div> <!-- card --> 
            <div class="card">
                <div class="card-header">写真/画像</div>
                <div class="card-body">
                    <div class="form-group e-image-register-area">
                        <div class="e-image-register-item">
                            <p class="e-image-wrap"><img src="@if($job == '' && Session::has('data.file.image.main')) {{$jobImageBaseUrl.Session::get('data.file.image.main')}}@elseif($job != '' && $job->job_img != null && Session::has('data.file.edit_image.main') == false ) {{$jobImageBaseUrl.$job->job_img}}@elseif($job != '' && Session::get('data.file.edit_image.main') != $job->job_img && Session::get('data.file.edit_image.main') != ''){{$jobImageBaseUrl.Session::get('data.file.edit_image.main')}}@elseif(Session::get('data.file.edit_image.main')  == ''){{asset('uploads/images/no-image.gif')}}@else {{asset('uploads/images/no-image.gif')}}@endif" alt="写真"></p>
                        </div>
                        <div class="e-image-register-item">
                            <p class="e-image-wrap"><img src="@if($job == '' && Session::has('data.file.image.sub1')) {{$jobImageBaseUrl.Session::get('data.file.image.sub1')}}@elseif($job != '' && $job->job_img2 != null && Session::has('data.file.edit_image.sub1') == false ) {{$jobImageBaseUrl.$job->job_img2}}@elseif($job != '' && Session::get('data.file.edit_image.sub1') != $job->job_img2 && Session::get('data.file.edit_image.sub1') != ''){{$jobImageBaseUrl.Session::get('data.file.edit_image.sub1')}}@elseif(Session::get('data.file.edit_image.sub1')  == ''){{asset('uploads/images/no-image.gif')}}@else {{asset('uploads/images/no-image.gif')}}@endif" alt="写真"></p>
                        </div>
                        <div class="e-image-register-item">
                            <p class="e-image-wrap"><img src="@if($job == '' && Session::has('data.file.image.sub2')) {{$jobImageBaseUrl.Session::get('data.file.image.sub2')}}@elseif($job != '' && $job->job_img3 != null && Session::has('data.file.edit_image.sub2') == false ) {{$jobImageBaseUrl.$job->job_img3}}@elseif($job != '' && Session::get('data.file.edit_image.sub2') != $job->job_img3 && Session::get('data.file.edit_image.sub2') != ''){{$jobImageBaseUrl.Session::get('data.file.edit_image.sub2')}}@elseif(Session::get('data.file.edit_image.sub2')  == ''){{asset('uploads/images/no-image.gif')}}@else {{asset('uploads/images/no-image.gif')}}@endif" alt="写真"></p>
                        </div>
                    
                    </div>
                </div>
            </div> <!-- card --> 
            <div class="card">
                <div class="card-header">動画</div>
                <div class="card-body">
                    <div  oncontextmenu="return false;" class="form-group e-image-register-area">
                        <div class="e-image-register-item">
                            <p class="e-image-wrap">
                                <video controls controlsList="nodownload" preload="none" playsinline width="100%" height="100%">
                                    <source src="@if($job == '' && Session::has('data.file.movie.main')) {{$jobImageBaseUrl.Session::get('data.file.movie.main')}}@elseif($job != '' && $job->job_mov != null && Session::has('data.file.edit_movie.main') == false ) {{$jobImageBaseUrl.$job->job_mov}}@elseif($job != '' && Session::get('data.file.edit_movie.main') != $job->job_mov && Session::get('data.file.edit_movie.main') != ''){{$jobImageBaseUrl.Session::get('data.file.edit_movie.main')}}@elseif(Session::get('data.file.edit_movie.main')  == '')@else @endif"/></iframe>
                                </video>
                            </p>
                        </div>
                        <div class="e-image-register-item">
                            <p class="e-image-wrap">
                                <video controls controlsList="nodownload" preload="none" playsinline width="100%" height="100%">
                                    <source src="@if($job == '' && Session::has('data.file.movie.sub1')) {{$jobImageBaseUrl.Session::get('data.file.movie.sub1')}}@elseif($job != '' && $job->job_mov2 != null && Session::has('data.file.edit_movie.sub1') == false ) {{$jobImageBaseUrl.$job->job_mov2}}@elseif($job != '' && Session::get('data.file.edit_movie.sub1') != $job->job_mov2 && Session::get('data.file.edit_movie.sub1') != ''){{$jobImageBaseUrl.Session::get('data.file.edit_movie.sub1')}}@elseif(Session::get('data.file.edit_movie.sub1')  == '')@else @endif"/></iframe>
                                </video>
                            </p>
                        </div>
                        <div class="e-image-register-item">
                            <p class="e-image-wrap">
                                <video controls controlsList="nodownload" preload="none" playsinline width="100%" height="100%">
                                    <source src="@if($job == '' && Session::has('data.file.movie.sub2')) {{$jobImageBaseUrl.Session::get('data.file.movie.sub2')}}@elseif($job != '' && $job->job_mov3 != null && Session::has('data.file.edit_movie.sub2') == false ) {{$jobImageBaseUrl.$job->job_mov3}}@elseif($job != '' && Session::get('data.file.edit_movie.sub2') != $job->job_mov3 && Session::get('data.file.edit_movie.sub2') != ''){{$jobImageBaseUrl.Session::get('data.file.edit_movie.sub2')}}@elseif(Session::get('data.file.edit_movie.sub2')  == '')@else @endif"/></iframe>
                                </video>
                            </p>
                        </div>
                    
                    </div>
                </div>
            </div> <!-- card --> 
            <div class="card">
                <div class="card-header">掲載期間</div>
                <div class="card-body">
                    <table class="job-create-table">
                        <tr>
                            <th>掲載開始日</th>
                            <td>
                                <p>
                                    @if(Session::get('data.form.text.pub_start')=='最短で掲載')
                                        {{Session::get('data.form.text.pub_start')}}
                                    @elseif(Session::get('data.form.text.pub_start')=='start_specified')
                                        {{Session::get('data.form.text.start_specified_date')}}
                                    @else
                                    @endif
                                </p>
                            </td>
                        </tr>
                        <tr>
                        <th>掲載終了日</th>
                            <td>
                            <p>
                                @if(Session::get('data.form.text.pub_end')=='無期限で掲載')
                                    {{Session::get('data.form.text.pub_end')}}
                                @elseif(Session::get('data.form.text.pub_end')=='end_specified')
                                    {{Session::get('data.form.text.end_specified_date')}}
                                @else
                                @endif
                            </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div> <!-- card --> 
            <div class="card">
                <div class="card-header">募集内容</div>
                    <div class="card-body">
                        <table class="job-create-table">
                            <tr>
                                <th>キャッチコピー</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_title')){{Session::get('data.form.text.job_title')}}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>紹介文</th>
                                <td>
                                     <p>@if(Session::has('data.form.text.job_intro')){!! nl2br(e(Session::get('data.form.text.job_intro'))) !!}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務先</th>
                                <td>
                                 <p>@if(Session::has('data.form.text.job_office')){!! nl2br(e(Session::get('data.form.text.job_office'))) !!}@endif</p>
                                </td>
                            </tr>
                            <tr>
                            <th>住所</th>
                                <td>
                                <p>@if(Session::has('data.form.text.job_office_address')){!! nl2br(e(Session::get('data.form.text.job_office_address'))) !!}@endif</p>
                            </td>
                            </tr>
                            <tr>
                                <th>職種</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_type')){{Session::get('data.form.text.job_type')}}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>仕事内容</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_desc')){!! nl2br(e(Session::get('data.form.text.job_desc'))) !!}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td>
                                     <p>@if(Session::has('data.form.text.job_hourly_salary')){!! nl2br(e(Session::get('data.form.text.job_hourly_salary'))) !!}@endif</p>
                                </td>
                            </tr>
                            @if(Session::has('data.form.text.salary_increase'))
                                <tr>
                                    <th>昇給・賞与</th>
                                    <td>
                                        <p>{!! nl2br(e(Session::get('data.form.text.salary_increase'))) !!}</p>
                                    </td>
                                </tr>
                            @endif
                            <tr>
                                <th>応募資格</th>
                                <td>
                                <p>@if(Session::has('data.form.text.job_target')){!! nl2br(e(Session::get('data.form.text.job_target'))) !!}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_time')){!! nl2br(e(Session::get('data.form.text.job_time'))) !!}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>待遇・福利厚生</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_treatment')){!! nl2br(e(Session::get('data.form.text.job_treatment'))) !!}@endif</p>
                                </td>
                            </tr>
                            @if(Session::has('data.form.text.remarks'))
                                <tr>
                                    <th>その他</th>
                                    <td>
                                        <p>{!! nl2br(e(Session::get('data.form.text.remarks'))) !!}</p>
                                    </td>
                                </tr>
                            @endif
                        </table>
                    </div>
            </div> <!-- card --> 
            <div class="card">
                <div class="card-header">企業から求職者への質問</div>
                    <div class="card-body">
                        <table class="job-create-table">
                            <tr>
                                <th>質問１</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_q1')){{Session::get('data.form.text.job_q1')}}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>質問２</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_q2')){{Session::get('data.form.text.job_q2')}}@endif</p>
                                </td>
                            </tr>
                            <tr>
                                <th>質問３</th>
                                <td>
                                    <p>@if(Session::has('data.form.text.job_q3')){{Session::get('data.form.text.job_q3')}}@endif</p>
                                </td>
                            </tr>
                           
                            
                        </table>
                    </div>
            </div> <!-- card --> 
            <div class="card">
                <div class="card-header">企業データ</div>
                <div class="card-body">
                    <table class="job-create-table">
                        @if(Auth::guard('employer')->user()->company->cname)
                        <tr>
                            <th>会社名</th>
                            <td>
                                <p>{{Auth::guard('employer')->user()->company->cname }}</p>
                            </td>
                        </tr>
                        @endif
                        @if(Auth::guard('employer')->user()->company->foundation)
                        <tr>
                            <th>設立</th>
                            <td>
                                <p>{{Auth::guard('employer')->user()->company->foundation }}</p>
                            </td>
                        </tr>
                        @endif
                        @if(Auth::guard('employer')->user()->company->postcode && Auth::guard('employer')->user()->company->prefecture && Auth::guard('employer')->user()->company->address)
                        <tr>
                            <th>本社所在地</th>
                            <td>
                                <p>{{Auth::guard('employer')->user()->company->cname }}</p>
                            </td>
                        </tr>
                        @endif
                        @if(Auth::guard('employer')->user()->company->postcode)
                        <tr>
                            <th>会社住所</th>
                            <td>
                                <p>〒{{Auth::guard('employer')->user()->company->postcode }}<br>
                                {{Auth::guard('employer')->user()->company->prefecture }}<br>
                                {{Auth::guard('employer')->user()->company->address }}<br>
                                </p>
                            </td>
                        </tr>
                        @endif
                        @if(Auth::guard('employer')->user()->company->capital)
                        <tr>
                            <th>資本金</th>
                            <td>
                                <p>{{Auth::guard('employer')->user()->company->capital }}</p>
                            </td>
                        </tr>
                        @endif
                        @if(Auth::guard('employer')->user()->company->employee_number)
                        <tr>
                            <th>従業員数</th>
                            <td>
                                <p>{{Auth::guard('employer')->user()->company->employee_number }}</p>
                            </td>
                        </tr>
                        @endif
                        @if(Auth::guard('employer')->user()->company->description)
                        <tr>
                            <th>事業内容</th>
                            <td>
                            <p>{!! nl2br(e(Auth::guard('employer')->user()->company->description)) !!}</p>
                            </td>
                        </tr>
                        @endif
                    </table>
                    <p class="text-danger">※企業データは「企業データの編集」から変更できます。</p>
                </div>
            </div> <!-- card --> 
            <div class="form-group text-center">
                    <p class="mb-3">「この求人を登録する」ボタンを押すと掲載申請を行い、JOBCiNEMAで承認後に求人票が掲載されます</p>
                    <button type="submit" class="btn btn-dark">この求人を登録する</button>
                    <a class="btn btn-outline-secondary" href="@if($job){{ route('job.edit', [$job->id]) }}@else{{ route('job.create.step2') }}@endif">前に戻って修正する</a>
            </div>
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
        </form>
    </div>
</div> 
</div>  <!-- inner --> 
</section>
</div> <!-- main-wrap -->
@endsection

@section('footer')
  @component('components.employer.mypage_footer')
  @endcomponent
@endsection



