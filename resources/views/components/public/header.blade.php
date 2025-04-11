<header
      class="absolute flex justify-between w-full px-[5%] xl:px-[8%] left-0 right-0 py-5 z-[200]"
    >
      <div class="flex justify-center items-center z-40">
        <a href="{{route('index')}}">
          <img src="{{asset('images/svg/image_1.svg')}}" alt="SMO"  class="logo_1 logo_blanco"/> 
          <img src="{{asset('images/svg/image_13.svg')}}" alt="SMO"  class="logo_2 hidden"/> 
        </a>
      </div>

      <nav class="flex h-20 items-center justify-between">
        <!-- <input type="checkbox" id="menu" class="peer/menu hidden menu" /> -->
        <!-- <label for="menu" class="hamburguesa transition-all z-40 md:hidden">
        </label> -->

        <input type="checkbox" id="menu" class="peer/menu menu hidden" />
        <label
          for="menu"
          class="transition-all flex flex-col gap-1 z-40 md:hidden hamburguesa justify-center items-center"
        >
          <!-- peer-checked:[&>*]:nth-child(2):hidden -->
          <p class="w-7 h-1 bg-white bg_verde transition-transform duration-500 bg_color"></p>
          <p class="w-7 h-1 bg-white bg_verde transition-transform duration-500 bg_color"></p>
          <p class="w-7 h-1 bg-white bg_verde transition-transform duration-500 bg_color"></p>
        </label>

        <!-- <ul
          class="fixed inset-0 bg-[#2E67A4] px-[5%] grid auto-rows-max content-center justify-items-center clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-10 md:clip-circle-full md:relative md:flex md:justify-items-center md:p-0 md:bg-transparent font-archivo font-medium text-text16 md:text-text18 text-white"
        > -->
        <ul
          class="fixed inset-0 bg-[#ffffff] px-[5%] flex flex-col md:flex-row md:items-center pt-32 clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-10 md:clip-circle-full md:relative md:flex md:justify-items-center md:p-0 md:bg-transparent font-archivo font-bold md:font-medium text-text32 md:text-text18 text-[#2E67A4] md:text-white"
        >
          <li class="block md:hidden text-text20">
            <p class="text-[#289A7B]">Menu</p>
          </li>
          <li>
            <a href="{{route('index')}}" class="text_azul">Inicio</a>
          </li>
          <li>
            <a href="{{route('nosotros')}}" class="text_verde">Nosotros</a>
          </li>
          <li>
            <a href="{{route('index'). '#servicios'}}" class="text_azul">Servicios</a>
          </li>
          <li>
            <a href="{{route('contacto')}}" class="text_azul">Contacto</a>
          </li>

          {{-- <li class="w-full">
            <a id="iraformulario" class="bg-[#289A7B] py-3 w-full md:w-auto md:py-4 rounded-full px-5 inline-block text-center text-white text-text16"
              >Quiero una cita</a
            >
          </li> --}}
        </ul>
      </nav>
    </header>

    {{-- onclick="return gtag_report_conversion('https://smoconsultores.com/');" --}}
    {{-- Whatsapp --}}
    <div class="flex justify-end relative">
      <div class="fixed bottom-[36px] z-[10] right-[15px] md:right-[25px]">
        <a 
          target="_blank" id="whatsapp-toggle">
          <img src="{{ asset('images/img/WhatsApp.png') }}" alt="whatsapp" class="cursor-pointer w-16 h-16 md:w-20 md:h-20" />
        </a>
      </div>
    </div>

    <div class="fixed bottom-24 right-6 lg:bottom-40 z-[99] shadow-xl hidden animate-once animate-duration-1000"
        id="whatsapp-chat">
        <div class="w-72 h-auto rounded-xl">
            <div class="bg-green-500 font-outfitRegular text-white text-center py-3 rounded-t-xl"> Whatsapp Chat </div>
            <div class="bg-white shadow-xl hover:bg-slate-100 cursor-pointer">
                <div class="flex flex-row p-3">
                    <div class="px-2">
                        <div class="flex flex-row justify-start items-center gap-3">
                            <img class="w-10" src="{{ asset('images/img/asistente.png') }}" />
                            <div class="flex flex-col justify-start items-start">
                                <p class="text-slate-400 font-outfitRegular text-text14 ">Agente Virtual</p>
                                <div class="flex flex-row items-center justify-start gap-2">
                                    <div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div>
                                    <p class="text-slate-400 font-outfitRegular text-text12">En Línea </p>
                                </div>
                            </div>
                        </div>

                        <form class="space-y-2 mt-3" id="dataWhatsapp">
                            @csrf
                            <input type="text" name="contact_name_wsp" placeholder="Nombre Completo" required
                                class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                                  text-gray-600 font-outfitRegular w-full py-2 px-2 rounded-xl text-text16  placeholder-opacity-25 font-light  bg-white">

                            <input type="email" name="contact_email_wsp" id="email_wsp"
                                placeholder="Correo Electrónico" required
                                class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                                    text-gray-600 font-outfitRegular w-full py-2 px-2 rounded-xl text-text16  placeholder-opacity-25 font-light  bg-white">

                            <input type="text" name="contact_phone_wsp" id="telefono_wsp" placeholder="Teléfono"
                                required
                                class="border-green-500 border-2 focus:!border-green-500 focus:!border-2 focus:!ring-0 focus:!ring-transparent
                                      text-gray-600 font-outfitRegular w-full py-2 px-2 rounded-xl text-text16  placeholder-opacity-25 font-light  bg-white">

                            <button id='procesarSolicitud2'
                                class="font-outfitRegular font-semibold text-white py-2 px-2 bg-green-500 justify-center items-center rounded-xl inline-flex text-text16 w-full">
                                <span>Enviar</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
      document.getElementById('whatsapp-toggle').addEventListener('click', function() {
          var chatBox = document.getElementById('whatsapp-chat');
          if (chatBox.classList.contains('hidden')) {
              chatBox.classList.remove('hidden');
              chatBox.classList.add('animate-fade-up');
          } else {
              chatBox.classList.add('hidden');
              chatBox.classList.remove('animate-fade-up');
          }
      });
    </script>

    <script>
      $('#procesarSolicitud2').on('click', function() {
          event.preventDefault();

          let formulario = $('#dataWhatsapp').serialize()

          fetch("{{ route('guardarWsp') }}", {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json'
                  },
                  body: JSON.stringify({
                      _token: $('[name="_token"]').val(),
                      full_name: $('[name="contact_name_wsp"]').val(),
                      email: $('[name="contact_email_wsp"]').val(),
                      phone: `51${$('[name="contact_phone_wsp"]').val()}`,
                  })
              })
              .then(async res => {
                  const data = await res.json()
                  if (!res.ok) throw new Error(data?.message ?? 'Ocurrio un error inesperado')
                  return data
              })
              .then(response => {
                  Swal.close();
                  Swal.fire({
                      title: response.message,
                      icon: "success",
                  }).then((result) => {

                      if (result.isConfirmed) {
                          window.open('https://api.whatsapp.com/send?phone={{ $general->whatsapp }}&text={{ urlencode($general->mensaje_whatsapp) }}', '_blank');
                          window.location.href = "https://smoconsultores.com/agradecimiento?form=whastapp";
                      }
                  });

              }).catch((error) => {
                  Swal.close();
                  Swal.fire({
                      title: error,
                      icon: "error",
                  });
              })

      })
    </script>
    