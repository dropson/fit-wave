@extends('layouts.app')

@section('content')

<div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
  <!-- begin: toolbar -->
  <div class="flex flex-wrap items-center gap-5 justify-between">
   <h3 class="text-lg text-gray-900 font-semibold">
    6 Кількість
   </h3>
   <div class="btn-tabs" data-tabs="true">
    <a class="btn btn-icon active" data-tab-toggle="#network_cards" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
      </svg>
      
    </a>
    <a class="btn btn-icon" data-tab-toggle="#network_list" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
      </svg>
      
    </a>
   </div>
  </div>
  <!-- end: toolbar -->
  <!-- begin: cards -->
  <div id="network_cards" class="" style="">
   <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7.5">

    <div class="card">
     <div class="card-body lg:pt-9 lg:pb-7.5">
      <div class="flex justify-center mb-2.5">
       <div class="size-20 relative">
        <img class="rounded-full" src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
        <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center gap-1.5 mb-2.5">
       <a class="hover:text-primary-active text-base leading-5 font-medium text-gray-900" href="#">
        Jenny Klabber
       </a>
       <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
        </path>
       </svg>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-4 mb-7">
       <div class="flex items-center text-sm text-gray-700">
        <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
        </i>
        Pinnacle Innovate
       </div>
       <div class="flex items-center text-sm">
        <i class="ki-filled ki-sms me-1 text-gray-500">
        </i>
        <a class="text-gray-700 hover:text-primary-active" href="#">
         kevin@pinnacle.com
        </a>
       </div>
      </div>
      <div class="grid justify-center gap-1.5 mb-7.5">
       <span class="text-2xs uppercase text-gray-600 text-center">
        team
       </span>
       <div class="flex -space-x-2">
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-4.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-2.png">
        </div>
        <div class="flex">
         <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-7 text-success-inverse ring-success-light bg-success size-7">
          +10
         </span>
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center flex-wrap gap-2 lg:gap-5">
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         92
        </span>
        <span class="text-gray-700 text-xs">
         Purchases
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $69
        </span>
        <span class="text-gray-700 text-xs">
         Avg. Price
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $6,240
        </span>
        <span class="text-gray-700 text-xs">
         Total spent
        </span>
       </div>
      </div>
     </div>
     <div class="card-footer justify-center">
      <a class="btn btn-light btn-sm">
       <i class="ki-filled ki-check-circle">
       </i>
       Connected
      </a>
     </div>
    </div>
    <div class="card">
     <div class="card-body lg:pt-9 lg:pb-7.5">
      <div class="flex justify-center mb-2.5">
       <div class="flex items-center justify-center relative text-2.5xl text-info size-20 ring-1 ring-info-clarity bg-info-light rounded-full">
        S
        <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center gap-1.5 mb-2.5">
       <a class="hover:text-primary-active text-base leading-5 font-medium text-gray-900" href="#">
        Sarah Johnson
       </a>
       <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
        </path>
       </svg>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-4 mb-7">
       <div class="flex items-center text-sm text-gray-700">
        <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
        </i>
        InnovateX
       </div>
       <div class="flex items-center text-sm">
        <i class="ki-filled ki-sms me-1 text-gray-500">
        </i>
        <a class="text-gray-700 hover:text-primary-active" href="#">
         sarahj@innx.com
        </a>
       </div>
      </div>
      <div class="grid justify-center gap-1.5 mb-7.5">
       <span class="text-2xs uppercase text-gray-600 text-center">
        team
       </span>
       <div class="flex -space-x-2">
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-5.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-6.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-7.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-11.png">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center flex-wrap gap-2 lg:gap-5">
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         123
        </span>
        <span class="text-gray-700 text-xs">
         Purchases
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $30
        </span>
        <span class="text-gray-700 text-xs">
         Avg. Price
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $3,713
        </span>
        <span class="text-gray-700 text-xs">
         Total spent
        </span>
       </div>
      </div>
     </div>
     <div class="card-footer justify-center">
      <a class="btn btn-sm btn-primary">
       <i class="ki-filled ki-users">
       </i>
       Connect
      </a>
     </div>
    </div>
    <div class="card">
     <div class="card-body lg:pt-9 lg:pb-7.5">
      <div class="flex justify-center mb-2.5">
       <div class="flex items-center justify-center relative text-2.5xl text-danger size-20 ring-1 ring-danger-clarity bg-danger-light rounded-full">
        K
        <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center gap-1.5 mb-2.5">
       <a class="hover:text-primary-active text-base leading-5 font-medium text-gray-900" href="#">
        Kevin Wang
       </a>
       <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
        </path>
       </svg>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-4 mb-7">
       <div class="flex items-center text-sm text-gray-700">
        <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
        </i>
        Pinnacle Innovate
       </div>
       <div class="flex items-center text-sm">
        <i class="ki-filled ki-sms me-1 text-gray-500">
        </i>
        <a class="text-gray-700 hover:text-primary-active" href="#">
         kevin@pinnacle.com
        </a>
       </div>
      </div>
      <div class="grid justify-center gap-1.5 mb-7.5">
       <span class="text-2xs uppercase text-gray-600 text-center">
        team
       </span>
       <div class="flex -space-x-2">
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-29.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-33.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-23.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-31.png">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center flex-wrap gap-2 lg:gap-5">
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         30
        </span>
        <span class="text-gray-700 text-xs">
         Purchases
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $150
        </span>
        <span class="text-gray-700 text-xs">
         Avg. Price
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $4,500
        </span>
        <span class="text-gray-700 text-xs">
         Total spent
        </span>
       </div>
      </div>
     </div>
     <div class="card-footer justify-center">
      <a class="btn btn-light btn-sm">
       <i class="ki-filled ki-check-circle">
       </i>
       Connected
      </a>
     </div>
    </div>
    <div class="card">
     <div class="card-body lg:pt-9 lg:pb-7.5">
      <div class="flex justify-center mb-2.5">
       <div class="size-20 relative">
        <img class="rounded-full" src="https://keenthemes.com/static/metronic/tailwind/dist/assets/media/avatars/300-9.png">
        <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center gap-1.5 mb-2.5">
       <a class="hover:text-primary-active text-base leading-5 font-medium text-gray-900" href="#">
        Brian Davis
       </a>
       <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
        </path>
       </svg>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-4 mb-7">
       <div class="flex items-center text-sm text-gray-700">
        <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
        </i>
        Vortex Tech
       </div>
       <div class="flex items-center text-sm">
        <i class="ki-filled ki-sms me-1 text-gray-500">
        </i>
        <a class="text-gray-700 hover:text-primary-active" href="#">
         brian@vortextech.com
        </a>
       </div>
      </div>
      <div class="grid justify-center gap-1.5 mb-7.5">
       <span class="text-2xs uppercase text-gray-600 text-center">
        team
       </span>
       <div class="flex -space-x-2">
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-14.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-3.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-19.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-15.png">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center flex-wrap gap-2 lg:gap-5">
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         87
        </span>
        <span class="text-gray-700 text-xs">
         Purchases
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $22
        </span>
        <span class="text-gray-700 text-xs">
         Avg. Price
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $1958
        </span>
        <span class="text-gray-700 text-xs">
         Total spent
        </span>
       </div>
      </div>
     </div>
     <div class="card-footer justify-center">
      <a class="btn btn-light btn-sm">
       <i class="ki-filled ki-check-circle">
       </i>
       Connected
      </a>
     </div>
    </div>
    <div class="card">
     <div class="card-body lg:pt-9 lg:pb-7.5">
      <div class="flex justify-center mb-2.5">
       <div class="flex items-center justify-center relative text-2.5xl text-success size-20 ring-1 ring-success-clarity bg-success-light rounded-full">
        M
        <div class="flex size-2.5 bg-gray-400 rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center gap-1.5 mb-2.5">
       <a class="hover:text-primary-active text-base leading-5 font-medium text-gray-900" href="#">
        Megan Taylor
       </a>
       <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
        </path>
       </svg>
      </div>
      <div class="flex flex-wrap justify-center items-center gap-4 mb-7">
       <div class="flex items-center text-sm text-gray-700">
        <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
        </i>
        Catalyst
       </div>
       <div class="flex items-center text-sm">
        <i class="ki-filled ki-sms me-1 text-gray-500">
        </i>
        <a class="text-gray-700 hover:text-primary-active" href="#">
         megan@catalyst.com
        </a>
       </div>
      </div>
      <div class="grid justify-center gap-1.5 mb-7.5">
       <span class="text-2xs uppercase text-gray-600 text-center">
        team
       </span>
       <div class="flex -space-x-2">
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-5.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-26.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-6.png">
        </div>
        <div class="flex">
         <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
        </div>
       </div>
      </div>
      <div class="flex items-center justify-center flex-wrap gap-2 lg:gap-5">
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         45
        </span>
        <span class="text-gray-700 text-xs">
         Purchases
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $300
        </span>
        <span class="text-gray-700 text-xs">
         Avg. Price
        </span>
       </div>
       <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 rounded-md px-2.5 py-2 shrink-0 min-w-24 max-w-auto">
        <span class="text-gray-900 text-2sm leading-none font-medium">
         $13,500
        </span>
        <span class="text-gray-700 text-xs">
         Total spent
        </span>
       </div>
      </div>
     </div>
     <div class="card-footer justify-center">
      <a class="btn btn-sm btn-primary">
       <i class="ki-filled ki-users">
       </i>
       Connect
      </a>
     </div>
    </div>

   </div>
   <div class="flex grow justify-center pt-5 lg:pt-7.5">
    <a class="btn btn-link" href="/metronic/tailwind/demo1/account/members/team-info">
     Show more Connections
    </a>
   </div>
  </div>
  <!-- end: cards -->
  <!-- begin: list -->
  <div class="hidden" id="network_list" style="">
   <div class="flex flex-col gap-5 lg:gap-7.5">
    <div class="card p-7.5">
     <div class="flex items-center flex-wrap justify-between gap-5">
      <div class="flex items-center gap-3.5">
       <div class="flex justify-center">
        <div class="size-20 relative">
         <img class="rounded-full" src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
         <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
         </div>
        </div>
       </div>
       <div class="grid">
        <div class="flex items-center gap-1.5 mb-2.5">
         <a class="text-base leading-5 font-medium hover:text-primary-active text-gray-900" href="#">
          Jenny Klabber
         </a>
         <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
          </path>
         </svg>
        </div>
        <div class="flex items-center flex-wrap gap-x-4">
         <div class="flex items-center text-sm text-gray-700">
          <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
          </i>
          Pinnacle Innovate
         </div>
         <div class="flex items-center text-sm">
          <i class="ki-filled ki-sms me-1 text-gray-500">
          </i>
          <a class="text-gray-700 hover:text-primary-active" href="#">
           kevin@pinnacle.com
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="flex items-center flex-wrap gap-5 lg:gap-11">
       <div class="flex items-center flex-wrap gap-2 lg:gap-5">
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          92
         </span>
         <span class="text-gray-700 text-xs">
          Purchases
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $69
         </span>
         <span class="text-gray-700 text-xs">
          Avg. Price
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $6,240
         </span>
         <span class="text-gray-700 text-xs">
          Total spent
         </span>
        </div>
       </div>
       <div>
        <div class="flex -space-x-2">
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-4.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-2.png">
         </div>
         <div class="flex">
          <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-7 text-success-inverse ring-success-light bg-success size-7">
           +10
          </span>
         </div>
        </div>
       </div>
       <div class="text-right w-28">
        <a class="btn btn-light btn-sm">
         <i class="ki-filled ki-check-circle">
         </i>
         Connected
        </a>
       </div>
      </div>
     </div>
    </div>
    <div class="card p-7.5">
     <div class="flex items-center flex-wrap justify-between gap-5">
      <div class="flex items-center gap-3.5">
       <div class="flex justify-center">
        <div class="flex items-center justify-center relative text-2.5xl text-info size-20 ring-1 ring-info-clarity bg-info-light rounded-full">
         S
         <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
         </div>
        </div>
       </div>
       <div class="grid">
        <div class="flex items-center gap-1.5 mb-2.5">
         <a class="text-base leading-5 font-medium hover:text-primary-active text-gray-900" href="#">
          Sarah Johnson
         </a>
         <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
          </path>
         </svg>
        </div>
        <div class="flex items-center flex-wrap gap-x-4">
         <div class="flex items-center text-sm text-gray-700">
          <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
          </i>
          InnovateX
         </div>
         <div class="flex items-center text-sm">
          <i class="ki-filled ki-sms me-1 text-gray-500">
          </i>
          <a class="text-gray-700 hover:text-primary-active" href="#">
           sarahj@innx.com
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="flex items-center flex-wrap gap-5 lg:gap-11">
       <div class="flex items-center flex-wrap gap-2 lg:gap-5">
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          123
         </span>
         <span class="text-gray-700 text-xs">
          Purchases
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $30
         </span>
         <span class="text-gray-700 text-xs">
          Avg. Price
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $3,713
         </span>
         <span class="text-gray-700 text-xs">
          Total spent
         </span>
        </div>
       </div>
       <div>
        <div class="flex -space-x-2">
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-5.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-6.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-7.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-11.png">
         </div>
        </div>
       </div>
       <div class="text-right w-28">
        <a class="btn btn-sm btn-primary">
         <i class="ki-filled ki-users">
         </i>
         Connect
        </a>
       </div>
      </div>
     </div>
    </div>
    <div class="card p-7.5">
     <div class="flex items-center flex-wrap justify-between gap-5">
      <div class="flex items-center gap-3.5">
       <div class="flex justify-center">
        <div class="flex items-center justify-center relative text-2.5xl text-danger size-20 ring-1 ring-danger-clarity bg-danger-light rounded-full">
         K
         <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
         </div>
        </div>
       </div>
       <div class="grid">
        <div class="flex items-center gap-1.5 mb-2.5">
         <a class="text-base leading-5 font-medium hover:text-primary-active text-gray-900" href="#">
          Kevin Wang
         </a>
         <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
          </path>
         </svg>
        </div>
        <div class="flex items-center flex-wrap gap-x-4">
         <div class="flex items-center text-sm text-gray-700">
          <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
          </i>
          Pinnacle Innovate
         </div>
         <div class="flex items-center text-sm">
          <i class="ki-filled ki-sms me-1 text-gray-500">
          </i>
          <a class="text-gray-700 hover:text-primary-active" href="#">
           kevin@pinnacle.com
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="flex items-center flex-wrap gap-5 lg:gap-11">
       <div class="flex items-center flex-wrap gap-2 lg:gap-5">
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          30
         </span>
         <span class="text-gray-700 text-xs">
          Purchases
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $150
         </span>
         <span class="text-gray-700 text-xs">
          Avg. Price
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $4,500
         </span>
         <span class="text-gray-700 text-xs">
          Total spent
         </span>
        </div>
       </div>
       <div>
        <div class="flex -space-x-2">
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-29.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-33.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-23.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-31.png">
         </div>
        </div>
       </div>
       <div class="text-right w-28">
        <a class="btn btn-light btn-sm">
         <i class="ki-filled ki-check-circle">
         </i>
         Connected
        </a>
       </div>
      </div>
     </div>
    </div>
    <div class="card p-7.5">
     <div class="flex items-center flex-wrap justify-between gap-5">
      <div class="flex items-center gap-3.5">
       <div class="flex justify-center">
        <div class="size-20 relative">
         <img class="rounded-full" src="/static/metronic/tailwind/dist/assets/media/avatars/300-9.png">
         <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
         </div>
        </div>
       </div>
       <div class="grid">
        <div class="flex items-center gap-1.5 mb-2.5">
         <a class="text-base leading-5 font-medium hover:text-primary-active text-gray-900" href="#">
          Brian Davis
         </a>
         <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
          </path>
         </svg>
        </div>
        <div class="flex items-center flex-wrap gap-x-4">
         <div class="flex items-center text-sm text-gray-700">
          <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
          </i>
          Vortex Tech
         </div>
         <div class="flex items-center text-sm">
          <i class="ki-filled ki-sms me-1 text-gray-500">
          </i>
          <a class="text-gray-700 hover:text-primary-active" href="#">
           brian@vortextech.com
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="flex items-center flex-wrap gap-5 lg:gap-11">
       <div class="flex items-center flex-wrap gap-2 lg:gap-5">
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          87
         </span>
         <span class="text-gray-700 text-xs">
          Purchases
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $22
         </span>
         <span class="text-gray-700 text-xs">
          Avg. Price
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $1958
         </span>
         <span class="text-gray-700 text-xs">
          Total spent
         </span>
        </div>
       </div>
       <div>
        <div class="flex -space-x-2">
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-14.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-3.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-19.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-15.png">
         </div>
        </div>
       </div>
       <div class="text-right w-28">
        <a class="btn btn-light btn-sm">
         <i class="ki-filled ki-check-circle">
         </i>
         Connected
        </a>
       </div>
      </div>
     </div>
    </div>
    <div class="card p-7.5">
     <div class="flex items-center flex-wrap justify-between gap-5">
      <div class="flex items-center gap-3.5">
       <div class="flex justify-center">
        <div class="flex items-center justify-center relative text-2.5xl text-success size-20 ring-1 ring-success-clarity bg-success-light rounded-full">
         M
         <div class="flex size-2.5 bg-gray-400 rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
         </div>
        </div>
       </div>
       <div class="grid">
        <div class="flex items-center gap-1.5 mb-2.5">
         <a class="text-base leading-5 font-medium hover:text-primary-active text-gray-900" href="#">
          Megan Taylor
         </a>
         <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
          </path>
         </svg>
        </div>
        <div class="flex items-center flex-wrap gap-x-4">
         <div class="flex items-center text-sm text-gray-700">
          <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
          </i>
          Catalyst
         </div>
         <div class="flex items-center text-sm">
          <i class="ki-filled ki-sms me-1 text-gray-500">
          </i>
          <a class="text-gray-700 hover:text-primary-active" href="#">
           megan@catalyst.com
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="flex items-center flex-wrap gap-5 lg:gap-11">
       <div class="flex items-center flex-wrap gap-2 lg:gap-5">
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          45
         </span>
         <span class="text-gray-700 text-xs">
          Purchases
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $300
         </span>
         <span class="text-gray-700 text-xs">
          Avg. Price
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $13,500
         </span>
         <span class="text-gray-700 text-xs">
          Total spent
         </span>
        </div>
       </div>
       <div>
        <div class="flex -space-x-2">
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-5.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-26.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-6.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-1.png">
         </div>
        </div>
       </div>
       <div class="text-right w-28">
        <a class="btn btn-sm btn-primary">
         <i class="ki-filled ki-users">
         </i>
         Connect
        </a>
       </div>
      </div>
     </div>
    </div>
    <div class="card p-7.5">
     <div class="flex items-center flex-wrap justify-between gap-5">
      <div class="flex items-center gap-3.5">
       <div class="flex justify-center">
        <div class="size-20 relative">
         <img class="rounded-full" src="/static/metronic/tailwind/dist/assets/media/avatars/300-8.png">
         <div class="flex size-2.5 bg-success rounded-full absolute bottom-0.5 start-16 transform -translate-y-1/2">
         </div>
        </div>
       </div>
       <div class="grid">
        <div class="flex items-center gap-1.5 mb-2.5">
         <a class="text-base leading-5 font-medium hover:text-primary-active text-gray-900" href="#">
          Alex Martinez
         </a>
         <svg class="text-primary" fill="none" height="16" viewBox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
          </path>
         </svg>
        </div>
        <div class="flex items-center flex-wrap gap-x-4">
         <div class="flex items-center text-sm text-gray-700">
          <i class="ki-filled ki-abstract-41 me-1 text-gray-500">
          </i>
          Precision Solutions
         </div>
         <div class="flex items-center text-sm">
          <i class="ki-filled ki-sms me-1 text-gray-500">
          </i>
          <a class="text-gray-700 hover:text-primary-active" href="#">
           alex@kteam.com
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="flex items-center flex-wrap gap-5 lg:gap-11">
       <div class="flex items-center flex-wrap gap-2 lg:gap-5">
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          63
         </span>
         <span class="text-gray-700 text-xs">
          Purchases
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $65
         </span>
         <span class="text-gray-700 text-xs">
          Avg. Price
         </span>
        </div>
        <div class="grid grid-cols-1 gap-1.5 border-[0.5px] border-dashed border-gray-400 shrink-0 rounded-md px-2.5 py-2">
         <span class="text-gray-900 text-sm leading-none font-medium">
          $4,095
         </span>
         <span class="text-gray-700 text-xs">
          Total spent
         </span>
        </div>
       </div>
       <div>
        <div class="flex -space-x-2">
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-4.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-5.png">
         </div>
         <div class="flex">
          <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-7" src="/static/metronic/tailwind/dist/assets/media/avatars/300-11.png">
         </div>
         <div class="flex">
          <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-7 text-success-inverse ring-success-light bg-success size-7">
           +10
          </span>
         </div>
        </div>
       </div>
       <div class="text-right w-28">
        <a class="btn btn-light btn-sm">
         <i class="ki-filled ki-check-circle">
         </i>
         Connected
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="flex grow justify-center pt-5 lg:pt-7.5">
    <a class="btn btn-link" href="/metronic/tailwind/demo1/account/members/team-info">
     Show more Connections
    </a>
   </div>
  </div>
  <!-- end: list -->
 </div>

@endsection