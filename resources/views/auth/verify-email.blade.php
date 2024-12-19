@extends('layouts.guest')

@section('content')

<div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">

  <div class="card max-w-[440px] w-full">
    <div class="card-body p-10">

      <div class="flex justify-center py-10">
        <img alt="image" class="dark:hidden max-h-[130px]" src="{{ asset('images/verify.svg') }}">
      </div>
      <h3 class="text-lg font-medium text-gray-900 text-center mb-3">
        Дякуємо за реєстрацію!
      </h3>
      <div class="text-2sm text-center text-gray-700 mb-7.5">
        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
          Нове посилання для підтвердження було надіслано на електронну адресу, яку ви вказали під час реєстрації.
        </div>
        @else
        Перш ніж розпочати, будь ласка, підтвердьте свою електронну адресу, перейшовши за посиланням, яке ми щойно
        надіслали вам на електронну пошту. Якщо ви не отримали листа, ми з радістю надішлемо його знову.
        @endif
      </div>
      <div class="flex justify-center mb-5">

        <form method="POST" action="{{ route('verification.send') }}">
          @csrf

          <div>
            <button type="submit" class="btn btn-primary flex justify-center">
              Повторно надіслати лист
            </button>
          </div>
        </form>
      </div>

      <div class="flex items-center justify-center gap-1">

        <span class="text-xs text-gray-600 mb-1">
          Бажаєте вийти ?
        </span>

        <form method="POST" class="flex p-0 mb-1" action="{{ route('logout') }}">
          @csrf

          <button type="submit" class="text-xs font-medium link">
            {{ __('Вихід') }}
          </button>
        </form>

      </div>

    </div>
  </div>
</div>

@endsection