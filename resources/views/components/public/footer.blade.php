<footer class="bg-[#289A7B]">
    <div
      class="flex flex-col md:flex-row md:justify-between w-11/12 mx-auto py-10 gap-10"
    >
      <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
        <div class="flex justify-start items-center">
          <a href="{{route('index')}}"><img src="{{asset('images/svg/image_1.svg')}}" alt="SMO" /></a>
        </div>

        <p
          class="font-archivo font-normal text-text16 lg:text-text18 text-white w-2/3"
        >
        Bienvenido a SMO. Especialistas en Salud Ocupacional y Gestión de Calidad
        </p>

        <div class="flex justify-start items-center gap-5" data-aos="fade-up" data-aos-offset="150">
          @if ($general->instagram != null)
          <a target="_blank" href="https://{{ $general->instagram }}"> <img src="{{asset('images/svg/image_3.svg')}}" alt="instagram" /></a>
          @endif

          @if ($general->facebook != null)
          <a target="_blank" href="https://{{ $general->facebook }}"> <img src="{{asset('images/svg/image_4.svg')}}" alt="facebook" /></a>
          @endif

          @if ($general->youtube != null)
          <a target="_blank" href="https://{{ $general->youtube }}"> <img src="{{asset('images/svg/image_5.svg')}}" alt="youtube" /></a>
          @endif
        </div>
      </div>

      <div class="flex flex-col md:flex-row md:justify-between gap-10">
        <div class="flex flex-col gap-5 md:gap-8" data-aos="fade-up" data-aos-offset="150">
          <p
            class="font-archivo font-medium text-text16 lg:text-text18 text-white"
          >
            Navegador
          </p>
          <div
            class="font-normal font-archivo text-text14 lg:text-text16 text-white flex flex-col gap-5"
          >
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('nosotros')}}">Nosotros</a>
            <a href="">Servicios</a>
            <a href="{{route('contacto')}}">Contacto</a>
          </div>
        </div>

        <div class="flex flex-col gap-5 md:gap-8" data-aos="fade-up" data-aos-offset="150">
          <p
            class="font-archivo font-medium text-text16 lg:text-text18 text-white"
          >
            Dirección
          </p>
          <div
            class="font-normal font-archivo text-text14 lg:text-text16 text-white flex flex-col gap-5"
          >
            <p>{{$general->address}} - {{$general->inside}} </p>
            <p>{{$general->district}}, Lima</p>
            <p>{{$general->country}}</p>
            <p>{{$general->cellphone}} </p>
          </div>
        </div>
      </div>
    </div>

    <div
      class="border-t border-[#FFFFFF] pt-5 pb-10 flex flex-col md:flex-row md:justify-start md:items-center text-white gap-2 w-11/12 mx-auto text-text12 lg:text-text14 font-normal" 
    >
      <p>Copyright &copy; 2023 Mundo Web. Reservados todos los derechos</p>

    </div>
  </footer>