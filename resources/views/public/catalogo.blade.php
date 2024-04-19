@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

  <div class="w-full md:w-11/12 md:mx-auto">
    <div style="background-image: url('{{ asset('images/img/header_catalogo.png') }}')"
      class="bg-cover bg-center bg-no-repeat min-h-[600px] flex flex-col justify-center items-center">
      <div class="flex justify-start py-10 md:py-16 w-11/12 mx-auto">
        <div class="text-white font-poppins flex flex-col gap-10 text-center">
          <h1 class="font-semibold text-[32px] md:text-[48px] leading-none md:leading-tight">
            Vestibulum molestie massa nec est hendrerit, nec commodo nulla
            catalago
          </h1>
          <p class="font-normal text-[16px] md:text-[18px]">
            Pellentesque convallis eu tortor id condimentum. Etiam cursus
            semper odio non consectetur. Pellentesque et molestie risus.
            Aliquam eu nibh pulvinar.
          </p>
        </div>
      </div>
    </div>
  </div>

  <main class="z-[70]">
    <div class="flex flex-col md:flex-row md:gap-10 w-11/12 mx-auto mt-10 font-poppins">
      <aside class="flex flex-col gap-5">
        <div class="flex gap-3 open">
          <div>
            <img src="./images/svg/catalogo_filtro_icon.svg" alt="logo_filtros" />
          </div>
          <p class="font-semibold text-[20px]">Filtros</p>
        </div>

        <div class="hidden-categoria-precio">
          <div class="hidden md:flex flex-col gap-5 show-categoria-precio">
            <div class="flex flex-col gap-5">
              <p class="font-semibold text-[16px]">Categorías</p>
              <a href="#" class="font-semibold text-[14px] underline">Todas</a>

              <div>
                <div
                  class="overflow-y-scroll flex flex-col h-[150px] scroll__categorias items-start font-semibol text-[14px] text-[#6C7275] gap-2">
                  <ul class="flex flex-col gap-2">
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                    <li class="w-full mr-44 cursor-pointer">Categoría 1</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="flex flex-col gap-5">
              <p class="font-semibold text-[16px]">Precio</p>
              <a href="#" class="font-semibold text-[14px] underline">Todos los precios</a>
              <div class="flex flex-col gap-2">
                <div class="flex justify-between items-center">
                  <label class="font-semibold text-[14px]" for="precio_0">s/ 0.00 - s/99.99</label>
                  <!-- Agrega el siguiente código dentro de tu archivo HTML -->
                  <input id="precio_0" type="checkbox" class="w-5 h-5 accent-[#EB5D2C] cursor-pointer" />
                </div>
                <div class="flex justify-between items-center">
                  <label class="font-semibold text-[14px]" for="precio_1">s/ 100.00 - s/199.99</label>
                  <!-- Agrega el siguiente código dentro de tu archivo HTML -->
                  <input id="precio_1" type="checkbox" class="w-5 h-5 accent-[#EB5D2C] cursor-pointer" />
                </div>

                <div class="flex justify-between items-center">
                  <label class="font-semibold text-[14px]" for="precio_2">s/ 200.00 - s/299.99</label>
                  <!-- Agrega el siguiente código dentro de tu archivo HTML -->
                  <input id="precio_2" type="checkbox" class="w-5 h-5 accent-[#EB5D2C] cursor-pointer" />
                </div>

                <div class="flex justify-between items-center">
                  <label class="font-semibold text-[14px]" for="precio_3">s/ 300.00 - s/399.99</label>
                  <!-- Agrega el siguiente código dentro de tu archivo HTML -->
                  <input id="precio_3" type="checkbox" class="w-5 h-5 accent-[#EB5D2C] cursor-pointer" />
                </div>

                <div class="flex justify-between items-center">
                  <label class="font-semibold text-[14px]" for="precio_4">s/ 400.00 +</label>
                  <!-- Agrega el siguiente código dentro de tu archivo HTML -->
                  <input id="precio_4" type="checkbox" value="" class="w-5 h-5 accent-[#EB5D2C] cursor-pointer" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <!-- modal filtros -->
      <!-- <a class="mostrar-modal">Filtrossss</a> -->
      <div class="modal-filtros z-[100]">
        <div class="modal__mostrar-filtro">
          <div class="flex justify-end">
            <a href="#" class="modal__close-filtro">
              <img src="./images/svg/close.svg" alt="close" />
            </a>
          </div>

          <div class="addCategoriaPrecio"></div>
        </div>
      </div>
      <!-- --- -->
      <section class="font-poppins my-10 w-full">
        <div class="flex flex-col gap-2">
          <h2 class="font-medium text-[40px]">Productos destacados</h2>
          <p class="font-normal text-[18px]">
            Etiam cursus semper odio non consectetur. Pellentesque et molestie
            risus. Aliquam eu nibh pulvinar, sollicitudin sapien vel, aliquam
            orci.
          </p>
        </div>

        <!-- GRILLA PRODUCTOS -->
        <div>
          <div class="grid grid-cols-2 lg:grid-cols-3 my-5 gap-10">
            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="{{ route('products.show', 4) }}"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div class="">
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-auto h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_1.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div class="">
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-auto h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_1.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div class="">
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-auto h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_1.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div class="">
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-auto h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_1.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div class="">
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-auto h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_1.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div class="">
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-auto h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_1.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div class="">
                  <div class="relative">
                    <img src="./images/img/tabla_2.png" alt="cusco" class="w-auto h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>

            <div class="flex flex-col relative">
              <div
                class="bg-colorBackgroundProducts rounded-2xl py-12 md:pb-8 px-5 product_container basis-4/5 flex flex-col justify-center relative">
                <a
                  class="font-semibold text-[8px] lg:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px]">
                  Nuevo
                </a>
                <div>
                  <div class="relative">
                    <img src="./images/img/tabla_1.png" alt="cusco" class="w-full h-[100%]" />
                  </div>

                  <!-- ------ -->
                  <div class="addProduct text-center flex justify-center">
                    <a href="#addProducto"
                      class="font-semibold text-[10px] xl:text-[16px] bg-[#74A68D] px-1 py-2 md:py-3 lg:px-5 flex-initial w-52 text-center text-white rounded-3xl">
                      Agregar al carrito
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2 flex flex-col items-start gap-2 basis-1/5">
                <div class="flex items-center gap-2">
                  <div class="flex gap-2 py-2">
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                    <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  </div>
                  <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                </div>
                <h2 class="font-semibold text-[16px] text-[#141718]">
                  Fusce sagittis eleifend sem eget dictum
                </h2>
                <p class="font-semibold text-[14px] text-[#121212] flex gap-5">
                  <span>$595.00</span>

                  <span class="font-normal text-[14px] text-[#6C7275] line-through">$1000.00</span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="flex justify-center items-center mt-12">
          <a href="catalogo.html"
            class="font-semibold text-[16px] bg-white md:duration-500 py-4 px-5 rounded-3xl border-[1px] border-colorBorder flex-initial text-center w-full md:w-56">
            Cargar más
          </a>
        </div>
      </section>
    </div>

    <section class="my-12">
      <div class="bg-[#F5F5F5] font-poppins">
        <div class="relative bg-[#F5F5F5] px-6 pt-10 pb-8 mt-8 ring-gray-900/5 sm:mx-auto sm:rounded-lg sm:px-10">
          <div class="mx-auto px-5">
            <div class="flex flex-col items-center">
              <h2 class="font-semibold text-[40px] text-[#151515] text-center leading-none md:leading-tight">
                Preguntas frecuentes
              </h2>
            </div>
            <div class="mx-auto mt-8 grid max-w-[900px] divide-y divide-neutral-200">

              @foreach($faqs as $faq)
              <div class="py-5">
                <details class="group">
                  <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                    <span class="font-bold text-[20px] text-[#151515]">
                      {!! $faq->pregunta !!}</span>
                    <span class="transition group-open:rotate-180">
                      <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                          stroke="#EB5D2C" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </span>
                  </summary>
                  <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                    {{$faq->respuesta}}
                  </p>
                </details>
              </div>  
              @endforeach
              
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="font-poppins text-[#151515] w-full testimoniosRelative">
      <h2 class="w-11/12 mx-auto font-semibold text-[40px] text-center md:text-left">
        Testimonios
      </h2>

      <div class="swiper myTestimonios mt-5">
        <div class="swiper-pagination-testimonios"></div>
        <div class="swiper-wrapper mb-12 md:mt-[80px]">
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="carousel-cell bg-[#F5F5F5] p-10">
              <div class="flex gap-2 py-2">
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                <img src="./images/svg/start_sin_color.svg" alt="estrella" />
              </div>
              <div class="flex gap-5 items-center">
                <p class="font-bold text-[20px]">Name N.</p>
                <img src="./images/svg/check.svg" alt="check" />
              </div>
              <p class="font-normal text-[16px]">
                “Donec ultricies aliquam tortor, eleifend ultricies sapien
                fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                dolor. Vivamus eget placerat erat, eget consequat nisi.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


