<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vihara Karuna Maitreya</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen relative pb-6">
<div class="container">
    <header class="flex">
        <img
            src="{{asset('img/admin-removebg-preview.png')}}"
            alt="VKM"
            class="w-[212px] h-[187px] shrink-0"
        />
        <div class="text-center">
            <h1 class="text-center text-4xl font-bold space-y-1 mt-6">
                Karuna Maitreya -
                <span
                    class="text-mandarin text-transparent bg-clip-text bg-gradient-to-r from-[#F86F03] to-[#FFA41B]"
                >明光佛堂</span
                >
                <span class="text-3xl font-medium block"
                >Jalan 21 No.91, Teluk Gong, Jakarta Utara</span
                >
                <span class="text-2xl font-medium tracking-wider block"
                >0216615453</span
                >
            </h1>
        </div>
    </header>

    <div class="flex justify-between">
        <div>
            <h2 class="text-2xl tracking-wide font-bold mb-4">
                JADWAL PERAYAAN HARI BESAR
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-[#F86F03] to-[#FFA41B]"
                >MAITREYA</span
                >
            </h2>

            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="580"
                height="8"
                viewBox="0 0 709 8"
                fill="none"
            >
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M709 8L0 8L0 0L709 0V8Z"
                    fill="url(#paint0_linear_18_132)"
                />
                <defs>
                    <linearGradient
                        id="paint0_linear_18_132"
                        x1="326.972"
                        y1="-5.66281"
                        x2="708.688"
                        y2="14.0394"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop stop-color="#F86F03"/>
                        <stop offset="1" stop-color="#FAE517"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="inline-flex">
            <div
                class="w-[8px] h-[55px] bg-gradient-to-b from-[#F86F03] to-[#FAE517]"
            ></div>
            <h2 class="text-xl font-bold ms-4 space-y-2">
                Kamis, 28 November 2023
                <span class="block text-xl font-bold">13 : 12 : 00</span>
            </h2>
        </div>
    </div>

    <div class="flex flex-col md:flex-row space-x-4 mt-4">
        <div
            class="w-[307px] p-4 h-auto shrink-0 backdrop-blur-[12px] border rounded-3xl border-[#F86F03] bg-gradient-to-b from-[#F8F8F8]/25 to-[#F8F8F8]/75"
        >
            <img src="{{asset('img/admin.jpeg')}}" class="rounded-t-3xl" alt=""/>
            <div class="flex flex-col space-y-4 mt-3">
                <h3 class="font-bold text-center uppercase text-xl">
                    Kebaktian Pagi
                </h3>
                <div class="space-x-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="36"
                        viewBox="0 0 32 36"
                        fill="none"
                        class="inline-block align-middle"
                    >
                        <path
                            d="M9.14286 0C10.4071 0 11.4286 1.00547 11.4286 2.25V4.5H20.5714V2.25C20.5714 1.00547 21.5929 0 22.8571 0C24.1214 0 25.1429 1.00547 25.1429 2.25V4.5H28.5714C30.4643 4.5 32 6.01172 32 7.875V11.25H0V7.875C0 6.01172 1.53571 4.5 3.42857 4.5H6.85714V2.25C6.85714 1.00547 7.87857 0 9.14286 0ZM0 13.5H32V32.625C32 34.4883 30.4643 36 28.5714 36H3.42857C1.53571 36 0 34.4883 0 32.625V13.5ZM4.57143 19.125V21.375C4.57143 21.9937 5.08571 22.5 5.71429 22.5H8C8.62857 22.5 9.14286 21.9937 9.14286 21.375V19.125C9.14286 18.5063 8.62857 18 8 18H5.71429C5.08571 18 4.57143 18.5063 4.57143 19.125ZM13.7143 19.125V21.375C13.7143 21.9937 14.2286 22.5 14.8571 22.5H17.1429C17.7714 22.5 18.2857 21.9937 18.2857 21.375V19.125C18.2857 18.5063 17.7714 18 17.1429 18H14.8571C14.2286 18 13.7143 18.5063 13.7143 19.125ZM24 18C23.3714 18 22.8571 18.5063 22.8571 19.125V21.375C22.8571 21.9937 23.3714 22.5 24 22.5H26.2857C26.9143 22.5 27.4286 21.9937 27.4286 21.375V19.125C27.4286 18.5063 26.9143 18 26.2857 18H24ZM4.57143 28.125V30.375C4.57143 30.9937 5.08571 31.5 5.71429 31.5H8C8.62857 31.5 9.14286 30.9937 9.14286 30.375V28.125C9.14286 27.5063 8.62857 27 8 27H5.71429C5.08571 27 4.57143 27.5063 4.57143 28.125ZM14.8571 27C14.2286 27 13.7143 27.5063 13.7143 28.125V30.375C13.7143 30.9937 14.2286 31.5 14.8571 31.5H17.1429C17.7714 31.5 18.2857 30.9937 18.2857 30.375V28.125C18.2857 27.5063 17.7714 27 17.1429 27H14.8571ZM22.8571 28.125V30.375C22.8571 30.9937 23.3714 31.5 24 31.5H26.2857C26.9143 31.5 27.4286 30.9937 27.4286 30.375V28.125C27.4286 27.5063 26.9143 27 26.2857 27H24C23.3714 27 22.8571 27.5063 22.8571 28.125Z"
                            fill="url(#paint0_linear_2_84)"
                        />
                        <defs>
                            <linearGradient
                                id="paint0_linear_2_84"
                                x1="-2.04713e-07"
                                y1="3.34884"
                                x2="38.5477"
                                y2="36.2217"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop stop-color="#F86F03"/>
                                <stop offset="1" stop-color="#FFA41B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="font-medium inline-block align-middle">
                        Kamis, 10 Juli 2025
                    </p>
                </div>
                <div class="space-x-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        class="inline-block align-middle"
                    >
                        <path
                            d="M16 0C11.7565 0 7.68687 1.68571 4.68629 4.68629C1.68571 7.68687 0 11.7565 0 16C0 20.2435 1.68571 24.3131 4.68629 27.3137C7.68687 30.3143 11.7565 32 16 32C20.2435 32 24.3131 30.3143 27.3137 27.3137C30.3143 24.3131 32 20.2435 32 16C32 11.7565 30.3143 7.68687 27.3137 4.68629C24.3131 1.68571 20.2435 0 16 0ZM17.5 7.5V16C17.5 16.5 17.25 16.9688 16.8313 17.25L10.8312 21.25C10.1437 21.7125 9.2125 21.525 8.75 20.8312C8.2875 20.1375 8.475 19.2125 9.16875 18.75L14.5 15.2V7.5C14.5 6.66875 15.1688 6 16 6C16.8313 6 17.5 6.66875 17.5 7.5Z"
                            fill="url(#paint0_linear_2_85)"
                        />
                        <defs>
                            <linearGradient
                                id="paint0_linear_2_85"
                                x1="16"
                                y1="0"
                                x2="36.9524"
                                y2="32"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop stop-color="#F86F03"/>
                                <stop offset="1" stop-color="#FFA41B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="font-medium inline-block align-middle">06:00 - 06:45</p>
                </div>

            </div>
        </div>

        <div
            class="w-[307px] p-4 h-auto shrink-0 backdrop-blur-[12px] border rounded-3xl border-[#F86F03] bg-gradient-to-b from-[#F8F8F8]/25 to-[#F8F8F8]/75"
        >
            <img src="{{asset('img/admin.jpeg')}}" class="rounded-t-3xl" alt=""/>
            <div class="flex flex-col space-y-4 mt-3">
                <h3 class="font-bold text-center uppercase text-xl">
                    Kebaktian Pagi
                </h3>
                <div class="space-x-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="36"
                        viewBox="0 0 32 36"
                        fill="none"
                        class="inline-block align-middle"
                    >
                        <path
                            d="M9.14286 0C10.4071 0 11.4286 1.00547 11.4286 2.25V4.5H20.5714V2.25C20.5714 1.00547 21.5929 0 22.8571 0C24.1214 0 25.1429 1.00547 25.1429 2.25V4.5H28.5714C30.4643 4.5 32 6.01172 32 7.875V11.25H0V7.875C0 6.01172 1.53571 4.5 3.42857 4.5H6.85714V2.25C6.85714 1.00547 7.87857 0 9.14286 0ZM0 13.5H32V32.625C32 34.4883 30.4643 36 28.5714 36H3.42857C1.53571 36 0 34.4883 0 32.625V13.5ZM4.57143 19.125V21.375C4.57143 21.9937 5.08571 22.5 5.71429 22.5H8C8.62857 22.5 9.14286 21.9937 9.14286 21.375V19.125C9.14286 18.5063 8.62857 18 8 18H5.71429C5.08571 18 4.57143 18.5063 4.57143 19.125ZM13.7143 19.125V21.375C13.7143 21.9937 14.2286 22.5 14.8571 22.5H17.1429C17.7714 22.5 18.2857 21.9937 18.2857 21.375V19.125C18.2857 18.5063 17.7714 18 17.1429 18H14.8571C14.2286 18 13.7143 18.5063 13.7143 19.125ZM24 18C23.3714 18 22.8571 18.5063 22.8571 19.125V21.375C22.8571 21.9937 23.3714 22.5 24 22.5H26.2857C26.9143 22.5 27.4286 21.9937 27.4286 21.375V19.125C27.4286 18.5063 26.9143 18 26.2857 18H24ZM4.57143 28.125V30.375C4.57143 30.9937 5.08571 31.5 5.71429 31.5H8C8.62857 31.5 9.14286 30.9937 9.14286 30.375V28.125C9.14286 27.5063 8.62857 27 8 27H5.71429C5.08571 27 4.57143 27.5063 4.57143 28.125ZM14.8571 27C14.2286 27 13.7143 27.5063 13.7143 28.125V30.375C13.7143 30.9937 14.2286 31.5 14.8571 31.5H17.1429C17.7714 31.5 18.2857 30.9937 18.2857 30.375V28.125C18.2857 27.5063 17.7714 27 17.1429 27H14.8571ZM22.8571 28.125V30.375C22.8571 30.9937 23.3714 31.5 24 31.5H26.2857C26.9143 31.5 27.4286 30.9937 27.4286 30.375V28.125C27.4286 27.5063 26.9143 27 26.2857 27H24C23.3714 27 22.8571 27.5063 22.8571 28.125Z"
                            fill="url(#paint0_linear_2_84)"
                        />
                        <defs>
                            <linearGradient
                                id="paint0_linear_2_84"
                                x1="-2.04713e-07"
                                y1="3.34884"
                                x2="38.5477"
                                y2="36.2217"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop stop-color="#F86F03"/>
                                <stop offset="1" stop-color="#FFA41B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="font-medium inline-block align-middle">
                        Kamis, 10 Juli 2025
                    </p>
                </div>
                <div class="space-x-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        class="inline-block align-middle"
                    >
                        <path
                            d="M16 0C11.7565 0 7.68687 1.68571 4.68629 4.68629C1.68571 7.68687 0 11.7565 0 16C0 20.2435 1.68571 24.3131 4.68629 27.3137C7.68687 30.3143 11.7565 32 16 32C20.2435 32 24.3131 30.3143 27.3137 27.3137C30.3143 24.3131 32 20.2435 32 16C32 11.7565 30.3143 7.68687 27.3137 4.68629C24.3131 1.68571 20.2435 0 16 0ZM17.5 7.5V16C17.5 16.5 17.25 16.9688 16.8313 17.25L10.8312 21.25C10.1437 21.7125 9.2125 21.525 8.75 20.8312C8.2875 20.1375 8.475 19.2125 9.16875 18.75L14.5 15.2V7.5C14.5 6.66875 15.1688 6 16 6C16.8313 6 17.5 6.66875 17.5 7.5Z"
                            fill="url(#paint0_linear_2_85)"
                        />
                        <defs>
                            <linearGradient
                                id="paint0_linear_2_85"
                                x1="16"
                                y1="0"
                                x2="36.9524"
                                y2="32"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop stop-color="#F86F03"/>
                                <stop offset="1" stop-color="#FFA41B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="font-medium inline-block align-middle">06:00 - 06:45</p>
                </div>

            </div>
        </div>

        <div
            class="w-[307px] p-4 h-auto shrink-0 backdrop-blur-[12px] border rounded-3xl border-[#F86F03] bg-gradient-to-b from-[#F8F8F8]/25 to-[#F8F8F8]/75"
        >
            <img src="{{asset('img/admin.jpeg')}}" class="rounded-t-3xl" alt=""/>
            <div class="flex flex-col space-y-4 mt-3">
                <h3 class="font-bold text-center uppercase text-xl">
                    Kebaktian Pagi
                </h3>
                <div class="space-x-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="36"
                        viewBox="0 0 32 36"
                        fill="none"
                        class="inline-block align-middle"
                    >
                        <path
                            d="M9.14286 0C10.4071 0 11.4286 1.00547 11.4286 2.25V4.5H20.5714V2.25C20.5714 1.00547 21.5929 0 22.8571 0C24.1214 0 25.1429 1.00547 25.1429 2.25V4.5H28.5714C30.4643 4.5 32 6.01172 32 7.875V11.25H0V7.875C0 6.01172 1.53571 4.5 3.42857 4.5H6.85714V2.25C6.85714 1.00547 7.87857 0 9.14286 0ZM0 13.5H32V32.625C32 34.4883 30.4643 36 28.5714 36H3.42857C1.53571 36 0 34.4883 0 32.625V13.5ZM4.57143 19.125V21.375C4.57143 21.9937 5.08571 22.5 5.71429 22.5H8C8.62857 22.5 9.14286 21.9937 9.14286 21.375V19.125C9.14286 18.5063 8.62857 18 8 18H5.71429C5.08571 18 4.57143 18.5063 4.57143 19.125ZM13.7143 19.125V21.375C13.7143 21.9937 14.2286 22.5 14.8571 22.5H17.1429C17.7714 22.5 18.2857 21.9937 18.2857 21.375V19.125C18.2857 18.5063 17.7714 18 17.1429 18H14.8571C14.2286 18 13.7143 18.5063 13.7143 19.125ZM24 18C23.3714 18 22.8571 18.5063 22.8571 19.125V21.375C22.8571 21.9937 23.3714 22.5 24 22.5H26.2857C26.9143 22.5 27.4286 21.9937 27.4286 21.375V19.125C27.4286 18.5063 26.9143 18 26.2857 18H24ZM4.57143 28.125V30.375C4.57143 30.9937 5.08571 31.5 5.71429 31.5H8C8.62857 31.5 9.14286 30.9937 9.14286 30.375V28.125C9.14286 27.5063 8.62857 27 8 27H5.71429C5.08571 27 4.57143 27.5063 4.57143 28.125ZM14.8571 27C14.2286 27 13.7143 27.5063 13.7143 28.125V30.375C13.7143 30.9937 14.2286 31.5 14.8571 31.5H17.1429C17.7714 31.5 18.2857 30.9937 18.2857 30.375V28.125C18.2857 27.5063 17.7714 27 17.1429 27H14.8571ZM22.8571 28.125V30.375C22.8571 30.9937 23.3714 31.5 24 31.5H26.2857C26.9143 31.5 27.4286 30.9937 27.4286 30.375V28.125C27.4286 27.5063 26.9143 27 26.2857 27H24C23.3714 27 22.8571 27.5063 22.8571 28.125Z"
                            fill="url(#paint0_linear_2_84)"
                        />
                        <defs>
                            <linearGradient
                                id="paint0_linear_2_84"
                                x1="-2.04713e-07"
                                y1="3.34884"
                                x2="38.5477"
                                y2="36.2217"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop stop-color="#F86F03"/>
                                <stop offset="1" stop-color="#FFA41B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="font-medium inline-block align-middle">
                        Kamis, 10 Juli 2025
                    </p>
                </div>
                <div class="space-x-3">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        class="inline-block align-middle"
                    >
                        <path
                            d="M16 0C11.7565 0 7.68687 1.68571 4.68629 4.68629C1.68571 7.68687 0 11.7565 0 16C0 20.2435 1.68571 24.3131 4.68629 27.3137C7.68687 30.3143 11.7565 32 16 32C20.2435 32 24.3131 30.3143 27.3137 27.3137C30.3143 24.3131 32 20.2435 32 16C32 11.7565 30.3143 7.68687 27.3137 4.68629C24.3131 1.68571 20.2435 0 16 0ZM17.5 7.5V16C17.5 16.5 17.25 16.9688 16.8313 17.25L10.8312 21.25C10.1437 21.7125 9.2125 21.525 8.75 20.8312C8.2875 20.1375 8.475 19.2125 9.16875 18.75L14.5 15.2V7.5C14.5 6.66875 15.1688 6 16 6C16.8313 6 17.5 6.66875 17.5 7.5Z"
                            fill="url(#paint0_linear_2_85)"
                        />
                        <defs>
                            <linearGradient
                                id="paint0_linear_2_85"
                                x1="16"
                                y1="0"
                                x2="36.9524"
                                y2="32"
                                gradientUnits="userSpaceOnUse"
                            >
                                <stop stop-color="#F86F03"/>
                                <stop offset="1" stop-color="#FFA41B"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="font-medium inline-block align-middle">06:00 - 06:45</p>
                </div>

            </div>
        </div>

        <div
            class="w-[340px] h-[280px] align-middle flex flex-col justify-center shrink-0 backdrop-blur-[12px] border rounded-3xl border-[#F86F03] bg-gradient-to-b from-[#F8F8F8]/25 to-[#F8F8F8]/75 text-center font-bold"
        >
            <h3 class="text-mandarin text-2xl">
                癸卯 <span class="block">壹佰壹拾年</span>
            </h3>
            <h3 class="uppercase mt-3 text-xl">Jadwal Kebaktian</h3>
            <ul class="space-y-1 mt-6 text-xl">
                <li>Pagi : 06.00 - 06.45</li>
                <li>Siang : 12.00 - 12.45</li>
                <li>Malam : 18.00 - 18.45</li>
            </ul>
        </div>
    </div>
</div>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="127"
    height="214"
    viewBox="0 0 127 214"
    fill="none"
    class="absolute -z-[10] top-1/3"
>
    <circle cx="20" cy="107" r="107" fill="#F86F03"/>
</svg>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="164"
    height="154"
    viewBox="0 0 164 154"
    fill="none"
    class="absolute -z-[10] bottom-0"
>
    <circle cx="46.5" cy="117.5" r="117.5" fill="#FAFF1B"/>
    <circle cx="46.5" cy="117.5" r="117.5" fill="#FAFF1B"/>
</svg>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="113"
    height="226"
    viewBox="0 0 113 226"
    fill="none"
    class="absolute -z-[10] top-1/2 right-0"
>
    <circle cx="113" cy="113" r="113" fill="#FFA41B"/>
</svg>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="85"
    height="85"
    viewBox="0 0 85 85"
    fill="none"
    class="absolute bottom-0 left-1/4 -translate-x-32 -translate-y-2 -z-[10]"
>
    <circle cx="42.5" cy="42.5" r="42.5" fill="#F86F03"/>
</svg>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="113"
    height="113"
    viewBox="0 0 113 113"
    fill="none"
    class="absolute -z-[10] top-1/2 translate-x-20 translate-y-10"
>
    <circle cx="56.5" cy="56.5" r="56.5" fill="#FFA41B"/>
</svg>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="81"
    height="81"
    viewBox="0 0 81 81"
    fill="none"
    class="absolute -z-[10] top-1/2 right-1/2 translate-x-48 translate-y-24"
>
    <circle cx="40.5" cy="40.5" r="40.5" fill="#FAFF1B"/>
    <circle cx="40.5" cy="40.5" r="40.5" fill="#FAFF1B"/>
</svg>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="64"
    height="64"
    viewBox="0 0 64 64"
    fill="none"
    class="absolute -z-[10] right-1/4 top-1/3 translate-x-6"
>
    <circle cx="32" cy="32" r="32" fill="#FFA41B"/>
</svg>

<svg
    xmlns="http://www.w3.org/2000/svg"
    width="207"
    height="207"
    viewBox="0 0 207 207"
    fill="none"
    class="absolute -z-[10] bottom-0 right-80"
>
    <circle cx="103.5" cy="103.5" r="103.5" fill="#F86F03"/>
</svg>

<img src="{{asset('img/Xiao Mi Le.png')}}" class="absolute right-0 bottom-0 -translate-y-5" alt="Xiao Mi Le" width="425px">
</body>
</html>
