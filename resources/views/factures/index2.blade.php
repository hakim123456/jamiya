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
                            <h5>تفاصيل الفاتورة</h5>
                            <p> رقم الفاتورة:</p>
                            <p>التاريخ :</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <h5>بيانات المشترك:</h5>
                            <p>رقم المشترك: {{$facture->id}}  </p>
                            <p>اسم و لقب  المشترك: </p>
                            <p> العمادة : التجمع السكني</p>
                            <p>مرجع العداد: </p>
                            <p>مرجع الحنفية:</p>
                        </div>
                    </div>
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Product A</td>
                                <td>2</td>
                                <td>$10</td>
                                <td>$20</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>3</td>
                                <td>$15</td>
                                <td>$45</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">Subtotal</td>
                                <td>$65</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">Tax</td>
                                <td>$6.50</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">Total</td>
                                <td>$71.50</td>
                            </tr>
                        </tbody>
                    </table>
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