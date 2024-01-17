<div class="pt-[28px] px-[24px]">
    <div class="flex justify-between">
        <div>
            <h1 class="text-[13px] text-[#979797]">
                {{$greetings}}
            </h1>
            <h1 class="text-[20px] font-bold text-[#1D2A30]">
                {{$user->name}}
            </h1>
        </div>

        <div class="bg-white h-[40px] w-[40px] rounded-[100px] flex items-center justify-center">
            <img src="{{ asset('icons/notification-bing.png') }}" />
        </div>
    </div>

    {{--
   DEBIT CARD
 --}}
    <div class="mt-[16px] bg-[#1D2A30] lg:w-[450px] rounded-[20px] inline-flex  flex-col items-start gap-[27px] w-[100%]">
        <div class="flex justify-between w-[100%]">
            <div class="p-[10px] py-[24px] px-[24px]">
                <h1 class="text-gray-500 text-[12px] font-semibold">Total Balance</h1>
                <h1 class="absolute text-white font-bold text-[32px]">$780,950.00</h1>
            </div>

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="110" height="106" viewBox="0 0 110 106" fill="none" class="pt-[-24px]">
                    <path d="M171 20.5C171 67.7204 132.72 106 85.5 106C38.2797 106 0 67.7204 0 20.5C0 -26.7203 38.2797 -65 85.5 -65C132.72 -65 171 -26.7203 171 20.5ZM42.75 20.5C42.75 44.1102 61.8898 63.25 85.5 63.25C109.11 63.25 128.25 44.1102 128.25 20.5C128.25 -3.11017 109.11 -22.25 85.5 -22.25C61.8898 -22.25 42.75 -3.11017 42.75 20.5Z" fill="url(#paint0_linear_6_109)" fill-opacity="0.4" />
                    <defs>
                        <linearGradient id="paint0_linear_6_109" x1="85.5" y1="-65" x2="85.5" y2="106" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F6F5F5" stop-opacity="0.56" />
                            <stop offset="1" stop-color="#F6F5F5" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
                <img src="{{asset('icons/menu.png')}}" class="absolute top-[4px] text-end" />
            </div>
        </div>

        <div class="flex gap-[10px] justify-between  items-center w-[100%] mt-[-40px]">
            <div class=" mb-[24px] px-[24px]">
                <h1 class="text-gray-500 text-[12px] font-semibold">Debit Card</h1>
                <h1 class="absolute text-white font-bold text-[14px]">1223 4423 3432</h1>
            </div>
            <div class="mt-[20px]">
                <img src="{{ asset('icons/mastercard.png') }}" class="mt-[27px] mb-[24px] py-[24px] px-[24px]" />
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="54" viewBox="0 0 52 54" fill="none" class="mt-[-100px]">
            <circle cx="2" cy="50" r="50" fill="url(#paint0_linear_6_108)" />
            <defs>
                <linearGradient id="paint0_linear_6_108" x1="2" y1="0" x2="2" y2="100" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E8E8E8" stop-opacity="0.52" />
                    <stop offset="0.0287305" stop-color="#E8E8E8" stop-opacity="0.41" />
                    <stop offset="0.68373" stop-color="#E8E8E8" stop-opacity="0.18" />
                    <stop offset="1" stop-color="#F5F5F5" stop-opacity="0.44" />
                </linearGradient>
            </defs>
        </svg>
    </div>
</div>
