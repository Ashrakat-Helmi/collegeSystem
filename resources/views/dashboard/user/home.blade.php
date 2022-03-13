@extends('layouts.app')
@section('content')
    <section style="background-color: #eee;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-white rounded-3 p-2 mb-4">
                        <ol class="breadcrumb bg-light mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::guard('web')->user()->name }}</h5>
                            <p class="text-muted mb-1">{{ Auth::guard('web')->user()->email }}</p>
                            <p class="text-muted mb-1">{{ Auth::guard('web')->user()->gender }}</p>


                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="mb-md-0">
                                    <div class="card-body">
                                        <p class="breadcrumb bg-light text-small">Grades Average</p>
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <p class="mb-0">English Grade</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="text-muted text-right mb-0">
                                                    {{ Auth::guard('web')->user()->englishDegree }}
                                                    <span class="text-orange">/ 60</span>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="mb-0">Total Marks</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="text-muted text-right mb-0">
                                                    {{ Auth::guard('web')->user()->highSchoolTotalMarks }} <span
                                                        class="text-orange">/ 300</span></p>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="mb-0">Average</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-right text-orange mb-0">
                                                    {{ round((((Auth::guard('web')->user()->englishDegree / 60) * 100 +(Auth::guard('web')->user()->highSchoolTotalMarks / 300) * 100) /200) *100,1) }}
                                                    %</p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="breadcrumb bg-light text-small">Account Information</p>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('web')->user()->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('web')->user()->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('web')->user()->address }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ Auth::guard('web')->user()->phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--- faqs -->
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="mb-md-0">
                                    <div class="card-body">
                                        <p class="breadcrumb bg-light text-small">Frequently Asked Questions</p>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn text-right text-dark text-decoration-none btn-link btn-block text-left"
                                                            type="button" data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne" dir="rtl">
                                                            ما هو برنامج BIS ؟
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample" dir="rtl">
                                                    <div class="card-body text-right" dir="rtl">
                                                        يقدم تخصصاً فريداً يجمع ما بين إدارة الأعمال ونظم المعلومات يضم
                                                        البرنامج نخبة منتقاة من أساتذة كليتى التجارة والحاسبات
                                                        والمعلومات
                                                        <br>
                                                        يعتمد البرنامج على نظام الساعات المعتمدة، وهو ما يعطى قدراً من
                                                        المرونة بالنسبة للطلاب. لغة الدراسة بالبرنامج هى اللغة
                                                        الإنجليزية.
                                                        توافر معامل حديثة لتدريب الطلاب أثناء الدراسة. <br>يتيح البرنامج
                                                        فرص
                                                        دورات تدريبية وورش عمل متميزة للطلاب أثناء فترة الدراسة.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn text-right text-dark text-decoration-none btn-link btn-block text-left collapsed"
                                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo" dir="rtl">
                                                            ما هو برنامج FMI ؟
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample" dir="rtl">
                                                    <div class="card-body text-right" dir="rtl">
                                                        هو الاختصار لمسمى " الأسواق والمنشآت المالية" Financial Markets
                                                        &
                                                        Institutions . وهو برنامج دراسي أكاديمى تطبيقى يهدف إلى إعداد
                                                        خريج
                                                        متميز لسوق العمل فى القطاع المالى والمصرفى بشكل خاص إلى جانب
                                                        عمليات
                                                        الادارة المالية والتقييم الاقتصادى والتمويل والاستثمار بالمؤسسات
                                                        الاقتصادية المختلفة، فعلى الرغم من زيادة أعداد خريجى كليات
                                                        التجارة
                                                        من الشعب التقليدية إلا أنه معظمهم غير مؤهلين للعمل فى القطاع
                                                        المالى
                                                        بالبنوك وشركات التأمين وشركات الصرافة والبورصة وشركات الوساطة فى
                                                        الأوراق المالية... الى آخره
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h2 class="mb-0">
                                                        <button
                                                            class="btn text-right text-dark text-decoration-none btn-link btn-block text-left collapsed"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree" dir="rtl">
                                                            ما هو برنامج ES ؟
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseThree" class="collapse"
                                                    aria-labelledby="headingThree" data-parent="#accordionExample"
                                                    dir="rtl">
                                                    <div class="card-body text-right" dir="rtl">
                                                        وتتميز الدراسة فى شعبة اللغة الانجليزية بانخفاض كثافة الفصول
                                                        الدراسية وتنفيذ جميع المحاضرات داخل حجرات وقاعات صغيرة لا تتعدى
                                                        100
                                                        طالب وهناك اتجاه الى خفض العدد قى الشعب العامة الى 80 ( فى حالة
                                                        الفرقتين الاولى والثانية)، اما الدراسة فى شعب التخصص ( الفرقتين
                                                        الثالثة والرابعة ) فالكثافة داخل الفصول تهبط فيها بصورة واضحة
                                                        ليصل
                                                        العدد فى بعض التخصصات الى اقل من 25 طالب. ويسمح هذا المناخ بدرجة
                                                        عالية من التفاعل بين الطالب والاستاذ وارتفاع القدرة التحصيلية
                                                        للطلاب
                                                        واستغلال طاقة الاساتذة الى اقصى حد.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
