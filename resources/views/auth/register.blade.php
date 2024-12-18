@extends('layouts.guest')

@section('content')

<div class="card-body flex flex-col">
  <div class="text-center mb-2.5">
    <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
      Регистрація
    </h3>
    <div class="flex items-center justify-center font-medium">
      <span class="text-2sm text-gray-700 me-1.5">
        Маєте аккаунт ?
      </span>
      <a class="text-2sm link" href="{{ route('login') }}">
        Вхід
      </a>
    </div>
  </div>

    <div class="tabs mb-5 flex justify-center" data-tabs="true">
     <button class="tab active" data-tab-toggle="#tab_1_1">
      Тренер
     </button>
     <button class="tab" data-tab-toggle="#tab_1_2">
      Кліент
     </button>
    </div>
    <div class="" id="tab_1_1">
      @include('auth.roles.trainer')
    </div>
    <div class="hidden" id="tab_1_2">
      @include('auth.roles.client')
    </div>


</div>
@endsection