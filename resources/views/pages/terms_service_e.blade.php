@extends('layouts.master')

@section('title', '求人企業約款')
@section('description', 'JOBCiNEMAの求人企業約款')

@section('header')
  @component('components.header')
  @endcomponent
@endsection

@section('contents')
<!-- パンくず -->
<div id="breadcrumb" class="bread only-pc">
<ol class="list-decimal">
  <li>
    <a href="/">
      <i class="fa fa-home"></i><span>釧路の求人情報TOP</span>
    </a>
  </li>
  <li>
    <a>
    求人企業約款
    </a>
  </li>
</ol>
</div>
<!-- ここからメインコンテンツ -->
<div class="main-wrap">
<section class="main-section page-section">
    <div class="inner">
    <div class="pad">
　    <h1>ー求人企業約款ー</h1>
      <!-- 以下、利用規約 -->
      <div class="agree-box">
        この「JOB CiNEMA利用規約」は、釧路なび（以下「当方」といいます）が運営するウェブサイト「JOB CiNEMA」（以下「本サイト」といいます）を通じて提供される求人広告に関する全てのサービス（以下「本サービス」といいます。詳細は第１章第１条をご参照ください）について、当方と本サービスを利用する者（以下「お客様」といいます）との間の権利義務関係を定めるものです。この「JOB CiNEMA利用規約」は、第１章「総則」（本サービス全般に関係する条項）及び第２章「各サービスのご利用について」（各サービス固有の事項に関係する条項）で構成されます。
      </div>  
      <h2>第１章 総則</h2>
      <div class="page-subtitle">第１条（本サービスの内容）</div>
      <div class="agree-box">
        当方が提供する本サービスは、以下の各サービスにより構成されます。
        <ol class="list-decimal">
          <li>「採用課金型広告サービス」：お客様が応募者を採用（第２章 第２条第２項参照）した場合にはじめて、サービス料金の支払義務が発生する、採用課金型のアルバイト求人広告掲載サービス</li>
          <li>「枠広告サービス」：毎月当方がお客様から定額のお支払いを受け、本サイト上にバナー広告をご掲載するサービス</li>
          <li>「オプションサービス」：その他前各項のサービスに付帯するサービス</li>
        </ol>
      </div>
      <div class="page-subtitle">第２条（適用）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>本サービスを利用いただくには、本規約（次項で定義します）に同意のうえ、本規約を遵守していただく必要があります。また、本規約は、お客様による本サービスの利用申請（本章第５条参照）の時点より、当方とお客様との間の本サービスの利用に関わる一切の関係に適用されます。</li>
          <li>第２章第１条で定める各サービスの個別契約、その他各サービスに関する利用条件の全て（以下「利用ガイドライン等」といいます）も本規約の一部として適用されるものですので（以下、この「JOB CiNEMA利用規約」及び利用ガイドライン等を「本規約」と総称し、本規約に基づく契約を「本契約」といいます）、利用ガイドライン等も併せてご確認ください。</li>
          <li>この「JOB CiNEMA利用規約」と利用ガイドライン等とで規定内容が矛盾する場合、利用ガイドライン等がこの「JOB CiNEMA利用規約」に優先して適用されるものとします</li>
        </ol>
      </div>
      <div class="page-subtitle">第３条（当方からの通知）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>当方がお客様に対して行う、本サービスについての一切の通知は、原則として、本システム上又はお客様が登録したメールアドレス宛ての電子メールその他当方が適切と判断する方法により行います。</li>
          <li>本システム上又はお客様が登録したメールアドレス宛ての電子メールによる通知の効力は、当方が当該通知を発信した時点をもって発生するものとし、それ以外の通知方法を用いる場合、その通知の効力は、当方が当該通知を各お客様に発信した時点で発生するものとします。</li>
          <li>前項に定める通知の効力は、各お客様が現実に通知を受領又は認識したかどうかを問わず、発生するものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第４条（規約の変更）</div>
      <div class="agree-box">
        当方は、本規約を予告なく任意に変更できるものとします。当方は、本規約を変更した場合には、お客様にその旨通知するものとし、当該通知の効力発生後、お客様が本サービスを利用（本システムへのアクセス、本システムの利用、その他本サービスに関連しもしくは本サービスを介してお客様が行う一切の活動をいいます。以下同様とします）した場合には、お客様は、本規約の変更に同意したものとみなされます。なお、本規約に基づいて現に発生している権利義務は、新規約に特段の定めがない限り、新規約による影響を受けないものとします。
      </div>
      <div class="page-subtitle">第５条（本サービスの利用申請）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>お客様は、本サービスを利用するに先立って、本規約に同意のうえ、当方に対し、本サービスの利用申請を行うものとします。なお、本サービスの利用申請にあたっては、サービスごとに当方が指定する方法により、当方が指定するお客様に関する情報（以下「お客様情報」と総称します。なお、利用申請後に当方に提供された情報も含みます）を当方に提供するものとします。</li>
          <li>当方がお客様の利用申請を承認した場合、お客様は、本規約に同意することを条件に、本規約に違反しない限りにおいて、本サービスの目方的・当方所定の利用期間・利用可方能サービス・利用方法の範囲内で、本サービスを利用することができるものとします。</li>
          <li>お客様は、本サービスの利用申請にあたり、真実、完全、正確かつ最新の情報を当方に提供しなければなりません。</li>
          <li>当方は、当方の基準によりお客様の申請を審査するものとし、当方が承認した場合、当該お客様は本サービスの「お客様」とみなされ（以下「お客様登録」といいます）、本サービスのうち、当方所定のサービスの利用ができるようになるものとします。</li>
          <li>お客様は、お客様情報に変更があった場合は、遅滞なく当方所定の手続きにより、お客様情報の変更を行うものとします。</li>
          <li>当方は、第１項に基づき本サービスの利用申請をしたお客様が、以下の各項のいずれかの事情に該当する場合は、本サービスの利用を拒否することがあります。
            <ol class="list-decimal round-brackets">
              <li>本規約に違反し、又はそのおそれがあると当方が判断した場合</li>
              <li>当方に提供されたお客様情報の全部又は一部につき、虚偽の情報・誤記、不十分な情報、不正確な情報、記載漏れ、又は最新のものでない情報があった場合</li>
              <li>本サービスと競合し得る事業を行う者であると当方が判断した場合</li>
              <li>自己又は第三者のためかを問わず、本サービスの目的の範囲を超えて、営利、広告、又はその他顧客誘引等の目的・意図で本サービスを利用し又は利用するおそれがあると当方が判断した場合</li>
              <li>過去に本サービスのお客様登録を拒否又は抹消された者である場合</li>
              <li>反社会的勢方力等（暴力団、暴力団関係企業・団体、右翼団体、反社会的勢力、集団的もしくは常習的に暴力的不法行為等を行うことを助長するおそれのある団体又はそれらの構成員・団体その他これに準ずる者・団体をいいます。以下同様とします）である、又は資金提供その他を通じて反社会的勢力等の維持、運営もしくは経営に協力若しくは関与する等、反社会的勢力等との何らかの交流若しくは関与を行っていると当方が判断した場合</li>
              <li>その他、当方が本サービスの利用を適当でないと判断した場合</li>
            </ol>
          </li>
          <li>当方は、第４項のお客様登録後に前項各項に掲げる事情に該当することが判明した場合、以後、当該お客様の本サービスの全部又は一部の利用を禁止（お客様登録の抹消、本システムへのアクセス拒否、その他本サービスの利用を全部又は一部不可能にする当方による一切の措置をいいます。以下同様とします）することができるものとします。</li>
          <li>当方は、本条に基づき当方が行った行為によりお客様に生じた損害等（精神的苦痛、逸失利益又はその他の金銭的損害を含む一切の不利益を含みます。以下同様とします）について、一切責任を負いません。また、当方は、本条に基づき当方が行った行為につき、当該行為を行うべきと当方が判断した理由を、お客様に対して回答する義務も負わないものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第６条（本サービスの停止、中断）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>当方は、以下の各項のいずれかに該当する場合は、事前の通知なく、本サービスの利用の全部又は一部を停止又は中断することができるものとします。
            <ol class="list-decimal round-brackets">
              <li>本サービスに係るコンピューター・システムの点検又は保守作業を行う場合</li>
              <li>本サービスの運営にかかるコンピューター、通信回線、サーバー等が何らかの理由により停止した場合</li>
              <li>火災、停電、天災地変等の不可抗力により本サービスの運営ができなくなった場合</li>
              <li>その他、当方が停止又は中断を必要と判断した場合</li>
            </ol>
          </li>
          <li>当方は、前項に基づき当方が行った措置によってお客様に生じた損害等について、一切責任を負いません。また、メンテナンスやシステム障害等により、本サービスに関するいかなる情報が消失した場合であっても、当方は一切責任を負いかねますので、必要な情報は、電子メールを印刷するなどお客様自身で保存してください。</li>
          <li>前項のほか、当方は、第１項に基づく措置以外で、かつ当方の故意又は重過失により本サービスが全部停止する期間が１６８時間以上継続した場合には、当該期間分について、当方が適当と考える代替のサービスを無償にて提供することができるものとします。なお、この代替サービスの提供を行った場合、お客様に生じた損害等に対する当方の責任は、一切免責されるものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第７条（本サービスの変更、終了）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>当方は、当方の都合により、事前の通知なく、本サービスの内容や仕様を変更（本サービスの内容や仕様の全部又は一部について、異なる内容や仕様とすることをいいます）することができます。</li>
          <li>当方は、当方の都合により、本サービスの提供を終了（サービス全体の提供を終了すること）することができます。この場合、当方はお客様に事前に通知するよう努めるものとします。</li>
          <li>本条に基づく当方の措置について、お客様は異議を申し立てることはできず、当方は、これによってお客様に生じた損害等について、一切責任を負いません。</li>
        </ol>
      </div>
      <div class="page-subtitle">第８条（サービス料金の発生・支払）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>サービス料金の金額及び発生条件等については、第２章で定めるものとします。</li>
          <li>サービス料金の支払いは毎月末日締めとし、お客様は、当方の算出した当月分のサービス料金を翌月15日（支払い期日が金融機関の定休日の場合は翌営業日）までに、当方の指定<br/>する銀行口座に振込送金して支払うものとします。なお、振込手数料はお客様の負担とします。</li>
          <li>お客様が前項の支払いを遅延した場合には、年年１４．６％（年年３６５日の日割計算）の割合による遅延損害金が発生するものとします。</li>
          <li>既払いのサービス料金は、如何なる理由（採用後の早期退職・解雇等を含む）でも返還されないものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第９条（権利帰属）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>本システム、本サービスに掲載する情報は当方、またはお客様自身が著作権を有する知的財産権をもつもののみとする。お客様は、当方の事前の承諾を得ることなく、自己が知的財産権を有するもの以外について使用、複製、改変等しないものとします。</li>
          <li>当方またはお客様自身が著作権をもたない著作物を使用し、著作者と問題になった場合は、責任は全てお客様に帰属するものとする。</li>
          <li>お客様が提供した掲載用原稿・写真等の著作権については、お客様又はその他権利者に留保されるものとしますが、本サービスの運営に必要な範囲で、当方が無期限かつ無償で自由に利用（著作権法第２７条及び第２８条所定の行為を含みます）できるものし、当方の利用について、お客様は著作者人格権（公表権、氏名表示権、同一性保持方権）を一方切行使せず、第三者にも行使させないものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第１０条（当方による利用履歴の利用・機密保持）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>当方は、本サービスをお客様に提供するにあたり、また、お客様が本サービスを利用するにあたり、お客様情報、採用ステータスの管理その他のお客様による本サービスの利用記録等、応募者とお客様の間で送受信されるメッセージを含む情報の送受信履歴（内容・開封状況等を含みますが、これらに限られません）を本サービスを含む当方が行うサービスの運営に必要な範囲で、本契約の終了後も閲覧又は利用することができるものとし、お客様は予めこれを承諾するものとします。</li>
          <li>当方は、前項の閲覧又は利用をする場合、当該情報を厳重かつ適正に取り扱うものとし、別途お客様の同意を得た場合を除き、本サービスを含む当方が行うサービスを運営するために必要な範囲を超えて第三者に開示又は漏洩しないものとします。</li>
          <li>当方及びお客様は、本システム及び本サービスに関する情報及び機密情報である旨を書面で明示して開示された情報（以下「機密情報」といいます）を、機密として保持し、開示された目的以外には利用せず、また、第三者に開示・漏えいせず（本規約に別途定める場合を除きます）、善良なる管理者の注意をもって管理するものとします。ただし、以下の情報に関してはこの限りではありません。
            <ol class="list-decimal round-brackets">
              <li>開示の時点ですでに公知となっている情報</li>
              <li>開示後機密情報の受領者の責によらずに公知となった情報</li>
              <li>機密情報によらず機密情報の受領者が独自に開発した情報</li>
              <li>第三者から適法に開示された情報</li>
            </ol>
            <li>当方及びお客様は、第１項所定の情報及び本システムに登録された情報を除き、機密情報の開示者から求められた場合速やかに、機密情報を機密情報の開示者に返却し、又は再生不能な状態で適切に廃棄するものとします｡</li>
        </ol>
      </div>
      <div class="page-subtitle">第１１条（本サービスを通じてお客様が取得する個人情報の取扱）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>お客様は、本サービスを通じて取得された個人情報（お客様が本サービス、本システムを利用し取得した情報全てを含む。以下同様とする）を、個人情報の保護に関する法律及び同法施行令並びに関係省庁による同法に関するガイドライン等、個人情報保護に関する一切の法規に従い適正に取り扱い、善良なる管理者の注意義務をもって管理するものとし、当方の事前の承諾なくお客様以外の第三者に提供すること、及び採用活動以外の目的で使用しないものとします。</li>
          <li>お客様が前項に違反したことを理由として、万一、当方が第三者から権利侵害の主張、問い合わせ、クレーム等をされた場合には、お客様の費用と責任においてこれを解決するものとします。また、万一、当方が独自にかかる紛争に対応した場合には、お客様は、当方が被った損害及び当方が自己を防衛するため等の法的活動に要した一切の費用（弁護士費用を含みますが、これに限られません）相当額を、直ちに、当方に支払うものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第１２条（お客様の個人情報）</div>
      <div class="agree-box">
      　個人情報の取扱いに関しては、本サイト内に定める｢プライバシーポリシー｣に準拠します。
      </div>
      <div class="page-subtitle">第１３条（当方による代理店への情報開示）</div>
      <div class="agree-box">
        当方が指定した代理店もしくは外注先を通して本サービスを利用するお客様は、当方が当該代理店もしくは外注先に対し、当方が保有するお客様情報（「平均採用単価」「応募人数」「採用人数」「採用取消人数」「掲載数」等の情報を含みますが、これらに限られません）を提供することを予め承諾するものとします。
      </div>
      <div class="page-subtitle">第１４条（業務委託・提携）</div>
      <div class="agree-box">
        当方は現在及び将来にわたり、本サービスの業務を遂行し、あるいは事業を拡充するために、継続的に第三者たる企業、組織、個人又は団体と業務委託・提携等を行うことができるものとします。なお、この場合、当該第三者にも当方が第１０条第３項及び同条第４項で負う義務を遵守させるものとします。
      </div>
      <div class="page-subtitle">第１５条（禁止事項）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>本システム上の求人広告については、お客様の責任において掲載するものとし、求人広告に関する問い合わせ、クレーム等の一切についてお客様の費用と責任において対応するものとします。なお、お客様は、以下の各号に該当する求人広告を掲載してはならないものとし、また、別途当方が定める利用ガイドライン等を遵守するものとします。
            <ol class="list-decimal round-brackets">
              <li>法令、条例又は公序良俗に違反するおそれがある場合</li>
              <li>犯罪的行為に結びつく可能性がある場合</li>
              <li>基本的人権の侵害、就職差別を助長し、又は均等な雇用機会を損なうおそれがある場合</li>
              <li>労働条件が各種労働法規（通達、ガイドライン等の一切を含みます）に抵触するおそれがある場合</li>
              <li>応募者に対して、次に掲げるような経済的な負担を不当に要求し、又はそそのかす場合 a）商品、材料、器具等の購入 b）講習会費、登録料等の納入 c）金銭等による出資<br/> d） 教育施設等による経費を伴う受講</li>
              <li>わいせつ図画、文書の頒布等にあたる場合</li>
              <li>事実誤認を誘発し又は虚偽である場合</li>
              <li>他のお客様又は第三者の著作権その他知的財産権を侵害する場合</li>
              <li>他のお客様又は第三者の財産権又はプライバシー、その他一切の権利を侵害する場合</li>
              <li>他のお客様又は第三者に不利益を与える場合</li>
              <li>他のお客様又は第三者を誹謗中傷する内容、その他名誉・信用を毀損するものである場合</li>
              <li>本サービスの運営を妨げ又は当方の信用を毀損する場合</li>
              <li>本規約に違反する場合</li>
              <li>前各号又は前各号に準じる場合に該当する可能性があると当方が判断した場合</li>
              <li>その他、当方が合理的な根拠に基づき不適当と判断する場合</li>
            </ol>
          </li>
            <li>当方は、お客様の求人広告の内容が前項各号のいずれかに該当し、又は該当するおそれがあると合理的に判断した場合には、その判断理由を含め、お客様に事前に通知することなく、かかる求人広告の掲載を停止・内容を変更する、当該お客様の本サービスの全部又は一部の利用を禁止する等、当方が必要と認める措置を講じることができるものとします。なお、当方は、求人広告の内容が前項の規定に違反するかどうかについて、当該求人広告の掲載前後を問わず、確認義務を負うものではなく、求人広告の内容が本規約に違反するものでないかどうかは、お客様の費用と責任においてご確認ください。</li>
            <li>お客様は、当方が前項に基づく措置を講じたこと又は講じなかったことについて、異議を申し立てることはできず、お客様に何らかの損害等が生じたとしても、当方は一切責任を負いません。</li>
            <li>お客様が第１項各号に該当することを理由として、万一、当方が第三者から権利侵害の主張、問い合わせ、クレーム等を受けた場合、お客様の費用と責任においてこれを解決するものとします。また、万一、当方が独自にかかる紛争に対応した場合には、お客様は、当方が被った損害及び当方が自己方を防衛するため等の法的活動に要した一切の費用（弁護士費用を含みますが、これに限られません）相当額を、直ちに、当方に支払うものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第１６条（不保証）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>当方は、本サービスの品質及び機能に関して、技術上又は商業上の完全性、正確性及び有用性等につき、保証を行うものではありません。また、当方は、お客様が本サービスを利用して行った求人広告の成果について、一切の責を負わないものとします。</li>
          <li>当方は、本サービスの利用に関連してお客様と第三者との間に問い合わせ、クレーム等のトラブルが発生した場合であっても、当該トラブルに関して何ら関知せず、責を負わないものとします。なお、かかるトラブルについても、前条第４項の規定を準用するものとします。ただし、当方の故意又は重過失がある場合はこの限りではありません。</li>
        </ol>
      </div>
      <div class="page-subtitle">第１７条（契約の解除</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>お客様が次の各号に一つでも該当する場合、当方は事前の通知なしで直ちに、本契約の全部もしくは一部を解除し（お客様登録の抹消を含みます）、又はお客様の本サービスの全部又は一部の利用を禁止することができるものとします。
            <ol class="list-decimal round-brackets">
              <li>本規約の各条項のいずれかに違反した場合</li>
              <li>掲載された求人広告と業務の実態が異なり、これによって第三者から苦情を申し立てられた場合、又はそのおそれがある場合</li>
              <li>本規約違反の疑いにつき当方から説明を求められたにもかかわらず、３日以内に合理的な説明を行わない場合</li>
              <li>破産手続開始、民事再生手続開始、特別清算開始、会社更生手続開始の申立てを受け、もしくは自ら申し立てた場合、事実上倒産した場合、又は資力に疑義が生じたと当方が判断した場合</li>
              <li>反社会的勢力等である、又は資金提供その他を通じて反社会的勢力等の維持、運営もしくは経営に協力若しくは関与する等、反社会的勢力等との何らかの交流もしくは関与を行っていると当方が判断した場合</li>
              <li>当方からの書面・電話・メール等による問い合わせに対し、明確な回答を行わない場合</li>
              <li>著しく低い応募率又は採用率として、当方が定める基準を下回る応募率又は採用率が６０日以上継続する場合</li>
              <li>その他、本サービスを当該お客様に提供し難い事由が発生したと当方が判断した場合</li>
            </ol>
          </li>
          <li>当方が、当方の故意又は重過失により次の各号に一つでも該当する場合、お客様は、本契約のうち、当該該当事由が生じたサービスにかかる部分の全部又は一部を解除することができるものとします。
            <ol class="list-decimal round-brackets">
              <li>正当な理由なく、本サービスを提供しない場合</li>
              <li>お客様に虚偽の報告をした場合</li>
              <li>本規約違反の疑いにつきお客様から書面で説明を求められたにもかかわらず、当方に書面が受領後、２０営業日以内に説明を行わない場合</li>
              <li>本サービスの提供にあたって正当な理由なくお客様の法的権利を侵害する場合</li>
            </ol>
          </li>
        </ol>
      </div>
      <div class="page-subtitle">第１８条（本規約の有効期間）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>本契約の有効期間は、お客様の本サービスの利用申請時点からお客様が本サービスの停止手続きを完了した日までとします。ただし、本サービス利用に係る個別の契約の有効期間中は、当該個別の契約が終了するまで本契約の規定が適用されるものとします。</li>
          <li>本規約が有効期間の満了、解除、その他いかなる理由により終了した場合といえども、第１章の各規定のうち、有効期間の満了もしくは解除後でも当方やお客様に関わる条項は、なお効力を有するものとします。なお、本契約が終了した場合でも、発生済みのサービス料金支払債務には、何らの影響も及ぼさないものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第１９条（暴力団等排除条項）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>当方及びお客様は、相手方に対し、本サービスの利用申請時に、当該時点及び本契約有効期間中、自己、その役員及び従業員（以下、本条において、あわせて「役員等」といいます）が、反社会的勢力等でないことを誓約するものとします。</li>
          <li>当方及びお客様は、相手方が次の各号に一つでも該当する場合、相手方に対する事前の通知なしに直ちに、本契約を解除することができるものとします。また、当方は、当該お客様の本サービスの全部又は一部の利用を禁止することができるものとします。
            <ol class="list-decimal round-brackets">
              <li>前項の誓約に違反することが判明した場合</li>
              <li>自ら又は第三者を利用して、相手方に対し暴力的行為、詐術、強迫的言辞、業務妨害行為などの行為をした場合</li>
              <li>反社会的勢力等でないことの確認に関する調査等に協力せず、十分な資料等を提出しない場合</li>
            </ol>
          </li>
          <li>当方及びお客様は、相手方が前項の解除又は措置を行ったことを理由として、損害賠償請求をすることは一切できません。また、相手方又はその役員等が反社会的勢力等であることを理由とした本契約の詐欺取消（民法第９６条参照）・錯誤無効（民法第９５条参照）等により取引が終了した場合、当該相手方は、当該取引終了を理由として、損害賠償請求をすることは一切できません。</li>
        </ol>
      </div>
      <div class="page-subtitle">第２０条（違約金及び損害賠償額等）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>お客様が本規約のいずれかの条項に違反し、又は不正もしくは違法な行為を行ったことにより当方に損害が生じた場合、お客様はその一切の損害（弁護士費用、当方又は本サービスの信用、イメージ等の回復に要する費用等の一切を含みます）を当方に賠償する責を負います。</li>
          <li>お客様が応募者を採用（第２章第２条第２項で定義する）したにもかかわらず、当方にかかる報告を当方の定める期限までに行わない場合、当方に不採用と回答又は報告した場合等、サービス料金の支払いを不当に免れるものと当方が合理的に判断する行為（かかる行為を以下「隠ぺい行為」といいます。なお、試用期間にとどまること等を主張してサービス料金の支払いを拒む等の行為を含みますが、これらに限られません。）があった場合、お客様は、当該隠ぺい行為に係るサービス利用料金及び前項に定める損害賠償金とは別に、違約金として当該隠ぺい行為に係るサービス利用料金の１００％（その額が１００万円に満たないときは１００万円）を当方に支払うものとします。ただし、当該隠ぺい行為が悪質でないと当方が認めた場合、当方は、かかる違約金を免除又は減額することができるものとします。</li>
          <li>お客様が応募者を派遣従業員として登録した場合等、本サービスの目的と異なる目的で本サービスを利用したと当方が判断した場合も、派遣登録等を行った応募者１名ごとに隠ぺい行為があったものとみなし、前項を適用します。</li>
          <li>お客様の過失により、誤って応募者を採用（第２章第２条第２項参照）した旨の回答又は報告を行い、かつ当方が当該応募者に祝い金を支払った場合は、理由を問わず、お客様は当該祝い金相当額及び当該誤った回答又は報告により当方が被った一切損害（祝い金の送金のために当方が負担した振込手数料、当該誤った回答又は報告により当方従業員が行った作業を人月単価に基づき金銭評価した金額等が含まれますが、これらに限られません）を当方に支払うものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第２１条（権利義務などの譲渡等）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>お客様は、本契約上の地位及び本契約に基づいて生じる権利義務の全部又は一部を、当方の書面による事前の承諾なく第三者に譲渡等の処分をし、引き受けさせ、又は担保に供することはできません。</li>
          <li>当方が本サービスに係る事業を他社に譲渡した場合には、当該事業譲渡に伴い本契約上の地位、本契約に基づいて生じる権利義務並びにお客様情報その他一切の情報を当該事業譲渡の譲受人に譲渡することができるものとし、お客様は、かかる譲渡につき予め同意するものとします。なお、本項に定める事業譲渡には、通常の事業譲渡のみならず、会社分割その他事業が移転するあらゆる場合を含むものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第２２条（分離可能性）</div>
      <div class="agree-box">
        本規約のいずれかの条項又はその一部が、管轄権を有する裁判所により、違法、無効、又は執行不能と判断された場合であっても、残部はその後も有効に存続します。また、違法、無効、又は執行不能と判断された条項もしくは部分についても、当該条項もしくは部分の趣旨に最も近い有効な条項を無効な条項もしくは部分と置き換えて適用し、又は当該条項もしくは部分の趣旨に最も近い有効な条項となるよう合理的な解釈を加えて適用します。
      </div>
      <div class="page-subtitle">第２３条（完全合意）</div>
      <div class="agree-box">
        本規約は、本サービスに関して、本契約締結時における当方・お客様間の全ての合意を包含するものであり、本契約締結以前における当方・お客様間の明示又は黙示の合意、協議、申入れ、各種資料等は、本規約の内容と相違する場合には、効力を有しません。なお、本契約の内容を変更する場合は、本規約に別途定める場合を除き、書面による合意によらなければならないものとします。
      </div>
      <div class="page-subtitle">第２４条（協議解決）</div>
      <div class="agree-box">
        当方及びお客様は、本規約に定めのない事項又は本規約の解釈に疑義が生じた場合には、互いに信義誠実の原則に従って協議の上、速やかに解決を図るものとします。
      </div>
      <div class="page-subtitle">第２５条（準拠法及び管轄裁判所）</div>
      <div class="agree-box">
        本サービスに関する一切については日本法に準拠して解釈されるものとし、本規約に起因し又は関連する一切の紛争については釧路地方裁判所を第一審の専属的合意管轄裁判所とします。
      </div>

      <h2>第２章 本サービス</h2>
      <div class="page-subtitle">第１条（個別契約の成立）</div>
      <div class="agree-box">
      　本サービスを構成する各サービスの個別契約は、以下の各号のとおり成立するものとします。
        <ol class="list-decimal">
          <li>採用課金サービス<br>
          　お客様は、当方がお作りする原稿に従い情報を提供し、当方がその情報をもとに求人広告を掲載いたします。求人広告が本システム上で掲載開始された時点で、個別の求人広告掲載契約が成立します。
          </li>
          <li>枠広告<br>
          　お客様は、当方に対し、当方指定の方法にして広告掲載の申し込みを行うものとします。当方が申し込みを受領し、求人広告が本システム上で掲載開始された時点で、個別の求人広告契約が成立します。
          </li>
          <li>オプションサービス<br>
          　お客様は、当方に対し、当方指定の方法にてオプションサービスの申込みを行うものとします。当方が申込みを受領し、その内容に対する承諾の意思表示を発信した時点で、当方とお客様との間にオプションサービス利用契約が成立します。
          </li>
        </ol>
      </div>
      <div class="page-subtitle">第２条（採用課金サービスのサービス料金の発生等）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>採用課金サービスを利用する場合で、お客様が本システムを通じて応募した応募者を採用（第２項で定義する）した場合、お客様の当方に対するサービス料金の支払義務が発生し、お客様は、申し込み時点においてお客様が選択していた「採用単価」に係る金額を、サービス料金として当方に支払うものとします。なお、仮に、本システム上で掲載された求人広告に係る採用が、本契約又は個別契約の終了後になされたとしても、お客様の当方に対するサービス料金の支払義務は発生するものとします。</li>
          <li>本規約において、「採用」とは、採用の職種、雇用・契約形態（請負契約、委任契約及び準委任契約等の場合を含みますが、これらに限られません）を問わず、応募者が初出社、初勤務（一切の社内外における研修受講等を含みます）を行うことをいいます。また、掲載された求人広告の採用条件と実際の採用条件との間に齟齬がある場合であっても、掲載された求人広告の採用条件と同一条件での採用があったものとみなします。</li>
          <li>採用課金サービスを利用する場合、本システムを介してお客様の求人広告に応募した応募者の採用は、すべてサービス料金の対象となるものとします。</li>
          <li>当方は、採用課金サービスにおけるサービス料金体系を、お客様に対し、20日前に当方が適切と判断する方法により通知することにより、変更することができるものとします。なお、当該変更前に応募を行った応募者を採用した場合のサービス料金は、第２章第２条第１項の定めのとおり、当該応募者が応募した時点においてお客様が申し込みした時点において選択していた「採用単価」に係る金額がサービス料金となります。</li>
        </ol>
      </div>
      <div class="page-subtitle">第３条（掲載課金サービス・オプションサービスのサービス料金の発生等）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>個別の求人広告掲載契約又はオプションサービス利用契約が成立した時点で、お客様の当方に対するサービス料金の支払義務が発生するものとし、当該契約所定のサービス料金を、本規約の定めに従い当方に支払うものとします。</li>
          <li>お客様は、個別の求人広告掲載契約又はオプションサービス利用契約成立後に、お客様の都合により当該契約にかかる求人広告の掲載又はオプションサービスの利用を取りやめる場合（以下「キャンセル」といいます）、当該契約所定のキャンセル料金を支払うものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第４条（採用課金サービスにおけるお客様の採用・不採用の報告義務）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>採用課金サービスを利用する場合、お客様は、別途当方が定める利用ガイドライン等に従い、応募者の「採用」「不採用」の報告を行うものとします。</li>
          <li>お客様が前項の報告を行わず、かつ、当方が採用の事実を確認した場合、お客様に代わって当方が「採用」を確定させることができるものとし、お客様は、これによりサービス料金が発生することを予め承諾するものとします。</li>
          <li>前項の他、お客様に第１項に定める報告義務が生じたにもかかわらず、お客様が「採用」「不採用」の回答を２０日間以上遅延し、かつ、当方に対し当該遅延について当方が合理的と判断する遅延理由の説明もない場合、お客様が当該応募者を「採用」したものとみなされます。</li>
        </ol>
      </div>
      <div class="page-subtitle">第５条（採用課金サービスにおける応募者に対する取扱い）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>本システムを通じて応募をした応募者をお客様が不採用とした場合又は採用・不採用の報告をしなかった場合であっても、当該応募者を応募日より１年年以内に採用したときは、当該採用は、本システムを通じて応募した応募者の採用とみなされ、サービス料金が発生するものとします。</li>
          <li>お客様は、隠ぺい行為に関する事実確認を行うため当方から要請を受けた場合、採用の有無等に関する資料を提出するものとします。また、当方は、事前通知のうえ、お客様の本社・支店・事務所・営業所その他お客様の業務に関連する一切の場所・建造物等内に立ち入り、採用の有無等に関する資料を調査できるものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第６条（採用課金サービスの利用期間）</div>
      <div class="agree-box">
        <ol class="list-decimal">
          <li>採用課金サービスの利用期間（お客様が当該サービスを利用することができる期間をいいます。以下同様とします）は、お客様が求人広告にお申し込みをした日から１年年間とします。ただし、当方又はお客様のいずれかが有効期間満了の３営業日前までに更新拒絶の意思表示をしないかぎり、有効期間はさらに１年年間自動更新するものとし、以後も同様とします。</li>
          <li>前項にかかわらず、当方及びお客様は、相手方に対して、書面による通知により、いつでも採用課金サービスの利用の全部又は一部の停止の意思表示をすることができるものとします。なお、かかる意思表示があった場合、当該意思表示に係る通知書面を当方が発送した日又は当方に到達した日より起算して３営業日後に、採用課金サービスの利用が停止されるものとします。</li>
        </ol>
      </div>
      <div class="page-subtitle">第７条（枠広告サービス・オプションサービスの利用期間）</div>
      <div class="agree-box">
        枠広告サービス及びオプションサービスの利用期間は、個別の求人広告掲載契約又はオプションサービス利用契約所定の期間とします。
      </div>

      <p class="mt-5 pl-3">2019 年 4 月 14 日 制定</p>
      <p class="page-section-close-btn">
        <a href="javascript:void(0)" onClick="window.close();">閉じる</a>
      </p>


    </div> <!-- pad -->
    </div>
</section>
</div>
@endsection

@section('footer')
  @component('components.footer')
  @endcomponent
@endsection
