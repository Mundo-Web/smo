@extends('components.public.matrix')

@section('css_importados')
  <style>
    .logo_blanco {
      display: block;
    }

    @media(max-width: 429px) {
      .imgbgStyle {
        min-height: 1000px;
      }
    }

    @media(min-width: 430px) {
      .imgbgStyle {
        min-height: 970px;
      }
    }

    @media(min-width: 1024px) {
      .imgbgStyle {
        min-height: 770px;
      }
    }

    @media(min-width: 1600px) {
      .imgbgStyle {
        min-height: 800px;
      }
    }
  </style>
@stop


@section('content')

  <main>
    <section class="main bg-cover bg-center bg-no-repeat swiper slider__headers" id="formulariollegada">
      <div class="w-full px-[5%] xl:px-[8%] grid grid-cols-1 lg:grid-cols-5 gap-7 xl:gap-16 py-40  absolute z-20">
        
        <div class="md:col-span-3 w-full flex flex-col gap-5 justify-center max-w-2xl" data-aos="fade-up" data-aos-offset="150">
          <h2
            class="text-text32 md:text-4xl lg:text-5xl 2xl:text-7xl font-archivo font-bold text-white leading-none sm:leading-normal line-clamp-6">
            {{ $general->aboutus }}
          </h2>
          <p
            class="font-archivo text-text16 md:text-text18 2xl:text-2xl text-white font-normal [text-shadow:_0_0_4px_rgb(0_0_0_/_40%)]">
            {{ $general->htop }}
          </p>

          <div class="flex justify-start items-center text-white gap-5">
            <a target="_blank"
              href="https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ $general->mensaje_whatsapp }}"
              class="font-semibold font-archivo text-text16 rounded-full py-3 px-5 bg-[#289A7B]">Quiero una
              cita</a>
            <a href="#servicios"
              class="font-semibold font-archivo text-text16 rounded-full py-3 px-5 border border-white">Servicios</a>
          </div>
        </div>

        <div class="md:col-span-2 w-full flex flex-col gap-5">
           
            <form action="" id="formContactos" class="flex flex-col gap-5 bg-white p-5 rounded-xl 2xl:p-8 2xl:ml-24 2xl:max-w-lg"  data-aos="fade-up" data-aos-offset="150">
              @csrf
              <h2 class="text-[#289A7B] font-archivo font-bold text-3xl 2xl:text-4xl text-left leading-tight">
                Contáctanos
              </h2>
              <div>
                <input required type="text" name="full_name" placeholder="Nombre completo"
                  class="bg-white bg-opacity-40 placeholder:text-[#12121266] font-archivo text-text16 lg:text-text18 font-normal text-[#173525] focus:font-semibold w-full py-5 px-5 border-b border-[#173525] transition-all focus:outline-0 focus:border-0 ring-0 focus:ring-0 focus:border-b focus:border-b-[#173525] border-t-0 border-l-0 border-r-0" />
              </div>
    
              <div>
                <input maxlength="9" required type="tel" name="phone" placeholder="Teléfono"
                  id="telefonoContacto"
                  class="bg-white bg-opacity-40 placeholder:text-[#12121266] font-archivo text-text16 lg:text-text18 font-normal text-[#173525] focus:font-semibold w-full py-5 px-5 border-b border-[#173525] transition-all focus:outline-0 focus:border-0 ring-0 focus:ring-0 focus:border-b focus:border-b-[#173525] border-t-0 border-l-0 border-r-0" />
              </div>
    
              <div>
                <input required type="email" name="email" placeholder="E-mail" id="emailContacto"
                  class="bg-white bg-opacity-40 placeholder:text-[#12121266] font-archivo text-text16 lg:text-text18 font-normal text-[#173525] focus:font-semibold w-full py-5 px-5 border-b border-[#173525] transition-all focus:outline-0 focus:border-0 ring-0 focus:ring-0 focus:border-b focus:border-b-[#173525] border-t-0 border-l-0 border-r-0" />
              </div>
              
              <div>
                <div class="flex flex-col gap-2 z-[45]">
    
                    <div class="dropdown w-full">
                      <div class="input-box focus:outline-none text-opacity-40 font-archivo text-text16 lg:text-text18 font-normal text-[#15614C] focus:font-semibold border-b border-[#173525] py-9">
                        <span
                          class="bg-white bg-opacity-40 placeholder:text-[#12121266] font-archivo text-text16 lg:text-text18 font-normal text-[#12121266] focus:font-semibold w-full py-5 px-5 border-b border-white transition-all focus:outline-0 focus:border-0 ring-0 focus:ring-0 focus:border-b focus:border-b-white border-t-0 border-l-0 border-r-0"
                          id="selected-service">Tipo de servicios
                        </span>
                      </div>
                      
                      <div class="list overflow-y-scroll h-[150px] scroll-typeServicios">
                        
                        <div class="w-full">
                          <input type="radio" id="id0" class="radio" name="service_product"
                            value="Selecciona servicio" />
    
                          <label for="id0"
                            class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                            Selecciona servicio
                          </label>
                        </div>
    
                        @foreach ($servicios as $item)
                          <div class="w-full">
                            <input type="radio" name="service_product" id="radio{{ $item->id }}" class="radio"
                              value="{{ $item->title }}" />
                            <label for="radio{{ $item->id }}"
                              class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                              {{ $item->title }}
                            </label>
                          </div>
                        @endforeach
                        
                      </div>
                    </div>
                </div>
              </div>
              
              <div class="flex justify-center items-center">
                <button type="submit"
                  class="text-[#FFFFFF] font-archivo font-bold text-text16 lg:text-text20 w-full bg-[#289A7B] py-4 px-10 text-center rounded-lg">
                  Enviar
                  solicitud
                </button>
              </div>
            </form>
        </div>
        
      </div>

        @if ($sliders->count())
            <div class="absolute inset-0 bg__dark z-10 h-full w-full bienvenidaSection"></div>
            <div class="swiper-wrapper">
                @foreach ($sliders as $imagen)
                  <div class="swiper-slide">
                    <img src="{{ asset($imagen->url_image . $imagen->name_image) }}" alt=""
                      class="object-cover object-top w-full h-full imgbgStyle max-h-[700px] 2xl:max-h-[800px]">
                  </div>
                @endforeach
            </div>
        @else
            <div class="absolute inset-0 bg__dark z-10 h-full"></div>
            <img src="{{ asset('images/img/noimagen.jpg') }}" class="bienvenidaSection " alt="">
        @endisset
  </section>

  <section class="bg-[#289A7B] z-[100]">
    <div class="w-full px-[5%] xl:px-[8%] py-10" data-aos="fade-up" data-aos-offset="150">
      <h2
        class="font-bold font-archivo text-text16 md:text-text20 text-center text-white pb-5 w-11/12 mx-auto md:w-full">
        Con la confianza de las mejores empresas
      </h2>
      <div class="swiper logos">
        <div class="swiper-wrapper">
          @foreach ($logos as $logo)
            <div class="swiper-slide">
              <img src="{{ asset($logo->url_image) }}" alt="{{ $logo->title }}" />
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  @if ($servicios->count() > 0)
    <section id="servicios" class="w-full px-[5%] xl:px-[8%] ">
      <div class="mx-auto max-w-4xl md:w-[768px] pt-10 lg:pt-20">
        <h3 class="text-[#289A7B] font-archivo font-semibold text-text20 text-center">
          Servicios
        </h3>
        <h2 class="text-[#289A7B] font-archivo font-bold text-text40 md:text-text48 text-center leading-tight">
          Soluciones Innovadoras
          <span class="text-[#2E67A4]">en Salud Ocupacional y Gestion de Calidad</span>
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 md:w-10/12 mx-auto gap-10 pt-12">
        @foreach ($servicios as $servicio)
          <div class="flex flex-col justify-between gap-3 p-5 group hover:bg-[#289A7B] rounded-2xl md:duration-300" data-aos="fade-up"
            data-aos-offset="150">
            <div class="flex flex-col gap-3">
              <div>
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.53125 1.0467C4.98437 1.19514 4.55469 1.51545 4.3125 1.95295C4.14062 2.28108 4.04687 2.3592 3.78906 2.42952C2.60156 2.75764 1.67969 3.74983 1.41406 4.9842C1.35937 5.26545 1.32812 6.82795 1.32812 9.84358V14.2967H0.664062H0V15.2967C0 17.0155 0.296875 18.2811 1.02344 19.6873C2.17187 21.9061 4.21875 23.617 6.70312 24.4217L7.32812 24.617L7.35937 25.9217C7.39062 27.0311 7.42187 27.2889 7.57031 27.6717C7.82031 28.3201 8.375 28.7889 9.0625 28.9373L9.26562 28.9764L9.35156 30.328C9.41406 31.2655 9.50781 31.9139 9.64062 32.4451C10.4375 35.5545 12.7266 37.953 15.7031 38.7811C15.9375 38.8514 16.4766 38.9373 16.8984 38.9842C21.4062 39.4451 25.4453 35.8905 25.9375 31.0233C25.9844 30.5311 26.0156 27.5311 26.0156 23.367C26.0156 16.7967 26.0234 16.4842 26.1719 15.9061C26.6953 13.8358 28.3984 12.4217 30.3516 12.4217C31.4297 12.4217 32.3125 12.7967 33.1719 13.6092C33.5781 13.9998 33.8203 14.3123 34.0469 14.7498C34.4766 15.578 34.6094 16.117 34.6641 17.3123L34.7109 18.328L34.2812 18.4295C33.1953 18.6717 32.125 19.4061 31.4922 20.3514C30.125 22.3983 30.5625 25.203 32.4766 26.6326C34.4766 28.1326 37.1406 27.8983 38.7891 26.0701C40.4609 24.2264 40.375 21.4608 38.5937 19.6873C37.9687 19.0545 37.2187 18.6248 36.4375 18.4451L36.0391 18.3514L35.9922 17.242C35.9375 16.0545 35.8203 15.4373 35.5 14.6717C34.8281 13.078 33.5312 11.8514 31.9531 11.328C31.25 11.0936 29.9219 11.0311 29.1953 11.203C27.1953 11.6717 25.6328 13.1873 24.9141 15.3514L24.7266 15.8983L24.6797 23.5545C24.6328 31.7264 24.6484 31.4764 24.25 32.6951C24.0391 33.328 23.5234 34.2967 23.0781 34.8826C19.9141 39.0936 13.8984 38.4686 11.5156 33.6873C10.9375 32.5155 10.7656 31.8045 10.7266 30.2967L10.6797 28.992L10.9062 28.9451C11.6328 28.7811 12.1719 28.3358 12.4297 27.6717C12.5781 27.2889 12.6094 27.0311 12.6406 25.9217L12.6719 24.617L13.2969 24.4217C15.7812 23.617 17.8281 21.9061 18.9766 19.6873C19.7031 18.2811 20 17.0155 20 15.2967V14.2967H19.3359H18.6719V10.0155C18.6719 7.57014 18.6328 5.50764 18.5937 5.19514C18.4844 4.46858 18.2187 3.9217 17.7187 3.39045C17.2578 2.89827 16.8437 2.63264 16.2812 2.46077C15.9453 2.3592 15.8672 2.28889 15.6641 1.93733C14.9219 0.648266 12.9531 0.726391 12.2422 2.06233C12.0078 2.51545 12.0078 3.4217 12.2422 3.87483C12.4453 4.25764 12.8672 4.64045 13.2578 4.80452C13.6406 4.96858 14.4219 4.95295 14.8125 4.77327C15.1562 4.61702 15.6719 4.13264 15.75 3.89045C15.8516 3.57014 16.5391 3.96077 16.9844 4.59358C17.1875 4.88264 17.2187 5.00764 17.2734 5.71858C17.3047 6.16389 17.3359 8.27326 17.3359 10.4061L17.3437 14.2967H16.6875H16.0391L15.9922 15.367C15.9375 16.578 15.8125 17.1326 15.4219 17.9373C14.2187 20.3983 11.1484 21.5467 8.32031 20.6014C6.92187 20.1405 5.71875 19.0467 5.125 17.7108C4.82031 17.0155 4.6875 16.2733 4.6875 15.242V14.2967H3.67187H2.64844L2.67187 9.70295L2.69531 5.11702L2.92969 4.68733C3.16406 4.25764 3.77344 3.74983 4.05469 3.74983C4.125 3.74983 4.25781 3.89045 4.35937 4.07014C4.71875 4.69514 5.64844 5.07795 6.40625 4.91389C7.71875 4.63264 8.39844 3.19514 7.77344 2.03889C7.32031 1.21858 6.39844 0.804516 5.53125 1.0467ZM6.46875 2.52327C6.85937 2.88264 6.55469 3.59358 6 3.59358C5.85937 3.59358 5.67969 3.5467 5.60937 3.4842C5.23437 3.20295 5.30469 2.56233 5.73437 2.37483C6.01562 2.25764 6.21875 2.2967 6.46875 2.52327ZM14.25 2.37483C14.5234 2.49202 14.7187 2.8592 14.6328 3.1092C14.4609 3.60139 13.8984 3.74983 13.5547 3.39827C13.1641 3.01545 13.375 2.43733 13.9687 2.27327C13.9766 2.26545 14.1094 2.31233 14.25 2.37483ZM3.35937 15.9764C3.35937 17.3983 4.19531 19.203 5.35937 20.3201C6.70312 21.5936 8.10156 22.1717 10.0391 22.242C11.5937 22.3045 12.9062 21.9764 14.1328 21.2342C15.9219 20.1561 17.0937 18.2811 17.3047 16.1873L17.3594 15.6248H18.0234H18.6953L18.6406 16.2186C18.3594 19.2967 16.2187 21.9686 13.1406 23.078C10.8828 23.8826 8 23.7342 5.92187 22.6873C4.77344 22.117 3.58594 21.117 2.80469 20.078C2.04687 19.0701 1.48437 17.5545 1.35937 16.2186L1.30469 15.6248H2.33594H3.35937V15.9764ZM36.3437 19.8045C36.8359 19.9451 37.4844 20.3748 37.8359 20.7889C39.2656 22.4608 38.7109 25.0311 36.7266 25.9686C36.2969 26.1639 36.0937 26.2108 35.5 26.2342C34.4922 26.2811 33.7812 26.0311 33.0937 25.3983C31.3828 23.8123 31.7969 20.9764 33.8828 19.9842C34.6875 19.6014 35.4531 19.5467 36.3437 19.8045ZM11.3281 25.7655C11.3281 26.7576 11.2266 27.2655 11 27.4764C10.7656 27.6873 9.23437 27.6873 9 27.4764C8.77344 27.2655 8.67187 26.7576 8.67187 25.7655V24.8826H10H11.3281V25.7655Z"
                    fill="#289A7B" class="group-hover:fill-fillWhite" />
                </svg>
              </div>
              <h2 class="font-archivo font-bold text-text32 text-[#2E67A4] group-hover:text-white md:duration-300">
                {{ $servicio->title }}
              </h2>
              <div
                class="text-[#696969] font-archivo font-normal text-text16 md:text-text18 group-hover:text-white md:duration-300">
                {!! $servicio->description !!}
              </div>
            </div>
            <div class="flex justify-center items-center">
              <a href="{{ route('gestion', $servicio->id) }}"
                class="w-full rounded-full border border-[#289A7B] text-[#289A7B] font-archivo text-tex16 text-center py-3 px-6 group-hover:text-white group-hover:border-white md:duration-300">
                Saber más
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  @endif

  <section>
    <div class="w-full px-[5%] xl:px-[8%] pt-10 lg:pt-20">
      <div class="flex flex-col md:flex-row gap-16 md:gap-20">
        <div class="order-2 md:order-1 basis-1/2">
          <img src="{{ asset('images/img/image_9.png') }}" alt="" class="hidden md:block w-full" />
          <img src="{{ asset('images/img/image_10.png') }}" alt="" class="w-full block md:hidden" />
        </div>
        <div
          class="order-1 md:order-2 basis-1/2 flex flex-col gap-10 md:gap-5 lg:gap-10 justify-center w-11/12 mx-auto md:w-full">
          <h2 class="font-archivo text-text44 lg:text-text50 font-bold text-[#2E67A4] leading-tight w-full 2xl:w-2/3">
            Como hacemos nuestro
            <span class="text-[#289A7B]">trabajo</span>
          </h2>

          <div class="flex flex-col justify-center items-start gap-10 md:gap-5 2xl:gap-16">
            @foreach ($comoLoHacemos as $item)
              <div class="flex justify-start items-start gap-5" data-aos="fade-up" data-aos-offset="150">
                <div class="flex justify-start items-start">
                  <img src="{{ asset('images/svg/image_2.svg') }}" alt="" />
                </div>
                <div class="flex flex-col gap-3">
                  <h3 class="font-bold font-archivo text-text24 lg:text-text26 text-[#2E67A4]">
                    {{ $item->name }}
                  </h3>
                  <p class="text-[#696969] font-normal text-text16 lg:text-text18 font-archivo">
                    {{ $item->description }}
                  </p>
                </div>
              </div>
            @endforeach
          </div>

        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-20 w-full px-[5%] xl:px-[8%] py-10 lg:py-20">
      <div class="w-11/12 mx-auto md:w-full flex flex-col justify-center gap-10">
        <div class="flex flex-col gap-5">
          <h3 class="text-[#289A7B] font-archivo font-semibold text-text16 lg:text-text18">
            Estadísticas
          </h3>
          <h2 class="text-[#2E67A4] font-bold text-text48 lg:text-text50 leading-tight w-full 2xl:w-2/3">
            SMO: Transformando Empresas,
            <span class="text-[#289A7B]">Creando Satisfacción</span>
          </h2>
          <p class="text-[#696969] font-normal text-text16 lg:text-text18 font-archivo">
            Haga hincapié en el ahorro de tiempo y utilice números para
            maximizar la credibilidad.
          </p>
        </div>

        <div class="grid grid-cols-2">
          @foreach ($estadisticas as $item)
            <div class="flex flex-col gap-1 col-span-1" data-aos="fade-up" data-aos-offset="150">
              <p class="text-[#2E67A4] font-archivo font-bold text-text48 lg:text-text50">
                {{ $item->titulo }}<span class="text-[#289A7B]">{{ $item->descripcionshort }}</span>
              </p>
              <p class="text-[#696969] font-normal text-text16 lg:text-text18 font-archivo">
                {{ $item->descripcion }}
              </p>
            </div>
          @endforeach
        </div>
      </div>

      <div class="order-2 md:order-1 basis-1/2">
        <img src="{{ asset('images/img/image_11.png') }}" alt="" class="w-full hidden md:block" />
        <img src="{{ asset('images/img/image_12.png') }}" alt="" class="w-full block md:hidden" />
      </div>
    </div>
  </section>

  {{-- <section class="pt-20">
    <div class="bg-[#289A7B]">
      <div class="w-11/12 mx-auto flex justify-center items-center py-10 lg:py-16">
        <div class="swiper swiper-container ">
          <div class="swiper-wrapper">
            @foreach ($testimonios as $item)
              <div class="swiper-slide flex flex-col w-full md:w-1/2 gap-6 " data-aos="fade-up"
                data-aos-offset="150">
                <div class="max-w-[500px] text-center m-auto flex justify-center items-center flex-col">
                  <p class="font-archivo text-text24 lg:text-text26 font-bold text-[#FFFFFF] text-center">
                    "{{ $item->testimonie }}"
                  </p>

                  <div class="flex flex-col gap-5 mt-4  items-center justify-center mx-auto">
                    <div class="flex justify-center items-center">
                      <img src="{{ asset($item->img) }}" alt="" class="w-16 h-16  rounded-full"
                        onerror="this.src='/images/img/image_13.png';" />
                    </div>
                    <div class="flex flex-col gap-1">
                      <p class="font-archivo text-text16 lg:text-text18 font-bold text-[#FFFFFF] text-center">
                        {{ $item->name }}
                      </p>
                      <p class="font-archivo text-text16 lg:text-text18 font-normal text-[#FFFFFF] text-center">
                        {{ $item->ocupation }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="bg-[#2E67A4]">
      <div class="flex w-11/12 mx-auto flex-col md:flex-row md:justify-between">
        <div class="flex flex-col justify-center gap-5 pt-20 pb-0 md:py-20" data-aos="fade-up" data-aos-offset="150">
          <div class="font-archivo font-bold text-text40 lg:text-text50 leading-tight text-white">
            <p>Si usted necesita información?</p>
            <p>Haga una cita ahora!!</p>
          </div>
          <p class="font-normal text-text18 lg:text-text20 font-archivo text-white">
            Cumplimos con altos estándares internacionales de calidad en
            nuestros servicios
          </p>
          <div class="flex justify-start items-center">
            <a id="iraformulario"
              class="bg-[#FFFFFF] cursor-pointer text-[#2E67A4] font-semibold text-text16 lg:text-text18 font-archivo py-3 px-10 rounded-full">Reservar
              Cita</a>
          </div>
        </div>

        <div class="mt-10 md:-mt-[130px]">
          <img src="{{ asset('images/img/image_14.png') }}" alt="" class="h-full" />
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section>
    <div class="flex justify-between pt-20 w-11/12 mx-auto">
      <div class="hidden md:block">
        <img src="{{ asset('images/img/image_15.png') }}" alt="" />
      </div>

      <div class="flex flex-col justify-center max-w-[590px] mx-auto gap-10">
        <div>
          <h2 class="text-[#2E67A4] font-semibold font-archivo text-text48 lg:text-text50 leading-tight">
            Ponte en contacto
            <span class="text-[#289A7B]">con nuestros asesores</span>
          </h2>
          <p class="font-normal text-text18 lg:text-text20 font-archivo text-[#696969]">
            Cumplimos con altos estándares internacionales de calidad en
            nuestros servicios
          </p>
        </div>

        <form action="" id="formContactos" class="flex flex-col gap-5">
          @csrf
          <div data-aos="fade-up" data-aos-offset="150">
            <input required type="text" name="full_name" placeholder="Nombre completo"
              class="placeholder:text-opacity-40 placeholder:text-[#121212] font-archivo text-text16 lg:text-text18 font-normal text-[#15614C] focus:font-semibold w-full py-5 px-5 border-b border-[#173525] transition-all focus:outline-0 focus:border-transparent border-t-0 border-l-0 border-r-0" />
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <input maxlength="9" required type="tel" name="phone" placeholder="Teléfono"
              id="telefonoContacto"
              class="placeholder:text-opacity-40 placeholder:text-[#121212] font-archivo text-text16 lg:text-text18 font-normal text-[#15614C] focus:font-semibold w-full py-5 px-5  border-b border-[#173525] transition-all focus:outline-0 focus:border-transparent border-t-0 border-l-0 border-r-0" />
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <input required type="email" name="email" placeholder="E-mail" id="emailContacto"
              class="placeholder:text-opacity-40 placeholder:text-[#121212] font-archivo text-text16 lg:text-text18 font-normal text-[#15614C] focus:font-semibold w-full py-5 px-5  border-b border-[#173525] transition-all focus:outline-0 focus:border-transparent border-t-0 border-l-0 border-r-0" />
          </div>

          <div data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-2 z-[45]">
              <div>

                <div class="dropdown w-full">
                  <div
                    class="input-box focus:outline-none text-opacity-40 font-archivo text-text16 lg:text-text18 font-normal text-[#15614C] focus:font-semibold border-b border-[#173525] py-9 px-5">
                    <span
                      class="opacity-40 span-opacity text-[#15614C] font-archivo text-text16 lg:text-text18 font-semibold"
                      id="span-opacity">Tipo de servicios</span>
                  </div>
                  <div class="list overflow-y-scroll h-[150px] scroll-typeServicios">
                    <div class="w-full">
                      <input type="radio" id="id0" class="radio" name="service_product"
                        value="Tipo de servicios" />

                      <label for="id0"
                        class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                        Tipo de servicios
                      </label>
                    </div>

                    @foreach ($servicios as $item)
                      <div class="w-full">
                        <input type="radio" name="service_product" id="radio{{ $item->id }}" class="radio"
                          value="{{ $item->title }}" />
                        <label for="radio{{ $item->id }}"
                          class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                          {{ $item->title }}
                        </label>
                      </div>
                    @endforeach
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex justify-center items-center pb-20" data-aos="fade-up" data-aos-offset="150">
            <button type="submit"
              class="text-[#FFFFFF] font-archivo font-bold text-text16 lg:text-text20 w-full bg-[#289A7B] py-4 px-10 text-center rounded-lg">
              Enviar
              solicitud
            </button>
          </div>
        </form>
      </div>
    </div>
  </section> --}}

</main>


@section('scripts_importados')
  <script>
    document.getElementById('iraformulario').addEventListener('click', function(event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace
        smoothScroll('#formulariollegada', 800); // 800ms de duración del desplazamiento
    });

    // Función para desplazamiento suave
    function smoothScroll(target, duration) {
        const targetElement = document.querySelector(target);
        const targetPosition = targetElement.getBoundingClientRect().top;
        const startPosition = window.pageYOffset;
        let startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = easeInOutQuad(timeElapsed, startPosition, targetPosition, duration);
            window.scrollTo(0, run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        // Función de easing para suavizar el desplazamiento
        function easeInOutQuad(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(animation);
    }
  </script>
  <script>
    const menu = document.querySelector(".menu");
    const logo_1 = document.querySelector(".logo_blanco");
    const logo_2 = document.querySelector(".logo_2");
    const hamburguesa = document.querySelectorAll(".bg_color");
    const body = document.body;
    menu.addEventListener("click", (e) => {
      body.classList.toggle("overflow-hidden");

      if (body.classList.contains('overflow-hidden')) {
        hamburguesa.forEach(item => {

          item.classList.remove('bg-white')
          item.classList.add('bg-[#2E67A4]')
        })
        logo_1.classList.remove('logo_blanco');
        logo_1.classList.add('hidden');
        logo_2.classList.remove('hidden');
        logo_2.classList.add('block');
        return;
      }

      hamburguesa.forEach(item => {
        console.log(hamburguesa)
        item.classList.remove('bg-[#2E67A4]')
        item.classList.add('bg-white')

      })
      logo_1.classList.add('logo_blanco');
      logo_1.classList.remove('hidden');
      logo_2.classList.add('hidden');
      logo_2.classList.remove('block');

    });
  </script>
  <script>
    var swiper = new Swiper(".logos", {
      slidesPerView: 6,
      spaceBetween: 30,
      centeredSlides: false,
      initialSlide: 0,
      loop: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      breakpoints: {
        0: {
          slidesPerView: 2,
          centeredSlides: true,
        },
        768: {
          slidesPerView: 6,
          centeredSlides: false,
          autoplay: false,
        },
      },
    });

    var servicios = new Swiper(".servicios", {
      slidesPerView: 4,
      spaceBetween: 30,
      centeredSlides: false,
      initialSlide: 0,
      loop: false,
    });
  </script>
  {{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
      const inputBox = document.querySelector('.input-box');
      const list = document.querySelector('.list');
      const selectedService = document.getElementById('selected-service');
      const radioInputs = document.querySelectorAll('.radio');

      // Toggle dropdown
      inputBox.addEventListener('click', function(e) {
        e.stopPropagation();
        list.classList.toggle('open');
        inputBox.classList.toggle('open');
      });

      // Selección de servicio
      radioInputs.forEach(item => {
        item.addEventListener('change', function() {
          selectedService.textContent = this.value;
          selectedService.classList.remove('placeholder:text-[#12121266]');
          list.classList.remove('open');
          inputBox.classList.remove('open');
        });
      });

      // Cerrar al hacer clic fuera
      document.addEventListener('click', function() {
        list.classList.remove('open');
        inputBox.classList.remove('open');
      });
    });
  </script> --}}
  <script>
    var input = document.querySelector(".input-box");

    input.onclick = function() {
      this.classList.toggle("open");
      let list = this.nextElementSibling;
      if (list.style.maxHeight) {
        list.style.maxHeight = null;
        list.style.boxShadow = null;
      } else {
        /* list.style.maxHeight = list.scrollHeight + "px"; */
        list.style.maxHeight = 150 + "px";
        list.style.boxShadow =
          "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
      }
    };

    var span = document.querySelector(".span-opacity");
    var rad = document.querySelectorAll(".radio");
    rad.forEach((item) => {
      item.addEventListener("change", () => {
        input.innerHTML = item.nextElementSibling.innerHTML;
        input.click();
        span.textContent = item.nextElementSibling.textContent;
        if (span.textContent.trim() === "Tipo de servicios") {
          span.classList.add("opacity-40");
        } else {
          span.classList.remove("opacity-40");
        }

        input.click();
      });
    });

  </script>

  <script>
    $(document).ready(function() {
      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        initialSlide: 0,
        allowTouchMove: true,
      });
    })

    var swiper = new Swiper(".slider__headers", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      grabCursor: true,
      centeredSlides: false,
      initialSlide: 0,
      allowTouchMove: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
      },
    });
  </script>

@stop

@stop

                                          {{-- <div class="w-full">
                                                <input type="radio" id="id1" class="radio"
                                                    name="service_product" value="Gestión ISO"/>

                                                <label for="id1"
                                                    class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                                                    Gestión ISO
                                                </label>
                                            </div>

                                            <div class="w-full">
                                                <input type="radio" id="id2" class="radio"
                                                    name="service_product" />
                                                <label for="id2"
                                                    class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                                                    Capacitaciones
                                                </label>
                                            </div>

                                            <div class="w-full">
                                                <input type="radio" id="id3" class="radio"
                                                    name="service_product" />
                                                <label for="id3"
                                                    class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                                                    Inspecciones
                                                </label>
                                            </div>

                                            <div class="w-full">
                                                <input type="radio" id="id4" class="radio"
                                                    name="service_product" />
                                                <label for="id4"
                                                    class="text-text16 md:text-text18 text-[#121212] text-opacity-40 typeServicios font-archivo">
                                                    Auditorías
                                                </label>
                                          </div> --}}