@section('scripts_importados')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Captura el click de abrir
      /*  const openModal = document.querySelector(".mostrar-modal"); */
      // Captura al modal que se quiere mostrar
      const modal = document.querySelector(".modal-filtros");
      //Captura el evento de cierre
      const closeModal = document.querySelector(".modal__close-filtro");
      // Captura el body para bloqueo
      const body = document.querySelector(".body");

      const hiddenCategoriaPrecio = document.querySelector(
        ".hidden-categoria-precio"
      );

      const open = document.querySelector(".open");
      const showCategoriaPrecio = document.querySelector(".show-categoria-precio");
      const addCategoriaPrecio = document.querySelector(".addCategoriaPrecio");
      let openModal = null;

      function getWidth() {
        // Corregir el modal !importante
        let width = window.innerWidth;
        if (width < 768) {
          //Habilita el click para modal
          open.classList.add("mostrar-modal", "cursor-pointer");
          openModal = document.querySelector(".mostrar-modal");
          openModal.addEventListener("click", showModal);
          hiddenCategoriaPrecio.innerHTML = "";
        } else {
          // Quita la opcion de click
          open.classList.remove("mostrar-modal", "cursor-pointer");
          if (openModal) {
            openModal.removeEventListener("click", showModal);
            showCategoriaPrecio.classList.remove("hidden");
            hiddenCategoriaPrecio.innerHTML = showCategoriaPrecio.innerHTML;
          }
        }
      }

      function showModal(e) {
        e.preventDefault();

        addCategoriaPrecio.innerHTML = showCategoriaPrecio.innerHTML;
        hiddenCategoriaPrecio.innerHTML = "";

        modal.classList.add("modal--show-filtro");
        body.classList.add("overflow-hidden");

        modal.style.display = "flex";
      }

      getWidth(); // Se ejecuta por primera vez
      window.addEventListener("resize", getWidth);

      closeModal.addEventListener("click", (e) => {
        e.preventDefault();
        modal.classList.remove("modal--show-filtro");
        body.classList.remove("overflow-hidden");
      });

      // Función para cerrar el modal
      function closeModa(event) {
        if (event.target === modal) {
          modal.classList.remove("modal--show-filtro");
          body.classList.remove("overflow-hidden");

          /* hiddenCategoriaPrecio.innerHTML = addCategoriaPrecio.innerHTML; */
        }
      }

      window.addEventListener("click", closeModa);
    });
  </script>
@stop

@stop
