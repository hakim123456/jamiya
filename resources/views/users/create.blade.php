<!-- resources/views/users/create.blade.php -->
@extends('home')
@section('content')
    <h1>إضافة مستخدم للتطبيق</h1>

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
                 <form action="{{ route('users.store') }}" method="POST">
                   @csrf
              <div>
            <label for="name" class="form-group">الإسم:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="email" class="form-group">عنوان البريد الالكتروني:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="password" class="form-group">كلمة العبور:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">أضف عضو</button>
       
    </form>
    </div>
    </div>
    </div>
@endsection
