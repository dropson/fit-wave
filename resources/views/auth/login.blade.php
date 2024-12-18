
@extends('layouts.guest')

@section('content')
<form action="#" class="card-body flex flex-col gap-5 p-10" id="sign_in_form" method="get">
    <div class="text-center mb-2.5">
     <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
      Авторизація
     </h3>
     <div class="flex items-center justify-center font-medium">
      <span class="text-2sm text-gray-700 me-1.5">
       Потрібен аккаунт ?
      </span>
      <a class="text-2sm link" href="{{ route('register') }}">
       Регистрація
      </a>
     </div>
    </div>

    <div class="flex flex-col gap-1">
     <label class="form-label font-normal text-gray-900">
      Ел. пошта
     </label>
     <input class="input" type="text" value="">
    </div>
    <div class="flex flex-col gap-1">
     <div class="flex items-center justify-between gap-1">
      <label class="form-label font-normal text-gray-900">
       Пароль 
      </label>
      <a class="text-2sm link shrink-0" href="{{ route('password.request') }}">
       Забули пароль ?
      </a>
     </div>
     <div class="input" data-toggle-password="true">
      <input name="user_password"  type="password" value="">
      <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
      </button>
     </div>
    </div>
    <label class="checkbox-group">
     <input class="checkbox checkbox-sm" name="check" type="checkbox" value="1">
     <span class="checkbox-label">
      Запамʼятати
     </span>
    </label>
    <button class="btn btn-primary flex justify-center grow">
     Вхід
    </button>
   </form>
@endsection
