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

<div class="col-lg-6">
    <form action="{{ route('factures.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="numero_adherent">رقم المشترك:</label>
            <input type="hidden" name="adherent_id" value="{{ $adherent->id }}">
            <input type="hidden" name="numero_operation" value="">
            
            <input type="number" class="form-control" id="numero_adherent" name="numero_adherent" disabled
        value="{{ $adherent->numero_adherent }}" required> 
        </div>
        <div class="form-group">
            <label for="nom_prenom_adherent">اسم ولقب المشترك</label>
            <input type="text" class="form-control" id="nom_prenom_adherent" name="nom_prenom_adherent"
                value="{{ $adherent->prenom_adherent }}" required  readonly>
        </div>
        <div class="form-group">
            <label for="prenom_adherent">مرجع العداد</label>
            <input type="text" class="form-control" id="prenom_adherent" name="prenom_adherent"
                value="{{$adherent->ref_compteur}}" required readonly>
        </div>
        <div class="form-group">
            <label for="date_releve_compteur">تاريخ رفع العداد</label>
            <input type="date" class="form-control" id="date_releve_compteur" name="date_releve_compteur"
                value="{{ old('date_releve_compteur') }}" required>
        </div>
        <div class="form-group">
            <label for="ancien_releve">الرقم القديم</label>
            <input type="number" class="form-control" id="ancien_releve" name="ancien_releve" value="{{ old('ancien_releve') }}" required oninput="calculateDifference()">
        </div>
        <div class="form-group">
            <label for="nouveau_releve">الرقم الجديد</label>
            <input type="number" class="form-control" id="nouveau_releve" name="nouveau_releve" value="{{ old('nouveau_releve') }} "
                required oninput="calculateDifference()">
        </div>
        <div class="form-group">
            <label for="quantite_consommee">الكمية المستهلكة</label>
            <input type="text" readonly class="form-control" id="quantite_consommee" name="quantite_consommee" value="{{ old('quantite_consommee') }}" required>
        </div>
     
</div>
<!-- /.col-lg-6 (nested) -->
<div class="col-lg-6">

   
        <label for="prix_metre"> سعر المتر مكعب</label>
        <input type="number" class="form-control" id="prix_metre" name="prix_metre"
            value="{{ old('prix_metre') }}" required>
        <div class="form-group">
            <label for="frais_relative_consommation">قيمة الاستهلاك</label>
            <input type="number" class="form-control" id="frais_relative_consommation" name="frais_relative_consommation"
                value="{{ old('frais_relative_consommation') }}" required>
        </div>
        <div class="form-group">
            <label for="frais_fixe_consommation">المعلوم القار </label>
            <input type="text" class="form-control" id="frais_fixe_consommation" name="frais_fixe_consommation"
                value="{{ old('frais_fixe_consommation') }}" required>
        </div>
        <div class="form-group">
            <label for="autres_frais">  معاليم اخرى </label>
            <input type="number" class="form-control" id="autres_frais" name="autres_frais" value="{{ old('autres_frais') }}" required>
        </div>
        <div class="form-group">
            <label for="frais_total_consommation">القيمة الجملية   </label>
            <input type="number" class="form-control" id="frais_total_consommation" name="frais_total_consommation" value="{{ old('frais_total_consommation') }}" required>
        </div>
        <div class="form-group">
            <label for="num_facture">رقم الفاتورة</label>
            <input type="number" class="form-control" id="num_facture" name="num_facture" value="{{ old('num_facture') }}" required>
        </div>


</div><button type="submit" class="btn btn-success" >اضافة فاتورة</button>
        <button type="reset" class="btn btn-warning">الغـــاء</button>
    </form>
</div>
<!-- /.col-lg-6 (nested) -->

</div>
<script>
    function calculateDifference() {
        var number1 = document.getElementById('ancien_releve').value;
        var number2 = document.getElementById('nouveau_releve').value;
        var difference = number2 - number1;
        document.getElementById('quantite_consommee').value = difference;
    }
</script>




@endsection