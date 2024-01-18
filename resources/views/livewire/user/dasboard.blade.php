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


    {{-- Action buttons --}}
    <div class="flex justify-between mt-[60px]">
        <div class=" ">
            <div class="flex justify-center bg-white rounded-[15px] py-[16px] px-[13px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M11.94 2.21L9.53 7.82H7.12C6.72 7.82 6.33 7.85 5.95 7.93L6.95 5.53L6.99 5.44L7.05 5.28C7.08 5.21 7.1 5.15 7.13 5.1C8.29 2.41 9.59 1.57 11.94 2.21Z" fill="#292D32" />
                    <path d="M18.73 8.09L18.71 8.08C18.11 7.91 17.5 7.82 16.88 7.82H10.62L12.87 2.59L12.9 2.52C13.04 2.57 13.19 2.64 13.34 2.69L15.55 3.62C16.78 4.13 17.64 4.66 18.17 5.3C18.26 5.42 18.34 5.53 18.42 5.66C18.51 5.8 18.58 5.94 18.62 6.09C18.66 6.18 18.69 6.26 18.71 6.35C18.86 6.86 18.87 7.44 18.73 8.09Z" fill="#292D32" />
                    <path d="M18.29 9.52001C17.84 9.39001 17.37 9.32001 16.88 9.32001H7.12C6.44 9.32001 5.8 9.45001 5.2 9.71001C3.46 10.46 2.24 12.19 2.24 14.2V16.15C2.24 16.39 2.26 16.62 2.29 16.86C2.51 20.04 4.21 21.74 7.39 21.95C7.62 21.98 7.85 22 8.1 22H15.9C19.6 22 21.55 20.24 21.74 16.74C21.75 16.55 21.76 16.35 21.76 16.15V14.2C21.76 11.99 20.29 10.13 18.29 9.52001ZM14.5 16.19H12.75V18C12.75 18.41 12.41 18.75 12 18.75C11.59 18.75 11.25 18.41 11.25 18V16.19H9.5C9.09 16.19 8.75 15.86 8.75 15.44C8.75 15.03 9.09 14.69 9.5 14.69H11.25V13C11.25 12.59 11.59 12.25 12 12.25C12.41 12.25 12.75 12.59 12.75 13V14.69H14.5C14.91 14.69 15.25 15.03 15.25 15.44C15.25 15.86 14.91 16.19 14.5 16.19Z" fill="#292D32" />
                </svg>
            </div>
            <h1 class="text-[#292D32] text-[13px] font-semibold">Add money</h1>
        </div>
        <div class=" ">
            <div class="flex justify-center bg-white rounded-[15px] py-[16px] px-[13px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M16.14 2.96L7.11 5.96C1.04 7.99 1.04 11.3 7.11 13.32L9.79 14.21L10.68 16.89C12.7 22.96 16.02 22.96 18.04 16.89L21.05 7.87C22.39 3.82 20.19 1.61 16.14 2.96ZM16.46 8.34L12.66 12.16C12.51 12.31 12.32 12.38 12.13 12.38C11.94 12.38 11.75 12.31 11.6 12.16C11.31 11.87 11.31 11.39 11.6 11.1L15.4 7.28C15.69 6.99 16.17 6.99 16.46 7.28C16.75 7.57 16.75 8.05 16.46 8.34Z" fill="#1D2A30" />
                </svg>
            </div>
            <h1 class="text-[#292D32] text-[13px] font-semibold">Transfer</h1>
        </div>
        <div class=" ">
            <div class="flex justify-center bg-white rounded-[15px] py-[16px] px-[13px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.44 2.21L10.03 7.82H7.62001C7.22001 7.82 6.83001 7.85 6.45001 7.93L7.45001 5.53L7.49001 5.44L7.55001 5.28C7.58001 5.21 7.60001 5.15 7.63001 5.1C8.79001 2.41 10.09 1.57 12.44 2.21Z" fill="#292D32" />
                    <path d="M19.23 8.09L19.21 8.08C18.61 7.91 18 7.82 17.38 7.82H11.12L13.37 2.59L13.4 2.52C13.54 2.57 13.69 2.64 13.84 2.69L16.05 3.62C17.28 4.13 18.14 4.66 18.67 5.3C18.76 5.42 18.84 5.53 18.92 5.66C19.01 5.8 19.08 5.94 19.12 6.09C19.16 6.18 19.19 6.26 19.21 6.35C19.36 6.86 19.37 7.44 19.23 8.09Z" fill="#292D32" />
                    <path d="M18.79 9.52001C18.34 9.39001 17.87 9.32001 17.38 9.32001H7.61999C6.93999 9.32001 6.29999 9.45001 5.69999 9.71001C3.95999 10.46 2.73999 12.19 2.73999 14.2V16.15C2.73999 16.39 2.75999 16.62 2.78999 16.86C3.00999 20.04 4.70999 21.74 7.88999 21.95C8.11999 21.98 8.34999 22 8.59999 22H16.4C20.1 22 22.05 20.24 22.24 16.74C22.25 16.55 22.26 16.35 22.26 16.15V14.2C22.26 11.99 20.79 10.13 18.79 9.52001ZM15 16.75H9.99999C9.58999 16.75 9.24999 16.41 9.24999 16C9.24999 15.59 9.58999 15.25 9.99999 15.25H15C15.41 15.25 15.75 15.59 15.75 16C15.75 16.41 15.41 16.75 15 16.75Z" fill="#292D32" />
                </svg>
            </div>
            <h1 class="text-[#292D32] text-[13px] font-semibold">Withdraw</h1>
        </div>

    </div>

</div>
