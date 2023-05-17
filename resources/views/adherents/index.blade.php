@extends('home')
@section('content')
      
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
   <!-- /.row -->
   <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>رقم المشترك</th>
                                <th>رقم ب ت و</th>
                                <th>اسم ولقب المشترك</th>
                                <th>رقم هاتف المشترك</th> 
                                <th> العمادة </th>
                                <th> التجمع السكني </th>
                                <th> تاريخ الانخراط : </th>
                                <th> رقم الحنفية </th>
                                <th> ملاحظات </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($adherents as $adherent)
                            <tr class="odd gradeX">
                          
                                <td>{{ $adherent->numero_adherent }}</td>
                                <td>{{ $adherent->cin_adherent }}</td>
                                <td>{{ $adherent->prenom_adherent }}</td>
                                <td>{{ $adherent->numero_tel_adherent }}</td>
                                <td>{{ $adherent->imada }}</td>
                                <td>{{ $adherent->tajamou3 }}</td>
                                <td>{{ $adherent->date_inscription }}</td>
                                <td>{{ $adherent->description }}</td>
                                <td> <form action="{{ route('adherents.destroy',$adherent->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('adherents.show',$adherent->id) }}">إضهار</a>
                                    <a class="btn btn-primary" href="{{ route('adherents.edit',$adherent->id) }}">تحيين</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form></td>
                                
                            </tr>
                            @endforeach  
                        </tbody>
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
 
