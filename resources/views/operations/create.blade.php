<!-- resources/views/users/create.blade.php -->
@extends('home')
@section('content')
    <h1>قائمة المداخيل</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="panel-body">
        <div class="row">
             <div class="col-lg-6">
                 <form action="{{ route('operations.store') }}" method="POST">
                   @csrf
              <div>
            <label for="numéro_opération" class="form-group">العدد الرتبي:</label>
            <input type="number" class="form-control" id="numéro_opération" name="numéro_opération" value="{{ old('numéro_opération') }}" required>
        </div>
        <div><label for="date_opearation">تاريخ العملية :</label>
            <input type="date" class="form-control" id="date_opearation" name="date_opearation"
                value="{{ old('date_opearation') }}" required>
        </div>
        <div>
            <label for="ref" class="form-group"> البيان:</label>
            <input type="text" class="form-control" id="ref" name="ref" value="{{ old('ref') }}" required>
        </div>
        <div>
            <label for="numero_recu" class="form-group"> رقم الوصل</label>
            <input type="number" class="form-control" id="numero_recu" name="numero_recu" value="{{ old('numero_recu') }}" required>
        </div>
        <div>
            <label for="type_opération" class="form-group"> نوع العملية </label>
            <select class="form-control" aria-label="Select Option" name="type_opération">
                <option selected>اختر عملية</option>
                <option value="انخراطات"> انخراطات</option>
                <option value="اشتراكات"> اشتراكات</option>
                <option value="مداخيل اخرى ">مداخيل اخرى </option>
                <option value="مداخيل مختلفة">مداخيل مختلفة </option>
            </select>
        </div>
        <div>
                <label for="somme" class="form-group"> المبلغ </label>
                <input type="number" class="form-control" id="somme" name="somme" value="{{ old('somme') }}" required>
            </div>
        
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">أضف </button>
       
    </form>
    </div>
    </div>
    </div>
@endsection
