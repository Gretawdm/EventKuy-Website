<div class="card mb-3">
    <div class="card-body pt-1">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">
            <li>
                <a href="/semua" class="nav-link {{ Request::is('semua') ? 'active' : '' }}" style="font-weight: 800">
                   Semua
                </a>
            </li>
            <li>
                <a href="/edit_profile" class="nav-link {{ Request::is('diterima') ? 'active' : '' }}"
                    style="font-weight: 800">
                   Diterima
                </a>
            </li>
            <li>
                <a href="/ubah_password" class="nav-link {{ Request::is('ditolak') ? 'active' : '' }}"
                    style="font-weight: 800">
                    Ditolak
                </a>
            </li>
            <li>
                <a href="/ubah_password" class="nav-link {{ Request::is('menunggu pembayaran') ? 'active' : '' }}"
                    style="font-weight: 800">
                    Menunggu Pembayaran
                </a>
            </li>
            <li>
                <a href="/ubah_password" class="nav-link {{ Request::is('terverifikasi') ? 'active' : '' }}"
                    style="font-weight: 800">
                    Terverfikasi
                </a>
            </li>
        </ul>
    </div>
</div>


<style>
    main {
        min-width: 320px;
        max-width: 800px;
        padding: 50px;
        margin: 0 auto;
        background: #fff;
    }

    section {
        display: none;
        padding: 20px 0 0;
        border-top: 1px solid #ddd;
    }


    /**/
    /* main styles */
    /**/
    .pcss3t {
        margin: 0;
        padding: 0;
        border: 0;
        outline: none;
        font-size: 0;
        text-align: left;
    }

    .pcss3t>input {
        position: absolute;
        left: -9999px;
    }

    .pcss3t>label {
        position: relative;
        display: inline-block;
        margin: 0;
        padding: 0;
        border: 0;
        outline: none;
        cursor: pointer;
        transition: all 0.1s;
        -o-transition: all 0.1s;
        -ms-transition: all 0.1s;
        -moz-transition: all 0.1s;
        -webkit-transition: all 0.1s;
    }

    .pcss3t>label i {
        display: block;
        float: left;
        margin: 16px 8px 0 -2px;
        padding: 0;
        border: 0;
        outline: none;
        font-family: FontAwesome;
        font-style: normal;
        font-size: 17px;
    }

    .pcss3t>input:checked+label {
        cursor: default;
    }

    .pcss3t>ul {
        list-style: none;
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
        border: 0;
        outline: none;
        font-size: 13px;
    }

    .pcss3t>ul>li {
        position: absolute;
        width: 100%;
        overflow: auto;
        padding: 30px 40px 40px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        opacity: 0;
        transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }

    .pcss3t>.tab-content-first:checked~ul .tab-content-first,
    .pcss3t>.tab-content-2:checked~ul .tab-content-2,
    .pcss3t>.tab-content-3:checked~ul .tab-content-3,
    .pcss3t>.tab-content-4:checked~ul .tab-content-4,
    .pcss3t>.tab-content-5:checked~ul .tab-content-5,
    .pcss3t>.tab-content-6:checked~ul .tab-content-6,
    .pcss3t>.tab-content-7:checked~ul .tab-content-7,
    .pcss3t>.tab-content-8:checked~ul .tab-content-8,
    .pcss3t>.tab-content-9:checked~ul .tab-content-9,
    .pcss3t>.tab-content-last:checked~ul .tab-content-last {
        z-index: 1;
        top: 0;
        left: 0;
        opacity: 1;
        -webkit-transform: scale(1, 1);
        -webkit-transform: rotate(0deg);
    }

    /*----------------------------------------------------------------------------*/
    /*                               RESPONSIVENESS                               */
    /*----------------------------------------------------------------------------*/

    /**/
    /* pad */
    /**/
    @media screen and (max-width: 980px) {}


    /**/
    /* phone */
    /**/
    @media screen and (max-width: 767px) {
        .pcss3t>label {
            display: block;
        }

        .pcss3t>.right {
            float: none;
        }
    }



    /*----------------------------------------------------------------------------*/
    /*                                   THEMES                                   */
    /*----------------------------------------------------------------------------*/

    /**/
    /* default */
    /**/
    .pcss3t>label {
        padding: 0 20px;
        background: #e5e5e5;
        font-size: 13px;
        line-height: 49px;
    }

    .pcss3t>label:hover {
        background: #f2f2f2;
    }

    .pcss3t>input:checked+label {
        background: #fff;
    }

    .pcss3t>ul {
        background: #fff;
        text-align: left;
    }

    .pcss3t-steps>label:hover {
        background: #e5e5e5;
    }


    /**/
    /* theme 1 */
    /**/
    .pcss3t-theme-1>label {
        margin: 0 5px 5px 0;
        border-radius: 5px;
        background: #fff;
        box-shadow: 0 2px rgba(0, 0, 0, 0.2);
        color: #808080;
        opacity: 0.8;
    }

    .pcss3t-theme-1>label:hover {
        background: #fff;
        opacity: 1;
    }

    .pcss3t-theme-1>input:checked+label {
        margin-bottom: 0;
        padding-bottom: 5px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        color: #2b82d9;
        opacity: 1;
    }

    .pcss3t-theme-1>ul {
        border-radius: 5px;
        box-shadow: 0 3px rgba(0, 0, 0, 0.2);
    }

    .pcss3t-theme-1>.tab-content-first:checked~ul {
        border-top-left-radius: 0;
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-1>label {
            margin-right: 0;
        }

        .pcss3t-theme-1>input:checked+label {
            margin-bottom: 5px;
            padding-bottom: 0;
            border-radius: 5px;
        }

        .pcss3t-theme-1>.tab-content-first:checked~ul {
            border-top-left-radius: 5px;
        }
    }


    /**/
    /* theme 2 */
    /**/
    .pcss3t-theme-2 {
        padding: 5px;
        background: rgba(0, 0, 0, 0.2);
    }

    .pcss3t-theme-2>label {
        margin-right: 0;
        margin-bottom: 0;
        background: none;
        border-radius: 0;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        color: #fff;
        opacity: 1;
    }

    .pcss3t-theme-2>label:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    .pcss3t-theme-2>input:checked+label {
        padding-bottom: 0;
        background: #fff;
        background: linear-gradient(to bottom, #e5e5e5 0%, #ffffff 100%);
        background: -o-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        background: -ms-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        background: -moz-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        background: -webkit-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=0);
        text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.5);
        color: #822bd9;
    }

    .pcss3t-theme-2>ul {
        margin: 0 -5px -5px;
        border-radius: 0;
        box-shadow: none;
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-2>ul {
            margin-top: 5px;
        }
    }


    /**/
    /* theme 3 */
    /**/
    .pcss3t-theme-3 {
        background: rgba(0, 0, 0, 0.8);
    }

    .pcss3t-theme-3>label {
        background: none;
        border-right: 1px dotted rgba(255, 255, 255, 0.5);
        text-align: center;
        color: #fff;
        opacity: 0.6;
    }

    .pcss3t-theme-3>label:hover {
        background: none;
        color: #d9d92b;
        opacity: 0.8;
    }

    .pcss3t-theme-3>input:checked+label {
        background: #d9d92b;
        color: #000;
        opacity: 1;
    }

    .pcss3t-theme-3>ul {
        border-top: 4px solid #d9d92b;
        border-bottom: 4px solid #d9d92b;
        border-radius: 0;
        box-shadow: none;
    }


    /**/
    /* theme 4 */
    /**/
    .pcss3t-theme-4>label {
        margin: 0 10px 10px 0;
        border-radius: 5px;
        background: #78c5fd;
        background: linear-gradient(to bottom, #78c5fd 0%, #2c8fdd 100%);
        background: -o-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        background: -ms-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        background: -moz-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        background: -webkit-linear-gradient(top, #78c5fd 0%, #2c8fdd 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#78c5fd', endColorstr='#2c8fdd', GradientType=0);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 1px rgba(0, 0, 0, 0.5);
        line-height: 39px;
        text-shadow: 0 1px rgba(0, 0, 0, 0.5);
        color: #fff;
    }

    .pcss3t-theme-4>label:hover {
        background: #90cffc;
        background: linear-gradient(to bottom, #90cffc 0%, #439bde 100%);
        background: -o-linear-gradient(top, #90cffc 0%, #439bde 100%);
        background: -ms-linear-gradient(top, #90cffc 0%, #439bde 100%);
        background: -moz-linear-gradient(top, #90cffc 0%, #439bde 100%);
        background: -webkit-linear-gradient(top, #90cffc 0%, #439bde 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#90cffc', endColorstr='#439bde', GradientType=0);
    }

    .pcss3t-theme-4>input:checked+label {
        top: 1px;
        background: #5f9dc9;
        background: linear-gradient(to bottom, #5f9dc9 0%, #2270ab 100%);
        background: -o-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        background: -ms-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        background: -moz-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        background: -webkit-linear-gradient(top, #5f9dc9 0%, #2270ab 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5f9dc9', endColorstr='#2270ab', GradientType=0);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.5), 0 1px rgba(255, 255, 255, 0.5);
        text-shadow: none;
    }

    .pcss3t-theme-4>ul {
        border-radius: 5px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-4>label {
            margin-right: 0;
        }
    }


    /**/
    /* theme 5 */
    /**/
    .pcss3t-theme-5 {
        padding: 15px;
        border-radius: 5px;
        background: #ad6395;
        background: linear-gradient(to right, #ad6395 0%, #a163ad 100%);
        background: -o-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        background: -ms-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        background: -moz-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        background: -webkit-linear-gradient(left, #ad6395 0%, #a163ad 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5f9dc9', endColorstr='#a163ad', GradientType=1);
    }

    .pcss3t-theme-5>label {
        margin-right: 10px;
        margin-bottom: 15px;
        background: none;
        border-radius: 5px;
        text-align: center;
        color: #fff;
        opacity: 1;
    }

    .pcss3t-theme-5>label:hover {
        background: rgba(255, 255, 255, 0.15);
    }

    .pcss3t-theme-5>input:checked+label {
        background: rgba(255, 255, 255, 0.3);
        color: #000;
    }

    .pcss3t-theme-5>input:checked+label:after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        margin-top: 10px;
        margin-left: -6px;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #fff;
        border-left: 6px solid transparent;
    }

    .pcss3t-theme-5>ul {
        margin: 0 -15px -15px;
        border-radius: 0 0 5px 5px;
        box-shadow: none;
    }

    @media screen and (max-width: 767px) {
        .pcss3t-theme-5>input:checked+label:after {
            display: none;
        }
    }

    /*----------------------------------------------------------------------------*/
    /*                               CUSTOMIZATION                                */
    /*----------------------------------------------------------------------------*/
</style>
{{-- <script>
// Definisikan objek untuk menyimpan mapping route ke URL
const routeMapping = {
    semua: '{{ route("semua") }}',
    diterima: '{{ route("diterima") }}',
    ditolak: '{{ route("ditolak") }}',
    menunggu_pembayaran: '{{ route("menunggu_pembayaran") }}',
    terverifikasi: '{{ route("terverifikasi") }}'
    // tambahkan route lainnya sesuai kebutuhan
};

// Fungsi untuk mengarahkan ke URL berdasarkan nama route
function navigateToRoute(routeName) {
    const url = routeMapping[routeName];
    if (url) {
        window.location.href = url;
    } else {
        console.error(`Route '${routeName}' tidak ditemukan dalam mapping.`);
    }
}
</script> --}}
