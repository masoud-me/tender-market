<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
              @if(auth()->user()->role == 'admin')
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('insert')}}"> اضافه کردن محصول جدید</a>
                </div>
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('showProducts')}}">نمایش همه محصولات</a>
                </div>
                @if(auth()->user()->role == 'drug_store')
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="{{route('showCreateInvoice')}}">ثبت فاکتور برای مناقصه</a>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="{{route('showInvoices')}}">فاکتور های شما</a>
                    </div>
                @endif
                @if(auth()->user()->role == 'provider')
                    <div class="p-6 bg-white border-b border-gray-200">
                        <a href="{{route('showSuggestions')}}">لیست نیاز های داروخانه ها</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
