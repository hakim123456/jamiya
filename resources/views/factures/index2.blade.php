@extends('home') @section('content') @if ($errors->any()) <div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
</div> @endif @if (session('success')) <div class="alert alert-success">
    {{ session('success') }}
</div> @endif
<!-- /.row -->
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
                                <th>رقم المشترك</th>
                                <th>رقم ب ت و</th>
                                <th>اسم ولقب المشترك</th>
                                <th> رقم الحنفية </th>
                                <th>  مرجع العداد </th>
                                <th>  </th>
                            </tr>
                        </thead>
                        <tbody> @foreach($adherents as $adherent) <tr class="odd gradeX">
                                <td>{{ $numero_adherent=$adherent->numero_adherent }}</td>
                                <td>{{ $adherent->cin_adherent }}</td>
                                <td>{{ $adherent->prenom_adherent }}</td>
                                <td>{{ $adherent->num_robenet }}</td>
                                <td>{{ $adherent->ref_compteur }}</td>
                                <td>
                                    <form action="" method="POST">
                                        <a class="btn btn-info" href="{{ route('factures.create', $adherent->id) }}">اضافة فاتورة شهرية</a>
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