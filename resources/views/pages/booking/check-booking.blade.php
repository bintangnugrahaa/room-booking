@extends('layouts.app')

@section('content')
    <div id="Background"
        class="absolute top-0 w-full h-[430px] rounded-b-[75px] bg-[linear-gradient(180deg,#F2F9E6_0%,#D2EDE4_100%)]">
    </div>
    <div class="relative flex flex-col gap-[30px] my-[60px] px-5">
        <h1 class="font-bold text-[30px] leading-[45px] text-center">Periksa Detail<br>Pemesanan Anda</h1>
        <form action="{{ route('check-booking.show') }}"
            class="flex flex-col rounded-[30px] border border-[#F1F2F6] p-5 gap-6 bg-white" method="POST">
            @csrf
            <div class="flex flex-col gap-[6px]">
                <h1 class="font-semibold text-lg">Informasi Anda</h1>
                <p class="text-sm text-ngekos-grey">Isi kolom di bawah dengan data yang valid</p>
            </div>
            <div id="InputContainer" class="flex flex-col gap-[18px]">
                <div class="flex flex-col w-full gap-2">
                    <p class="font-semibold">ID Pemesanan</p>
                    <label
                        class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#91BF77] transition-all duration-300 @error('code') border-red-500 @enderror">
                        <img src="assets/images/icons/note-favorite-grey.svg" class="w-5 h-5 flex shrink-0" alt="icon">
                        <input type="text" name="code" id=""
                            class="appearance-none outline-none w-full font-semibold placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Tulis ID pemesanan Anda" value="{{ old('code') }}">
                    </label>
                    @error('code')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full gap-2">
                    <p class="font-semibold">Alamat Email</p>
                    <label
                        class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#91BF77] transition-all duration-300 @error('email') border-red-500 @enderror">
                        <img src="assets/images/icons/sms.svg" class="w-5 h-5 flex shrink-0" alt="icon">
                        <input type="email" name="email" id=""
                            class="appearance-none outline-none w-full font-semibold placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Tulis email Anda" value="{{ old('email') }}">
                    </label>
                    @error('email')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col w-full gap-2">
                    <p class="font-semibold">Nomor Telepon</p>
                    <label
                        class="flex items-center w-full rounded-full p-[14px_20px] gap-3 bg-white ring-1 ring-[#F1F2F6] focus-within:ring-[#91BF77] transition-all duration-300 @error('phone_number') border-red-500 @enderror">
                        <img src="assets/images/icons/call.svg" class="w-5 h-5 flex shrink-0" alt="icon">
                        <input type="tel" name="phone_number" id=""
                            class="appearance-none outline-none w-full font-semibold placeholder:text-ngekos-grey placeholder:font-normal"
                            placeholder="Tulis nomor telepon Anda" value="{{ old('phone_number') }}">
                    </label>
                    @error('phone_number')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                @if (session('error'))
                    <p class="text-center text-red-500">{{ session('error') }}</p>
                @endif

                <button type="submit"
                    class="flex w-full justify-center rounded-full p-[14px_20px] bg-ngekos-orange font-bold text-white">Lihat
                    Pemesanan Saya</button>
            </div>
        </form>
    </div>
    @include('includes.navigation')
@endsection
