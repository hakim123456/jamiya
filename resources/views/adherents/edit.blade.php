@extends('home') @section('content') @if ($errors->any()) <div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li>@endforeach </ul>
  </div>@endif @if (session('success')) <div class="alert alert-success">{{ session('success') }}</div>@endif <div class="col-lg-6">
    <form action="{{ route('adherents.update',$adherent->id) }}" method="POST">@csrf @method('PUT') <div class="form-group">
        <label for="numero_adherent">رقم المشترك:</label>
        <input type="number" class="form-control" id="numero_adherent" name="numero_adherent" value="{{ $adherent->numero_adherent }} " required>
      </div>
      <div class="form-group">
        <label for="cin_adherent">رقم ب ت و</label>
        <input type="text" class="form-control" id="cin_adherent" name="cin_adherent" value="{{ $adherent->cin_adherent }}" required>
      </div>
      <div class="form-group">
        <label for="prenom_adherent">اسم ولقب المشترك</label>
        <input type="text" class="form-control" id="prenom_adherent" name="prenom_adherent" value="{{ $adherent->prenom_adherent }}" required>
      </div>
      <div class="form-group">
        <label for="numero_tel_adherent">رقم هاتف المشترك</label>
        <input type="number" class="form-control" id="numero_tel_adherent" name="numero_tel_adherent" value="{{ $adherent->numero_tel_adherent }}" required>
      </div>
      <div class="form-group">
        <label for="imada">العمادة</label>
        <input type="text" class="form-control" id="imada" name="imada" value="{{ $adherent->imada}}" required>
      </div>
      <div class="form-group">
        <label for="tajamou3">التجمع السكني</label>
        <input type="text" class="form-control" id="tajamou3" name="tajamou3" value="{{ $adherent->tajamou3 }}" required>
      </div>
      <div class="form-group">
        <label for="inscription">منخرط؟</label>
        <select class="form-control" id="inscription" name="inscription" required>
          <option value="1">نعم</option>
          <option value="0">لا</option>
        </select>
      </div>
  </div>
  <div class="col-lg-6">
    <label for="date_inscription">تاريخ الانخراط :</label>
    <input type="date" class="form-control" id="date_inscription" name="date_inscription" value="{{ $adherent->date_inscription }}" required>
    <div class="form-group">
      <label for="num_robenet">رقم الحنفية</label>
      <input type="number" class="form-control" id="num_robenet" name="num_robenet" value="{{ $adherent->num_robenet }}" required>
    </div>
    <div class="form-group">
      <label for="ref_compteur">مرجع العداد</label>
      <input type="text" class="form-control" id="ref_compteur" name="ref_compteur" value="{{ $adherent->ref_compteur }}" required>
    </div>
    <div class="form-group">
      <label for="allt">موقع العداد خط الطول</label>
      <input type="number" class="form-control" id="allt" name="allt" value="{{ $adherent->allt }}" required>
    </div>
    <div class="form-group">
      <label for="long">موقع العداد خط العرض</label>
      <input type="number" class="form-control" id="long" name="long" value="{{ $adherent->long }}" required>
    </div>
    <div class="form-group">
      <label for="description">ملاحظات</label>
      <textarea class="form-control" id="description" name="description" rows="4">{{$adherent->description }}</textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success">تحيين مشترك</button>
  <button type="reset" class="btn btn-warning">الغـــاء</button>@endsection@extends('home') @section('content') @if ($errors->any()) <div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li>@endforeach </ul>
  </div>@endif @if (session('success')) <div class="alert alert-success">{{ session('success') }}</div>@endif <div class="col-lg-6">
    <form action="{{ route('adherents.update',$adherent->id) }}" method="POST">@csrf @method('PUT') <div class="form-group">
        <label for="numero_adherent">رقم المشترك:</label>
        <input type="number" class="form-control" id="numero_adherent" name="numero_adherent" value="{{ $adherent->numero_adherent}}" required>
      </div>
      <div class="form-group">
        <label for="cin_adherent">رقم ب ت و</label>
        <input type="text" class="form-control" id="cin_adherent" name="cin_adherent" value="{{ $adherent->cin_adherent }}" required>
      </div>
      <div class="form-group">
        <label for="prenom_adherent">اسم ولقب المشترك</label>
        <input type="text" class="form-control" id="prenom_adherent" name="prenom_adherent" value="{{ $adherent->prenom_adherent }}" required>
      </div>
      <div class="form-group">
        <label for="numero_tel_adherent">رقم هاتف المشترك</label>
        <input type="number" class="form-control" id="numero_tel_adherent" name="numero_tel_adherent" value="{{ $adherent->numero_tel_adherent }}" required>
      </div>
      <div class="form-group">
        <label for="imada">العمادة</label>
        <input type="text" class="form-control" id="imada" name="imada" value="{{ $adherent->imada}}" required>
      </div>
      <div class="form-group">
        <label for="tajamou3">التجمع السكني</label>
        <input type="text" class="form-control" id="tajamou3" name="tajamou3" value="{{ $adherent->tajamou3 }}" required>
      </div>
      <div class="form-group">
        <label for="inscription">منخرط؟</label>
        <select class="form-control" id="inscription" name="inscription" required>
          <option value="1">نعم</option>
          <option value="0">لا</option>
        </select>
      </div>
  </div>
  <div class="col-lg-6">
    <label for="date_inscription">تاريخ الانخراط :</label>
    <input type="date" class="form-control" id="date_inscription" name="date_inscription" value="{{ $adherent->date_inscription }}" required>
    <div class="form-group">
      <label for="num_robenet">رقم الحنفية</label>
      <input type="number" class="form-control" id="num_robenet" name="num_robenet" value="{{ $adherent->num_robenet }}" required>
    </div>
    <div class="form-group">
      <label for="ref_compteur">مرجع العداد</label>
      <input type="text" class="form-control" id="ref_compteur" name="ref_compteur" value="{{ $adherent->ref_compteur }}" required>
    </div>
    <div class="form-group">
      <label for="allt">موقع العداد خط الطول</label>
      <input type="number" class="form-control" id="allt" name="allt" value="{{ $adherent->allt }}" required>
    </div>
    <div class="form-group">
      <label for="long">موقع العداد خط العرض</label>
      <input type="number" class="form-control" id="long" name="long" value="{{ $adherent->long }}" required>
    </div>
    <div class="form-group">
      <label for="description">ملاحظات</label>
      <textarea class="form-control" id="description" name="description" rows="4">{{$adherent->description }}</textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success">تحيين مشترك</button>
  <button type="reset" class="btn btn-warning">الغـــاء</button>@endsection