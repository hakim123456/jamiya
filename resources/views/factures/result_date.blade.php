
@extends('home') @section('content')
@if ($errors->any())
 <div class="alert alert-danger">
   <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> 
       @endforeach </ul>
 </div> 
 @endif @if (session('success')) 
 <div class="alert alert-success">
   {{ session('success') }}
 </div class="col-lg-6">
  @endif
<!-- result.blade.php -->
<h2>Dates between the selected range:</h2>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"> اضافة فاتورة شهرية </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>رقم الفاتورة</th>
                                <th>اسم ولقب المشترك</th>
                                <th>تاريخ رفع العداد</th>
                                <th> رقم الحنفية </th>
                                <th>  مرجع العداد </th>
                                <th>  </th>
                            </tr>
                        </thead>
                        <tbody> @foreach($dates as $date) <tr class="odd gradeX">
                                <td>{{ $date->id }}</td>
                                <td>{{ $date->nom_prenom_adherent }}</td>
                                <td>{{ $date->date_releve_compteur }}</td>
                                <td></td>
                                <td>
                                    </td>
                                <td>
                                    <form action="" method="POST">
                                        <a class="btn btn-info" href="">اضافة  </a>
                                  </form>
                                </td>
                            </tr> @endforeach </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>

@endsection