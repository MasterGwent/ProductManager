<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Тестовое</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<div class="d-flex" id="wrapper">
    <div class="bg-dark col-1" id="sidebar-wrapper" style="padding-left: 0!important;">
        <div class="col-7"
             style="background-color: white; display: flex; justify-content: center; align-items: center; height: 80px; width: 115px; border-bottom-right-radius: 20px">

            <svg width="100" height="100" viewBox="0 0 53 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M22.39 22.8009L24.7961 9.58182C24.9198 9.21567 25.1601 8.92138 25.5257 8.70237C25.9639 8.4577 26.4956 8.32596 27.121 8.30885L30.633 8.30542L30.4687 9.19172L27.9919 22.8027H22.39V22.8009Z"
                    fill="url(#paint0_linear_3_209)"/>
                <path d="M39.406 8.2915L36.7631 22.8007H31.2301L33.8694 8.2915H39.406Z"
                      fill="url(#paint1_linear_3_209)"/>
                <path
                    d="M3.12158 5.17404H8.66166V5.17062C8.66166 5.17062 11.9952 5.15522 13.2707 5.15522C15.88 5.15522 17.4187 6.85937 17.0707 9.4481C16.758 11.7699 14.6346 13.1473 12.3592 13.1644C8.40197 13.1952 7.86315 18.3247 12.0023 18.3247C13.9897 18.3247 16.4542 18.1382 18.8373 16.328C21.4961 14.309 22.1497 12.1994 22.6426 9.47205C22.9482 7.7833 22.5631 4.64363 20.9237 2.79063C19.2843 0.939334 17.0672 0.0136882 14.2706 0.0136882C11.4741 0.0136882 4.09145 0 4.09145 0C4.09145 0 3.61093 2.57846 3.12158 5.17404Z"
                    fill="url(#paint2_linear_3_209)"/>
                <path
                    d="M0 22.7785L2.16233 10.9059C2.16233 10.9059 5.67081 10.9179 6.11423 10.9093C8.16349 10.9093 9.01853 8.28467 10.7816 8.28467C11.0448 8.28467 13.2372 8.27954 13.2372 8.27954C14.283 8.27954 14.6911 9.2069 14.631 9.62438C14.518 10.3943 14.0445 10.8358 13.0252 10.8358L13.0234 10.8426C13.0234 10.8426 12.345 10.8477 11.9652 10.8426C10.0114 10.8204 7.65294 11.6502 7.11942 14.126C6.48345 17.6198 5.53831 22.7785 5.53831 22.7785H0Z"
                    fill="url(#paint3_linear_3_209)"/>
                <path
                    d="M3.48544 8.36497H1.98029C1.86193 8.36497 1.75063 8.45565 1.72943 8.57029C1.71 8.68321 1.78773 8.7756 1.90433 8.7756H3.40771C3.52431 8.7756 3.63737 8.68321 3.6568 8.57029C3.67977 8.45565 3.60204 8.36497 3.48544 8.36497ZM3.67624 7.31099H2.17109C2.05449 7.31099 1.9432 7.40339 1.922 7.51631C1.9008 7.62924 1.98029 7.72163 2.09689 7.72163H3.60204C3.7204 7.72163 3.8317 7.62924 3.8529 7.51631C3.87233 7.40339 3.7946 7.31099 3.67624 7.31099ZM3.29288 9.41722H1.78773C1.66937 9.41722 1.55807 9.50962 1.53687 9.62426C1.51568 9.73718 1.59517 9.83129 1.71 9.83129H3.21515C3.33351 9.83129 3.44481 9.73889 3.46601 9.62426C3.48897 9.50962 3.41124 9.41722 3.29288 9.41722ZM3.8688 6.25189H2.36541C2.24705 6.25189 2.13576 6.34429 2.11456 6.45721C2.09512 6.57185 2.17286 6.66424 2.28945 6.66424H3.7946C3.91119 6.66424 4.02426 6.57185 4.04369 6.45721C4.06489 6.34429 3.98716 6.25189 3.8688 6.25189ZM26.3489 1.29002C26.0556 2.83504 25.4585 6.05171 25.4585 6.05171C25.7659 5.7232 26.0697 5.59658 26.3224 5.51617C26.6368 5.41693 27.0361 5.38613 27.6615 5.36902L31.1752 5.36388L32.1663 0.0615234H28.9281C27.37 0.0632344 26.5591 0.603909 26.3489 1.29002ZM49.2776 2.26015C47.6347 0.793829 45.5642 0.0632361 43.0645 0.0632361H35.3674L34.4028 5.36046H39.95L42.0893 5.41522C43.1051 5.44773 43.9655 5.68555 44.6721 6.13212C45.8169 6.89694 46.2303 8.15623 45.9105 9.90657L44.2852 18.8397C43.7093 21.7158 47.4421 22.8485 49.0904 22.8485C49.2653 21.9331 51.2651 10.9024 51.2651 10.9024H51.2563L51.4382 9.90657C52.0353 6.6266 51.3145 4.07551 49.2776 2.26015Z"
                    fill="url(#paint4_linear_3_209)"/>
                <path
                    d="M51.9224 0.0720215C52.1026 0.0720215 52.2792 0.116509 52.4523 0.207191C52.6255 0.297874 52.7597 0.426197 52.8551 0.593875C52.9523 0.761552 53 0.936073 53 1.11744C53 1.29709 52.9523 1.4699 52.8587 1.63587C52.7633 1.80184 52.6308 1.93016 52.4612 2.02255C52.2898 2.11495 52.1114 2.15943 51.9241 2.15943C51.7369 2.15943 51.5584 2.11324 51.3871 2.02255C51.2157 1.93016 51.0832 1.80184 50.9878 1.63587C50.8924 1.4699 50.8447 1.29709 50.8447 1.11744C50.8447 0.936073 50.8924 0.761552 50.9896 0.593875C51.0868 0.426197 51.221 0.297874 51.3924 0.207191C51.5637 0.11822 51.7404 0.0720215 51.9224 0.0720215ZM51.9224 0.244833C51.7704 0.244833 51.6238 0.282476 51.4807 0.35776C51.3376 0.433043 51.2245 0.540834 51.1451 0.679424C51.0638 0.819726 51.0232 0.965161 51.0232 1.11573C51.0232 1.2663 51.062 1.41002 51.1433 1.54861C51.2228 1.6872 51.3341 1.79328 51.4772 1.87028C51.6203 1.94727 51.7687 1.98662 51.9241 1.98662C52.0796 1.98662 52.228 1.94898 52.3711 1.87028C52.5142 1.79328 52.6255 1.68549 52.7032 1.54861C52.7827 1.41002 52.8216 1.2663 52.8216 1.11573C52.8216 0.965161 52.7809 0.819726 52.7014 0.679424C52.6219 0.539123 52.5089 0.433043 52.3658 0.35776C52.2192 0.282476 52.0725 0.244833 51.9224 0.244833ZM51.4489 1.69404V0.571634H51.8464C51.9824 0.571634 52.0814 0.581898 52.1414 0.60243C52.2015 0.622962 52.2509 0.658894 52.288 0.710224C52.3234 0.761553 52.3428 0.816304 52.3428 0.874478C52.3428 0.956605 52.3128 1.02847 52.2527 1.08835C52.1926 1.14995 52.1114 1.18417 52.0125 1.19101C52.0531 1.20812 52.0867 1.22694 52.1114 1.2509C52.1573 1.29538 52.2156 1.36895 52.2827 1.47333L52.4241 1.69404H52.1962L52.0937 1.51781C52.0125 1.37922 51.9471 1.29196 51.8976 1.25603C51.8641 1.23037 51.8128 1.21668 51.7475 1.21668H51.6379V1.69404H51.4489ZM51.6362 1.06098H51.8641C51.9718 1.06098 52.046 1.04558 52.0867 1.01478C52.1255 0.983982 52.1467 0.941206 52.1467 0.889876C52.1467 0.857367 52.1379 0.826571 52.1184 0.800906C52.099 0.775241 52.0725 0.75471 52.039 0.742733C52.0054 0.730756 51.9418 0.723912 51.8517 0.723912H51.6397V1.06098H51.6362Z"
                    fill="black"/>
                <defs>
                    <linearGradient id="paint0_linear_3_209" x1="0.537838" y1="27.0934" x2="32.5802" y2="12.3076"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#414042"/>
                        <stop offset="0.0135" stop-color="#3E3D3F"/>
                        <stop offset="0.1808" stop-color="#262528"/>
                        <stop offset="0.3491" stop-color="#141417"/>
                        <stop offset="0.516" stop-color="#08080A"/>
                        <stop offset="0.681" stop-color="#020203"/>
                        <stop offset="0.8433"/>
                        <stop offset="1"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_3_209" x1="1.8865" y1="30.0164" x2="33.929" y2="15.2306"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#414042"/>
                        <stop offset="0.0135" stop-color="#3E3D3F"/>
                        <stop offset="0.1808" stop-color="#262528"/>
                        <stop offset="0.3491" stop-color="#141417"/>
                        <stop offset="0.516" stop-color="#08080A"/>
                        <stop offset="0.681" stop-color="#020203"/>
                        <stop offset="0.8433"/>
                        <stop offset="1"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_3_209" x1="-4.86579" y1="15.3831" x2="27.1766" y2="0.597271"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#414042"/>
                        <stop offset="0.0135" stop-color="#3E3D3F"/>
                        <stop offset="0.1808" stop-color="#262528"/>
                        <stop offset="0.3491" stop-color="#141417"/>
                        <stop offset="0.516" stop-color="#08080A"/>
                        <stop offset="0.681" stop-color="#020203"/>
                        <stop offset="0.8433"/>
                        <stop offset="1"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_3_209" x1="-2.85356" y1="19.7437" x2="29.1887" y2="4.95797"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#414042"/>
                        <stop offset="0.0135" stop-color="#3E3D3F"/>
                        <stop offset="0.1808" stop-color="#262528"/>
                        <stop offset="0.3491" stop-color="#141417"/>
                        <stop offset="0.516" stop-color="#08080A"/>
                        <stop offset="0.681" stop-color="#020203"/>
                        <stop offset="0.8433"/>
                        <stop offset="1"/>
                    </linearGradient>
                    <linearGradient id="paint4_linear_3_209" x1="51.8745" y1="11.4557" x2="18.6328" y2="11.4557"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#ED1C24"/>
                        <stop offset="1" stop-color="#BE1E2D"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="list-group list-group-flush"><a class="list-group-item list-group-item-action bg-dark text-white"
                                                    style="padding-left: 50px">Продукты</a></div>
    </div>
    <div id="page-content-wrapper" style="background-color: #F2F6FA" class="col-lg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
             style="background-color: white !important;">
            <button class="btn btn-custom your-element-class" id="menu-toggle">Продукты</button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
                <span class="user-name">Имя пользователя</span>
            </div>
        </nav>

        <div class="container-fluid">

            <!-- Модальное окно добавления -->
            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog"
                 aria-labelledby="addProductModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProductModalLabel">Добавить продукт</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form id="addProductForm" method="post" action="{{ route('products.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Название</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="article">Артикул</label>
                                    <input type="text" class="form-control" id="article" name="article" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Статус</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="available">Доступен</option>
                                        <option value="unavailable">Недоступен</option>
                                    </select>
                                </div>
                                <div id="attributes-container">
                                    <h5>Атрибуты<br><br></h5>
                                </div>
                                <button type="button" id="add-attribute">+ Добавить атрибут</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" form="addProductForm" class="btn btn-primary">Добавить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Артикул</th>
                                <th scope="col">Название</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Атрибуты</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($products as $product)
                                <tr class='clickable-row' data-toggle='modal' data-target='#productModal'
                                    data-id='{{ $product->id }}'
                                    data-name='{{ $product->name }}'
                                    data-article='{{ $product->article }}'
                                    data-status='{{ $product->status }}'
                                    data-attributes='@json($product->data)'>
                                    <td>{{ $product->article }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>
                                        @if(isset($product->data))
                                            @foreach($product->data as $attribute)
                                                {{ $attribute['key'] }}: {{ $attribute['value']}}<br>
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-6 d-flex align-items-start justify-content-end">
                        <button type="button" class="btn btn-primary btn-lg mt-4" data-toggle="modal"
                                data-target="#addProductModal">
                            Добавить
                        </button>
                    </div>
                </div>
            </div>
            <!-- Модальное окно для продукта -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog"
                 aria-labelledby="productModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel">Информация о продукте</h5>
                            <div class="modal-header-buttons">
                                <button type="button" class="btn btn-edit" data-toggle="modal"
                                        data-target="#editProductModal">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" fill="black" fill-opacity="0.4"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M12.9701 9.02981L13.5 8.49991C14.0523 7.94762 14.0523 7.05219 13.5 6.49991C12.9477 5.94762 12.0523 5.94762 11.5 6.49991L10.9575 7.0424C11.4188 7.88305 12.1173 8.57587 12.9701 9.02981ZM9.50209 8.49783L6.8564 11.1435C6.43134 11.5686 6.21881 11.7811 6.07907 12.0422C5.93934 12.3033 5.88039 12.598 5.7625 13.1875L5.6471 13.7645C5.58058 14.0971 5.54732 14.2634 5.64193 14.358C5.73654 14.4526 5.90284 14.4193 6.23545 14.3528L6.23545 14.3528L6.81243 14.2374L6.81244 14.2374C7.40189 14.1195 7.69661 14.0606 7.95771 13.9209C8.2188 13.7811 8.43132 13.5686 8.85636 13.1436L8.85638 13.1435L8.8564 13.1435L11.5108 10.4891C10.71 9.96895 10.0267 9.29005 9.50209 8.49783Z"
                                              fill="#C4C4C4" fill-opacity="0.7"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-delete">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" fill="black" fill-opacity="0.4"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10 5.00763C9.77873 5.00763 9.5718 5.02718 9.41331 5.05934C9.33405 5.07543 9.278 5.09245 9.24301 5.1063C9.23589 5.10912 9.23029 5.11155 9.22608 5.11351C9.03349 5.27853 8.75023 5.26 8.57857 5.06535C8.39916 4.8619 8.4096 4.54309 8.60189 4.35327C8.70024 4.25618 8.81839 4.19854 8.90927 4.16256C9.00837 4.12333 9.1191 4.09305 9.23389 4.06975C9.46349 4.02315 9.73209 4 10 4C10.2679 4 10.5365 4.02315 10.7661 4.06975C10.8809 4.09305 10.9916 4.12333 11.0907 4.16256C11.1816 4.19854 11.2998 4.25618 11.3981 4.35327C11.5904 4.54309 11.6008 4.8619 11.4214 5.06534C11.2498 5.26 10.9665 5.27853 10.7739 5.11351C10.7697 5.11155 10.7641 5.10912 10.757 5.1063C10.722 5.09245 10.6659 5.07543 10.5867 5.05934C10.4282 5.02718 10.2213 5.00763 10 5.00763ZM5.73422 7.37742C5.56669 7.35939 5.34431 7.35878 5 7.35878V6.35114C5.00773 6.35114 5.01544 6.35114 5.02312 6.35114C5.03846 6.35114 5.0537 6.35114 5.06883 6.35114H14.9312C14.9463 6.35114 14.9615 6.35114 14.9769 6.35114L15 6.35114V7.35878C14.6557 7.35878 14.4333 7.35939 14.2658 7.37742C14.1062 7.39459 14.05 7.42331 14.0212 7.44369C13.9692 7.48044 13.9245 7.52768 13.8898 7.58269C13.8705 7.61318 13.8434 7.67267 13.8271 7.8415C13.8101 8.01875 13.8095 8.25404 13.8095 8.61832L13.8095 12.5141C13.8095 12.9607 13.8096 13.3455 13.7704 13.6537C13.7284 13.984 13.6338 14.3005 13.3911 14.5573C13.1484 14.8141 12.8492 14.9142 12.537 14.9586C12.2458 15 11.882 15 11.4599 15H8.54009C8.11795 15 7.75423 15 7.46296 14.9586C7.15081 14.9142 6.85159 14.8141 6.6089 14.5573C6.3662 14.3005 6.27156 13.984 6.22959 13.6537C6.19043 13.3455 6.19045 12.9607 6.19048 12.5141L6.19048 8.61832C6.19048 8.25404 6.1899 8.01875 6.17286 7.8415C6.15663 7.67267 6.12948 7.61318 6.11022 7.58269C6.07548 7.52768 6.03084 7.48044 5.97884 7.44369C5.95002 7.42331 5.8938 7.39459 5.73422 7.37742ZM12.9485 7.35878H7.05147C7.08774 7.48305 7.10797 7.61075 7.12035 7.73952C7.14288 7.97388 7.14287 8.26096 7.14286 8.59386L7.14286 12.4809C7.14286 12.9702 7.14387 13.2864 7.17348 13.5194C7.20125 13.738 7.24608 13.8064 7.28233 13.8448C7.31858 13.8832 7.38332 13.9306 7.58986 13.96C7.8101 13.9913 8.10901 13.9924 8.57143 13.9924H11.4286C11.891 13.9924 12.1899 13.9913 12.4101 13.96C12.6167 13.9306 12.6814 13.8832 12.7177 13.8448C12.7539 13.8064 12.7988 13.738 12.8265 13.5194C12.8561 13.2864 12.8571 12.9702 12.8571 12.4809V8.59385C12.8571 8.26096 12.8571 7.97388 12.8797 7.73952C12.892 7.61075 12.9123 7.48305 12.9485 7.35878ZM8.88889 9.29007C9.15188 9.29007 9.36508 9.51564 9.36508 9.79389V11.5573C9.36508 11.8355 9.15188 12.0611 8.88889 12.0611C8.6259 12.0611 8.4127 11.8355 8.4127 11.5573V9.79389C8.4127 9.51564 8.6259 9.29007 8.88889 9.29007ZM11.1111 9.29007C11.3741 9.29007 11.5873 9.51564 11.5873 9.79389V11.5573C11.5873 11.8355 11.3741 12.0611 11.1111 12.0611C10.8481 12.0611 10.6349 11.8355 10.6349 11.5573V9.79389C10.6349 9.51564 10.8481 9.29007 11.1111 9.29007Z"
                                              fill="#C4C4C4" fill-opacity="0.7"/>
                                    </svg>
                                </button>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>

                        <div class="modal-body product-view">
                            <table class="table" id="table1">
                                <tbody>
                                <tr>
                                    <th scope="row">Артикул</th>
                                    <td><span id="modalArticle"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Название</th>
                                    <td><span id="modalName"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Статус</th>
                                    <td><span id="modalStatus"></span></td>
                                </tr>
                                <tr>
                                    <th scope="row">Атрибуты</th>
                                    <td><span id="modalAttributes"></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form id="deleteProductForm" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
        <!-- Модальное окно для редактирования продукта -->
        <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog"
             aria-labelledby="editProductModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel">Редактирование продукта</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editProductForm" method="post"
                              action="{{ route('products.update', 'PLACEHOLDER') }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="editName">Название</label>
                                <input type="text" class="form-control" id="editName" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="editArticle">Артикул</label>
                                <input type="text" class="form-control" id="editArticle" name="article"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="editStatus">Статус</label>
                                <select class="form-control" id="editStatus" name="status">
                                    <option value="available">Доступен</option>
                                    <option value="unavailable">Недоступен</option>
                                </select>
                            </div>
                            <div id="attributes-container-edit">
                                <h5>Атрибуты<br><br></h5>
                            </div>
                            <button type="button" id="add-attribute-edit">+ Добавить атрибут</button>
                            <input type="hidden" id="editId" name="id">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


