<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>المجمع المائي حيدرة</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template_front/css/rtl/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="{{ asset('template_front/css/rtl/bootstrap.rtl.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('template_front/css/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('template_front/css/plugins/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('template_front/css/rtl/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('template_front/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('template_front/css/font-awesome/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">المجمع المائي حيدرة</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('أنت مسجَّل بإسم!') }} as  {{ Auth::user()->name }}
</a> 

                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> الإعدادات</a>
                        </li>
                        <li class="divider"></li>
                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="  "><i class="fa fa-dashboard fa-fw"></i> لوحة التحكم</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> التصرف في المشتركين<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('adherents.index') }}">قائمة المشتركين</a>
                                </li>
                                <li>
                                    <a href="{{ route('adherents.create') }}">إضافة مشترك</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                     
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>المقابيض<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('operations.create') }}"> اضافة مداخيل</a>
                                </li>
                                <li>
                                    <a href="{{ route('operations.index') }}">قائمة المداخيل</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> التصرف في الأعضاء<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('users.index') }}">قائمة الأعضاء</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.create') }}">أضف عضو</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}">تحيين عضو</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}">حذف عضو</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> </h1>
                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('template_front/js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('template_front/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('template_front/js/metisMenu/metisMenu.min.js') }}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{ asset('template_front/js/jquery/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template_front/js/bootstrap/dataTables.bootstrap.min.js') }}"></script>


    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('template_front/js/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('template_front/js/morris/morris.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('template_front/js/sb-admin-2.js') }}"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
     // $('#dataTables-example').dataTable();
      $('#dataTables-example').DataTable( {
    language: {
    "loadingRecords": "جارٍ التحميل...",
    "lengthMenu": "أظهر _MENU_ مدخلات",
    "zeroRecords": "لم يعثر على أية سجلات",
    "info": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
    "search": "ابحث:",
    "paginate": {
        "first": "الأول",
        "previous": "السابق",
        "next": "التالي",
        "last": "الأخير"
    },
    "aria": {
        "sortAscending": ": تفعيل لترتيب العمود تصاعدياً",
        "sortDescending": ": تفعيل لترتيب العمود تنازلياً"
    },
    "select": {
        "rows": {
            "_": "%d قيمة محددة",
            "1": "1 قيمة محددة"
        },
        "cells": {
            "1": "1 خلية محددة",
            "_": "%d خلايا محددة"
        },
        "columns": {
            "1": "1 عمود محدد",
            "_": "%d أعمدة محددة"
        }
    },
    "buttons": {
        "print": "طباعة",
        "copyKeys": "زر <i>ctrl<\/i> أو <i>⌘<\/i> + <i>C<\/i> من الجدول<br>ليتم نسخها إلى الحافظة<br><br>للإلغاء اضغط على الرسالة أو اضغط على زر الخروج.",
        "pageLength": {
            "-1": "اظهار الكل",
            "_": "إظهار %d أسطر",
            "1": "اظهار سطر واحد"
        },
        "collection": "مجموعة",
        "copy": "نسخ",
        "copyTitle": "نسخ إلى الحافظة",
        "csv": "CSV",
        "excel": "Excel",
        "pdf": "PDF",
        "colvis": "إظهار الأعمدة",
        "colvisRestore": "إستعادة العرض",
        "copySuccess": {
            "1": "تم نسخ سطر واحد الى الحافظة",
            "_": "تم نسخ %ds أسطر الى الحافظة"
        },
        "createState": "تكوين حالة",
        "removeAllStates": "ازالة جميع الحالات",
        "removeState": "ازالة حالة",
        "renameState": "تغيير اسم حالة",
        "savedStates": "الحالات المحفوظة",
        "stateRestore": "استرجاع حالة",
        "updateState": "تحديث حالة"
    },
    "searchBuilder": {
        "add": "اضافة شرط",
        "clearAll": "ازالة الكل",
        "condition": "الشرط",
        "data": "المعلومة",
        "logicAnd": "و",
        "logicOr": "أو",
        "value": "القيمة",
        "conditions": {
            "date": {
                "after": "بعد",
                "before": "قبل",
                "between": "بين",
                "empty": "فارغ",
                "equals": "تساوي",
                "notBetween": "ليست بين",
                "notEmpty": "ليست فارغة",
                "not": "ليست "
            },
            "number": {
                "between": "بين",
                "empty": "فارغة",
                "equals": "تساوي",
                "gt": "أكبر من",
                "lt": "أقل من",
                "not": "ليست",
                "notBetween": "ليست بين",
                "notEmpty": "ليست فارغة",
                "gte": "أكبر أو تساوي",
                "lte": "أقل أو تساوي"
            },
            "string": {
                "not": "ليست",
                "notEmpty": "ليست فارغة",
                "startsWith": " تبدأ بـ ",
                "contains": "تحتوي",
                "empty": "فارغة",
                "endsWith": "تنتهي ب",
                "equals": "تساوي",
                "notContains": "لا تحتوي",
                "notStartsWith": "لا تبدأ بـ",
                "notEndsWith": "لا تنتهي بـ"
            },
            "array": {
                "equals": "تساوي",
                "empty": "فارغة",
                "contains": "تحتوي",
                "not": "ليست",
                "notEmpty": "ليست فارغة",
                "without": "بدون"
            }
        },
        "button": {
            "0": "فلاتر البحث",
            "_": "فلاتر البحث (%d)"
        },
        "deleteTitle": "حذف فلاتر",
        "leftTitle": "محاذاة يسار",
        "rightTitle": "محاذاة يمين",
        "title": {
            "0": "البحث المتقدم",
            "_": "البحث المتقدم (فعال)"
        }
    },
    "searchPanes": {
        "clearMessage": "ازالة الكل",
        "collapse": {
            "0": "بحث",
            "_": "بحث (%d)"
        },
        "count": "عدد",
        "countFiltered": "عدد المفلتر",
        "loadMessage": "جارِ التحميل ...",
        "title": "الفلاتر النشطة",
        "showMessage": "إظهار الجميع",
        "collapseMessage": "إخفاء الجميع",
        "emptyPanes": "لا يوجد مربع بحث"
    },
    "infoThousands": ",",
    "datetime": {
        "previous": "السابق",
        "next": "التالي",
        "hours": "الساعة",
        "minutes": "الدقيقة",
        "seconds": "الثانية",
        "unknown": "-",
        "amPm": [
            "صباحا",
            "مساءا"
        ],
        "weekdays": [
            "الأحد",
            "الإثنين",
            "الثلاثاء",
            "الأربعاء",
            "الخميس",
            "الجمعة",
            "السبت"
        ],
        "months": [
            "يناير",
            "فبراير",
            "مارس",
            "أبريل",
            "مايو",
            "يونيو",
            "يوليو",
            "أغسطس",
            "سبتمبر",
            "أكتوبر",
            "نوفمبر",
            "ديسمبر"
        ]
    },
    "editor": {
        "close": "إغلاق",
        "create": {
            "button": "إضافة",
            "title": "إضافة جديدة",
            "submit": "إرسال"
        },
        "edit": {
            "button": "تعديل",
            "title": "تعديل السجل",
            "submit": "تحديث"
        },
        "remove": {
            "button": "حذف",
            "title": "حذف",
            "submit": "حذف",
            "confirm": {
                "_": "هل أنت متأكد من رغبتك في حذف السجلات %d المحددة؟",
                "1": "هل أنت متأكد من رغبتك في حذف السجل؟"
            }
        },
        "error": {
            "system": "حدث خطأ ما"
        },
        "multi": {
            "title": "قيم متعدية",
            "restore": "تراجع",
            "info": "القيم المختارة تحتوى على عدة قيم لهذا المدخل. لتعديل وتحديد جميع القيم لهذا المدخل، اضغط او انتقل هنا، عدا ذلك سيبقى نفس القيم",
            "noMulti": "هذا المدخل مفرد وليس ضمن مجموعة"
        }
    },
    "processing": "جارٍ المعالجة...",
    "emptyTable": "لا يوجد بيانات متاحة في الجدول",
    "infoEmpty": "يعرض 0 إلى 0 من أصل 0 مُدخل",
    "thousands": ".",
    "stateRestore": {
        "creationModal": {
            "columns": {
                "search": "إمكانية البحث للعمود",
                "visible": "إظهار العمود"
            },
            "toggleLabel": "تتضمن",
            "button": "تكوين الحالة",
            "name": "اسم الحالة",
            "order": "فرز",
            "paging": "تصحيف",
            "scroller": "مكان السحب",
            "search": "بحث",
            "searchBuilder": "مكون البحث",
            "select": "تحديد",
            "title": "تكوين حالة جديدة"
        },
        "duplicateError": "حالة مكررة بنفس الاسم",
        "emptyError": "لا يسمح بأن يكون اسم الحالة فارغة.",
        "emptyStates": "لا توجد حالة محفوظة",
        "removeConfirm": "هل أنت متأكد من حذف الحالة %s؟",
        "removeError": "لم استطع ازالة الحالة.",
        "removeJoiner": "و",
        "removeSubmit": "حذف",
        "removeTitle": "حذف حالة",
        "renameButton": "تغيير اسم حالة",
        "renameLabel": "الاسم الجديد للحالة %s:",
        "renameTitle": "تغيير اسم الحالة"
    },
    "autoFill": {
        "cancel": "إلغاء الامر",
        "fill": "املأ كل الخلايا بـ <i>%d<\/i>",
        "fillHorizontal": "تعبئة الخلايا أفقيًا",
        "fillVertical": "تعبئة الخلايا عموديا",
        "info": "تعبئة تلقائية"
    },
    "decimal": ",",
    "infoFiltered": "(مرشحة من مجموع _MAX_ مُدخل)",
    "searchPlaceholder": "مثال بحث"
} 
} );
    });
</script>

</body>

</html>
