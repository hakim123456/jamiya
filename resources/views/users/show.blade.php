@extends('home')
@section('content')
@section('content')
 <div class="row">
  <div class="col-sm-4"><p><strong>معطيات خاصة بالمستخدم :</strong>{{ $user->name }} 
    <p><strong>عنوان البريد الالكتروني: </strong> {{ $user->email }}</p>
    <p><strong>تاريخ الاضافة:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}</p>
    <p><strong>تاريخ التحيين:</strong> {{ $user->updated_at->format('Y-m-d H:i:s') }}</p>
  </div>
  @if ($user->name == 'admin')
    <img src="{{ asset('template_front/images/admin.png') }}" alt="Admin Avatar"  width="200" height="200">
@else
    <img src="{{ asset('template_front/images/user.png') }}" alt="User Avatar"  width="200" height="200" >
@endif
</div>
@endsection

 