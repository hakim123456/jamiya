<!-- resources/views/users/create.blade.php -->
@extends('home')
@section('content')
    <h1>تحيين المداخيل</h1>

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
                 <form action="{{ route('depenses.update',$depense->id) }}" method="POST">
                        @csrf @method('PUT') 
              <div>
            <label for="numéro_opération_depense" class="form-group">العدد الرتبي:</label>
            <input type="number" class="form-control" id="numéro_opération_depense" name="numéro_opération_depense" value="{{ $depense->numéro_opération_depense }}" required>
        </div>
        <div><label for="date_opearation_depense">تاريخ العملية :</label>
            <input type="date" class="form-control" id="date_opearation_depense" name="date_opearation_depense"
                value="{{ $depense->date_opearation_depense }}" required placeholder="{{ $depense->date_opearation_depense }}">
        </div>
        <div>
            <label for="ref_depense" class="form-group"> البيان:</label>
            <input type="text" class="form-control" id="ref_depense" name="ref_depense" value="{{ $depense->ref_depense }}" required>
        </div>
        <div>
            <label for="numero_recu_depense" class="form-group"> رقم الوصل</label>
            <input type="number" class="form-control" id="numero_recu_depense" name="numero_recu_depense" value="{{ $depense->numero_recu_depense }}" required>
        </div>
        <div>
            <label for="type_opération_depense" class="form-group"> نوع العملية </label>
            <select class="form-control" aria-label="Select Option" name="type_opération_depense">
                <option selected>اختر عملية</option>
                <option value="شراء ماء"> شراء ماء</option>
                <option value="طاقة"> طاقة</option>
                <option value="مصاريف استغلال اخرى">مصاريف استغلال اخرى </option>
                <option value="صيانة و اصلاح"> صيانة و اصلاح </option>
                <option value="اجور">اجور </option>
                <option value="ادارة و تصرف">ادارة و تصرف </option>
                <option value="مصاريف مختلفة ">مصاريف مختلفة </option>
                <option value="مصاريف انشطة اخرى">مصاريف انشطة اخرى </option>
                <option value="استثمار و تجهيز">استثمار و تجهيز  </option>
            </select>
        </div>
        <div>
                <label for="somme_depense" class="form-group"> المبلغ </label>
                <input type="number" class="form-control" id="somme_depense" name="somme_depense" value="{{ $depense->somme_depense  }}" required>
            </div>
        
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">تحيين </button>
       
    </form>
    </div>
    </div>
    </div>
@endsection
