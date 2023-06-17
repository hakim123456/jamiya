@extends('home') @section('content') @if ($errors->any()) <div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
  </div> @endif @if (session('success')) <div class="alert alert-success">
    {{ session('success') }}
  </div> @endif
  <!-- /.row -->
  <div class="container">
    <div class="row">
        <div>
            <div class="card mt-5">
                <div class="card-header bg-primary text-white">
                    <h4>     فاتــورة استهــلاك لشهــر   </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5> <b> تفاصيل الفاتورة </b> </h5>
                            <p> رقم الفاتورة: {{$facture->id}}</p>
                            <p> التاريخ رفع العداد :{{$facture->date_releve_compteur}} </p>
                        
                        </div>
                        <div class="col-md-6 text-right">
                            <h5> <b> بيانات المشترك:</b> </h5>
                            <p>رقم المشترك:    </p>
                            <p>اسم و لقب  المشترك: {{$facture->nom_prenom_adherent}} </p>
                            <p> العمادة :  التجمع السكني </p>
                            <p>مرجع العداد: </p>
                            <p>مرجع الحنفية:</p>
                        </div>
                    </div>
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th> الخدمات</th>
                                <th>الكمية المستهلكة</th>
                                <th>سعر الوحدة </th>
                                <th>الجملة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> الماء</td>
                                <td>  {{$quantite_consommee = $facture->quantite_consommee}} متر مكعب</td>
                                <td> {{$prix_metre=$facture->prix_metre}}</td>
                                <td> @php
                                    $somme_consommation_eaux = $quantite_consommee * $prix_metre;
                                @endphp  {{ $somme_consommation_eaux }} دينار</td>
                            </tr>
                            
                            <tr>
                                <td colspan="3" class="text-right">المعلوم القار</td>
                                <td>{{$frais_fixe_consommation=$facture->frais_fixe_consommation}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">قيمة الاستهلاك</td>
                                <td>{{$frais_relative_consommation=$facture->frais_relative_consommation}}</td>
                            </tr>
                    
                            <tr>
                                <td colspan="3" class="text-right">معاليم اخرى</td>
                                <td> {{$autres_frais=$facture->autres_frais}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-danger"> <b>المبلغ الجملي المطلوب</b></td>
                                <td>  @php
                                    $montant_demande = $somme_consommation_eaux +  $frais_fixe_consommation +
                                    $frais_relative_consommation +  $autres_frais;
                                @endphp {{$montant_demande}} دينار</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="card-footer text-right">
                    <button  onclick="window.print()" class="btn btn-primary">Print</button>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script>
    // JavaScript code for printing
    function printPage() {
        window.print();
    }
  </script>
  @endsection
  