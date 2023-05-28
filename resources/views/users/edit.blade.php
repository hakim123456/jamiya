@extends('home')
@section('content')
<h1>  تحيين مستخدم للتطبيق </h1>

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
                 <form action="{{ route('users.update',$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
              <div>
            <label for="name" class="form-group">الإسم:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div>
            <label for="email" class="form-group">عنوان البريد الالكتروني:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label for="password" class="form-group">كلمة العبور:</label>
            <input type="password" class="form-control" id="password" name="password"  value="*****"  required>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-lg btn-block">تحيين عضو</button>
       
    </form>
    </div>
    </div>
    </div>

@endsection