<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <title>KPU CIBIRU {{ $title }}</title>
</head>

<body>
    <div class="my-container">
        <div class="">
            <div class="brand-logo py-3 px-3">

                <svg width="49" height="39" viewBox="0 0 545 527" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M276.119 1.96948C293.467 1.96948 307.506 15.9689 307.506 33.2685C307.506 50.5681 293.467 64.5675 276.119 64.5675C258.77 64.5675 244.731 50.5681 244.731 33.2685C244.731 15.9689 258.77 1.96948 276.119 1.96948Z"
                        fill="#F7C013" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M182.329 0.0532296L174.696 66.4305C227.169 83.3043 240.408 144.625 242.703 218.348L268.432 218.401V116.839H280.496V218.401L305.105 218.454C309.749 149.628 320.638 87.0303 375.62 68.4L370.656 3.51315C454.89 40.1351 502.346 92.6194 526.954 154.951C416.883 176.083 335.425 227.397 272.809 298.511C209.5 222.979 127.614 170.707 20.9602 149.256C49.5188 84.2092 103.647 34.6524 182.329 0V0.0532296Z"
                        fill="#E62129" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M304.091 358.395C347.009 287.067 437.222 224.363 541.474 211.162C550.869 283.128 535.869 349.026 496.474 408.856C443.948 379.42 378.29 364.197 304.091 358.448V358.395Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.44064 204.827C112.134 224.363 191.511 280.946 239.233 358.395C160.87 362.706 95.2124 376.44 45.5686 404.758C4.57233 344.449 -9.57351 264.604 6.44064 204.774V204.827Z"
                        fill="black" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M53.4689 417.48C103.647 389.481 181.742 374.151 261.6 373.725V422.323C197.917 423.228 135.622 438.079 98.1484 465.014C79.1983 449.577 64.2518 433.023 53.4155 417.48H53.4689ZM261.6 436.003V483.218C229.411 484.389 198.824 494.343 186.28 512.654C157.614 503.445 132.739 490.298 111.814 475.393C145.07 450.588 202.614 436.962 261.546 435.95L261.6 436.003ZM261.6 498.389V525.855C240.514 525.003 220.71 521.969 202.347 517.285C211.155 505.681 235.657 499.347 261.6 498.389ZM278.361 373.885C355.282 375.481 432.204 391.078 485.744 422.59C472.613 439.25 457.613 454.687 440.798 468.261C401.456 438.665 340.229 423.92 278.361 422.483V373.885ZM427.773 478.161C405.834 493.758 381.065 506.32 353.521 514.677C340.122 495.621 309.856 485.294 278.361 483.484V436.163C336.119 437.547 393.076 451.121 427.773 478.215V478.161ZM337.4 518.988C318.877 523.3 299.233 525.802 278.361 526.121V498.495C304.838 499.772 329.606 506.639 337.4 518.988Z"
                        fill="black" />
                </svg>
                <span><span class="font-weight-bold">SIPDA</span> UPI CIBIRU</span>
            </div>
        </div>

        {{-- <img src="{{ asset('/img/upi-logo.png') }}" class="logo-dashboard mt-3 ml-2" alt="Logo" /> --}}
        <div class="bio d-flex justify-content-start ml-3">
            <svg viewBox="0 0 212 212" width="75" height="75" class="">
                <path fill="#DFE5E7" class="background"
                    d="M106.251.5C164.653.5 212 47.846 212 106.25S164.653 212 106.25 212C47.846 212 .5 164.654.5 106.25S47.846.5 106.251.5z">
                </path>
                <path fill="#FFF" class="primary"
                    d="M173.561 171.615a62.767 62.767 0 0 0-2.065-2.955 67.7 67.7 0 0 0-2.608-3.299 70.112 70.112 0 0 0-3.184-3.527 71.097 71.097 0 0 0-5.924-5.47 72.458 72.458 0 0 0-10.204-7.026 75.2 75.2 0 0 0-5.98-3.055c-.062-.028-.118-.059-.18-.087-9.792-4.44-22.106-7.529-37.416-7.529s-27.624 3.089-37.416 7.529c-.338.153-.653.318-.985.474a75.37 75.37 0 0 0-6.229 3.298 72.589 72.589 0 0 0-9.15 6.395 71.243 71.243 0 0 0-5.924 5.47 70.064 70.064 0 0 0-3.184 3.527 67.142 67.142 0 0 0-2.609 3.299 63.292 63.292 0 0 0-2.065 2.955 56.33 56.33 0 0 0-1.447 2.324c-.033.056-.073.119-.104.174a47.92 47.92 0 0 0-1.07 1.926c-.559 1.068-.818 1.678-.818 1.678v.398c18.285 17.927 43.322 28.985 70.945 28.985 27.678 0 52.761-11.103 71.055-29.095v-.289s-.619-1.45-1.992-3.778a58.346 58.346 0 0 0-1.446-2.322zM106.002 125.5c2.645 0 5.212-.253 7.68-.737a38.272 38.272 0 0 0 3.624-.896 37.124 37.124 0 0 0 5.12-1.958 36.307 36.307 0 0 0 6.15-3.67 35.923 35.923 0 0 0 9.489-10.48 36.558 36.558 0 0 0 2.422-4.84 37.051 37.051 0 0 0 1.716-5.25c.299-1.208.542-2.443.725-3.701.275-1.887.417-3.827.417-5.811s-.142-3.925-.417-5.811a38.734 38.734 0 0 0-1.215-5.494 36.68 36.68 0 0 0-3.648-8.298 35.923 35.923 0 0 0-9.489-10.48 36.347 36.347 0 0 0-6.15-3.67 37.124 37.124 0 0 0-5.12-1.958 37.67 37.67 0 0 0-3.624-.896 39.875 39.875 0 0 0-7.68-.737c-21.162 0-37.345 16.183-37.345 37.345 0 21.159 16.183 37.342 37.345 37.342z">
                </path>
            </svg>
            <div class="biodata d-flex flex-column justify-content-center ml-3">
                <h1>Mang Ujang</h1>
                <p>2000098 - <span class="text-uppercase">Rekayasa Perangkat Lunak</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col sidebar pt-4">
                <div class="menu sticky-top">
                    <ul>
                        <li class="{{ $active == 'dashboard' ? 'menu-active' : '' }}">
                            <a href="{{ route('dashboard') }}">
                                <div class="item px-5 py-3">
                                    <svg width="30" height="31" viewBox="0 0 36 37" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.1592 24.5882C22.2307 24.5882 23.9168 26.2623 23.9168 28.32V33.6123C23.9168 34.0545 24.2712 34.4089 24.7254 34.4192H28.0047C30.5889 34.4192 32.6897 32.3443 32.6897 29.7945V14.7848C32.6776 13.9073 32.2596 13.0815 31.5421 12.5326L20.1988 3.48618C18.6761 2.28011 16.5461 2.28011 15.0183 3.48962L3.75243 12.5292C3.00745 13.0952 2.58937 13.9211 2.58077 14.814V29.7945C2.58077 32.3443 4.68151 34.4192 7.26571 34.4192H10.576C11.0422 34.4192 11.4207 34.0493 11.4207 33.5951C11.4207 33.4953 11.4328 33.3955 11.4534 33.3009V28.32C11.4534 26.2743 13.1292 24.602 15.1852 24.5882H20.1592ZM28.0047 37H24.6945C22.7985 36.9553 21.336 35.467 21.336 33.6123V28.32C21.336 27.6852 20.8078 27.169 20.1592 27.169H15.1938C14.559 27.1724 14.0342 27.6903 14.0342 28.32V33.5951C14.0342 33.7241 14.017 33.848 13.9809 33.965C13.795 35.6683 12.3395 37 10.576 37H7.26571C3.25865 37 0 33.7672 0 29.7945V14.802C0.0172051 13.0918 0.805199 11.5261 2.16612 10.4955L13.4097 1.47147C15.8855 -0.489915 19.3351 -0.489915 21.8057 1.46803L33.1301 10.5007C34.4601 11.5141 35.2481 13.0763 35.2705 14.7658V29.7945C35.2705 33.7672 32.0118 37 28.0047 37Z"
                                            fill="black" />
                                    </svg>
                                    <span>Beranda</span>
                                </div>
                            </a>
                        </li>
                        <li class="{{ $active == 'voting' ? 'menu-active' : '' }}">
                            <a href="{{ route('voting') }}">
                                <div class="item px-5 py-3">
                                    <svg width="30" height="44" viewBox="0 0 37 41" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.8333 22.5512H29.4356L25.3244 26.651H29.2506L32.8889 30.7507H4.11111L7.77 26.651H11.9839L7.87278 22.5512H6.16667L0 28.7008V36.9003C0 39.1551 1.82944 41 4.09056 41H32.8889C33.9792 41 35.0249 40.5681 35.7959 39.7992C36.5669 39.0304 37 37.9876 37 36.9003V28.7008L30.8333 22.5512ZM32.8889 36.9003H4.11111V34.8504H32.8889V36.9003ZM17.1433 26.692C17.945 27.4914 19.24 27.4914 20.0417 26.692L33.115 13.6548C33.3056 13.4652 33.4567 13.2399 33.5599 12.992C33.663 12.744 33.7161 12.4781 33.7161 12.2097C33.7161 11.9412 33.663 11.6754 33.5599 11.4274C33.4567 11.1794 33.3056 10.9542 33.115 10.7645L22.94 0.61771C22.7545 0.424206 22.532 0.269824 22.2856 0.163722C22.0392 0.0576208 21.7739 0.00196286 21.5055 5.09877e-05C21.2371 -0.00186089 20.971 0.0500123 20.7231 0.152592C20.4752 0.255173 20.2504 0.406369 20.0622 0.597211L6.96833 13.6548C6.77778 13.8445 6.62659 14.0697 6.52344 14.3177C6.42029 14.5657 6.3672 14.8315 6.3672 15.1C6.3672 15.3685 6.42029 15.6343 6.52344 15.8823C6.62659 16.1302 6.77778 16.3555 6.96833 16.5451L17.1433 26.692ZM21.5011 4.94292L28.7778 12.1994L18.6028 22.3463L11.3261 15.0897L21.5011 4.94292Z"
                                            fill="black" />
                                    </svg>
                                    <span>Pemilihan</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="content">
                    @yield("main-content")
                </div>
            </div>
            <div class="col px-2">
                <div class="info sticky-top overflow-auto vh-100">
                    @yield('info-content')
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
