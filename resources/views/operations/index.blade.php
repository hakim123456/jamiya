@extends('home') @section('content') @if ($errors->any()) <div class="alert alert-danger">
        <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
    </div> @endif @if (session('success')) <div class="alert alert-success">
        {{ session('success') }}
    </div> @endif
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"> DataTables Advanced Tables </div>
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
                                    <th> المبلغ </th>
                                    <th> تم اجراء العملية بتاريخ </th>
                                    <th> آخرتحيين بتاريخ </th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($operations as $operation)
                                 <tr class="odd gradeX">
                                    <td>{{ $operation->numéro_opération }}</td>
                                    <td>{{ $operation->date_opearation }}</td>
                                    <td>{{ $operation->ref }}</td>
                                    <td>{{ $operation->numero_recu }}</td>
                                    <td>{{ $operation->type_opération }}</td>
                                    <td>{{ $operation->somme }}</td>
                                    <td>{{ $operation->created_at }}</td>
                                    <td>{{ $operation->updated_at }}</td>
                                    <td>
                                            <form action="{{ route('operations.destroy',$operation->id) }}" method="POST">
                                                  <a class="btn btn-primary" href="{{ route('operations.edit',$operation->id) }}">تحيين</a> @csrf @method('DELETE') <button type="submit" class="btn btn-danger">حذف</button>
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
                                <td> <b>   المبلغ الجملي الموجود بالصندوق بدون احتساب مبلغ بيع الماء </b> </td> 
                                <td> <b>  {{ $sum }}  </b> </td> 
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