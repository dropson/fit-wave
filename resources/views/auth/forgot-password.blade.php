
@extends('layouts.guest')

@section('content')
<form action="#" class="card-body flex flex-col gap-5 p-10" id="sign_in_form" method="get">
  <div class="text-center">
    <h3 class="text-lg font-medium text-gray-900">
    Ел. пошта 
    </h3>
    <span class="text-2sm text-gray-700">
    Введіть свою електронну адресу, щоб скинути пароль
    </span>
   </div>

    <div class="flex flex-col gap-1">
     <label class="form-label font-normal text-gray-900">
      Ел. пошта
     </label>
     <input class="input" type="text" value="">
    </div>


    <button class="btn btn-primary flex justify-center grow">
     Продовжити
    </button>
   </form>
@endsection