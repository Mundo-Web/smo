<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="language" content="spanish">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="">
    <title> SMO Consultores </title>
    <meta name="keywords"
        content="" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- usando jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- --- --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}" /> --}}

    {{-- Aqui van los CSS --}}
    @yield('css_importados')

    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>

    {{-- Iconos --}}
    <script src="https://example.com/fontawesome/v6.6.0/js/fontawesome.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-12706LDS37"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-12706LDS37');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P49KXJJM');
    </script>
    <!-- End Google Tag Manager -->
    
    <!-- Event snippet for Vista de página conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> 
    <script> 
        function gtag_report_conversion(url) { 
            
            var callback = function () { 
                if (typeof(url) != 'undefined') { 
                    window.location = url; 
                } 
            }; 

            gtag('event', 'conversion', {
                'send_to': 'AW-16873567744/QepiCOrG5p0aEIDs-O0-', 
                'value': 1.0, 
                'currency': 'PEN', 
                'event_callback': callback 
                });
                return false; 
        }
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P49KXJJM"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('components.public.header')

    <div>
        {{-- Aqui va el contenido de cada pagina --}}
        @yield('content')

    </div>



    @include('components.public.footer')



    @yield('scripts_importados')

    <script>
        function alerta(message) {
            Swal.fire({
                title: message,
                icon: "error",
            });
        }

        function validarTelefono(value) {

            if (value !== '') {
                if (isNaN(value)) {
                    alerta("Por favor, asegúrate de ingresar solo números en el teléfono");
                    return false;
                }
            }

            if (value.length < 9) {
                alerta("El teléfono solo puede tener 9 dígitos");
                return false;
            }

            return true;
        }

        function validarEmail(value) {
            const regex =
                /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

            if (!regex.test(value)) {
                alerta("Por favor, asegúrate de ingresar una dirección de correo electrónico válida");
                return false;
            }
            return true;
        }


        $('#formContactos').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();


            if (!validarTelefono($('#telefonoContacto').val())) {
                return;
            };

            if (!validarEmail($('#emailContacto').val())) {
                return;
            };

            const overlay = $(`
                <div class="absolute inset-0 bg-black bg-opacity-70 backdrop-blur-sm z-10 rounded-xl flex flex-col justify-center items-center gap-4">
                    <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-b-4 border-[#289A7B]"></div>
                    <div class="text-white font-bold text-xl">Enviando</div>
                </div>
            `);

            // overlay.append(spinner);
            const form = $(this);
            form.css('position', 'relative');
            form.append(overlay);

            // Swal.fire({

            //     title: 'Procesando información',
            //     html: `Enviando... 
            //           <p class=" text-text12">Revise su correo de Span</p>
            //           <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
            //             <div role="status">
            //                 <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            //                     <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            //                     <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            //                 </svg>
            //             </div>
            //           </div>
            //           `,
            //     allowOutsideClick: false,
            //     onBeforeOpen: () => {
            //         Swal.showLoading();
            //     }
            // });

            $.ajax({
                url: '{{ route('guardarContacto') }}',
                method: 'POST',
                data: formDataArray,

                success: function(response) {
                    overlay.remove();
                    window.location.href = '{{ route('agradecimiento') }}';
                    $('#formContactos')[0].reset();
                },
                error: function(error) {
                    Swal.close();
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: e,
                                icon: "error",
                            });
                            flag = true; // Marcar como mostrado
                        }
                    });
                }
            });
        })

        $('#formContactosNew').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();


            if (!validarTelefono($('#telefonoContacto').val())) {
                return;
            };

            if (!validarEmail($('#emailContacto').val())) {
                return;
            };

            var valorSeleccionado = $('input[name="service_product"]:checked').val();
            if (valorSeleccionado === "Tipo de servicios" || valorSeleccionado === undefined) {
                alerta("Debe seleccionar un servicio")
                return;
            }


            Swal.fire({

                title: 'Procesando información',
                html: `Enviando... 
                <p class=" text-text12">Revise su correo de Span</p>
                      <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
                      <div role="status">
                          <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                              <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                          </svg>
                          
                      </div>
                      </div>
                      `,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: '{{ route('guardarContacto') }}',
                method: 'POST',
                data: formDataArray,

                success: function(response) {

                    const span = document.getElementById('span-opacity');
                    span.textContent = 'Tipo de servicios';
                    span.classList.add('opacity-40');

                    Swal.close();

                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    }).then(function() {
                        window.location.href = '{{ route('agradecimiento') }}';
                    });

                    $('#formContactos')[0].reset();
                },
                error: function(error) {
                    Swal.close();
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: e,
                                icon: "error",
                            });
                            flag = true; // Marcar como mostrado
                        }
                    });
                }
            });
        })

        
    </script>

</body>

</html>
