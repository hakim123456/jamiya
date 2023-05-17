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
                                            <th>الاسم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>تم انشاؤه بتاريخ</th>
                                            <th>تم تحيينه بتاريخ</th> 
                                            <th> الاطلاع او تحيين </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="odd gradeX">
                                      
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td> <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">إضهار</a>
                                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">تحيين</a>
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
 
