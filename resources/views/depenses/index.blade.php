@extends('home') @section('content') @if ($errors->any()) <div class="alert alert-danger">
        <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
    </div> @endif @if (session('success')) <div class="alert alert-success">
        {{ session('success') }}
    </div> @endif
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"> جدول المصاريف </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>العدد الرتبي</th>
                                    <th>تاريخ العملية</th>
                                    <th>البيان</th>
                                    <th>رقم الوصل</th>
                                    <th> نوع العملية </th>
                                    <th> المبلغ بالدينار </th>
                                    <th> تم اجراء العملية بتاريخ </th>
                                    <th> آخرتحيين بتاريخ </th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($depenses as $depense)
                                 <tr class="odd gradeX">
                                    <td>{{ $depense->numéro_opération_depense }}</td>
                                    <td>{{ $depense->date_opearation_depense }}</td>
                                    <td>{{ $depense->ref_depense }}</td>
                                    <td>{{ $depense->numero_recu_depense }}</td>
                                    <td>{{ $depense->type_opération_depense }}</td>
                                    <td>{{ $depense->somme_depense }}</td>
                                    <td>{{ $depense->created_at }}</td>
                                    <td>{{ $depense->updated_at }}</td>
                                    <td>
                                            <form action="{{ route('depenses.destroy',$depense->id) }}" method="POST">
                                                  <a class="btn btn-primary" href="{{ route('depenses.edit',$depense->id) }}">تحيين</a> @csrf @method('DELETE') <button type="submit" class="btn btn-danger">حذف</button>
                                                </form>
                                    </td>
                                </tr>
                                 @endforeach 
                                 
                            </tbody>
                            
                        </table>
                        <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                            <tr class="odd gradeX">
                                <td> <b>   المبلغ الجملي للمصاريف  </b> </td> 
                                <td> <b>  {{ $somme_depense }} دينار  </b> </td> 
                                 </tr>
                                </thead>
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