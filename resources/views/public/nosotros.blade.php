@extends('components.public.matrix')

@section('css_importados')

    <style>
        .bg_verde {
            background-color: #289A7B;
        }

        .text_verde {
            color: #289A7B;
            /* font-weight: 700; */
        }

        .text_azul {
            color: #2E67A4;
        }

        .logo_blanco {
            display: none;
        }
    </style>

@stop


@section('content')
    <main>
        <section class="w-full px-[5%] xl:px-[8%] flex flex-col gap-10 pt-44">
            @if (!$nosotros->isEmpty())
                @foreach ($nosotros as $nosotros)
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="flex flex-col gap-3">
                            <h2 class="text-[#289A7B] font-archivo font-semibold text-text20">
                                Nuestra
                                <span class="block text-[#2E67A4] font-archivo font-bold text-text48">
                                    {{ $nosotros->titulo }}
                                </span>
                            </h2>
                        </div>

                        <div>
                            <p class="text-[#696969] font-archivo text-text18 font-normal">
                                {{ $nosotros->descripcion }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="col-span-2 flex justify-center items-center w-full">
                {{-- <img src="{{asset($nosotros->imagen)}}" alt="" class="w-full object-cover" /> --}}
                <img src="{{ asset('images/img/image_18.png') }}" alt=""
                    class="w-full object-cover hidden md:block h-96" />
                <img src="{{ asset('images/img/image_19.png') }}" alt=""
                    class="w-full object-cover block md:hidden " />
            </div>
        </section>

        <section class="w-full px-[5%] xl:px-[8%] flex flex-col gap-10 md:gap-20 pt-24 md:pt-32">
            <div class="w-full md:max-w-[768px] mx-auto flex flex-col gap-2">
                <h3 class="text-[#2E67A4] font-archivo text-text48 text-center font-bold">
                    Nuestros objetivos
                </h3>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24">
                <div class="grid grid-cols-2 gap-10">
                    <div class="flex flex-col gap-3 max-w-[296px]">
                        <h2 class="text-[#2E67A4] font-archivo font-bold text-text24">
                            Consultoría Integrada
                        </h2>
                        <p class="text-[#696969] font-archivo font-normal text-text16">
                            Proveer servicios de consultoría en sistemas integrados de
                            gestión en seguridad y salud ocupacional, brindando un servicio
                            de calidad y cumpliendo con las expectativas de los clientes.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 max-w-[296px]">
                        <h2 class="text-[#2E67A4] font-archivo font-bold text-text24">
                            Médico Ocupacional Integral
                        </h2>
                        <p class="text-[#696969] font-archivo font-normal text-text16">
                            Desarrollar el trabajo médico ocupacional que cubra los
                            requerimientos médico-legales de la legislación vigente, con la
                            finalidad de representar a su empresa ante las inspectorías y
                            auditorías.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 max-w-[296px]">
                        <h2 class="text-[#2E67A4] font-archivo font-bold text-text24">
                            Gestión Integral de Riesgos
                        </h2>
                        <p class="text-[#696969] font-archivo font-normal text-text16">
                            Identificar, disminuir y controlar los factores de riesgos
                            químicos, físicos, biológicos, psicológicos y ergonómicos;
                            logrando una población sana y productiva.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 max-w-[296px]">
                        <h2 class="text-[#2E67A4] font-archivo font-bold text-text24">
                            Fortaleciendo Vínculos
                        </h2>
                        <p class="text-[#696969] font-archivo font-normal text-text16">
                            Afianzar las relaciones de confianza de nuestros clientes, para
                            incrementar su fidelidad hacia nuestra empresa.
                        </p>
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/img/image_20.png') }}" alt="" class="w-full object-cover" />
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col gap-20 w-full px-[5%] xl:px-[8%] py-32">
                <div class="w-full md:max-w-[768px] mx-auto flex flex-col gap-3">
                    <h2 class="text-[#2E67A4] font-bold text-text48 font-archivo text-center leading-tight">
                        Nuestro Sello Distinguido:
                        <span class="text-[#289A7B] block">¿Por Qué Destacamos?</span>
                    </h2>
                    <p class="text-[#696969] font-archivo font-normal text-text18 text-center">
                        Nos dedicamos a proporcionar soluciones integrales y personalizadas que garantizan el bienestar
                        y la seguridad en tu entorno laboral. Nuestra experiencia y compromiso nos permiten ofrecer
                        servicios
                        de la más alta calidad, adaptados a las necesidades específicas de cada cliente.
                    </p>
                </div>

                <div class="flex flex-col md:flex-row md:justify-between items-center gap-10">
                    <div class="flex flex-col gap-3">
                        <div class="flex justify-center items-center w-full md:max-w-[405px] mx-auto">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.1267 14.24L41.8467 13.74C41.4855 13.1354 40.9761 12.6329 40.3667 12.28L26.9467 4.54C26.3391 4.1875 25.6493 4.00124 24.9467 4H24.3667C23.6641 4.00124 22.9743 4.1875 22.3667 4.54L8.94675 12.3C8.34069 12.6505 7.83727 13.1539 7.48675 13.76L7.20675 14.26C6.85425 14.8677 6.66799 15.5575 6.66675 16.26V31.76C6.66799 32.4626 6.85425 33.1524 7.20675 33.76L7.48675 34.26C7.84633 34.859 8.34773 35.3604 8.94675 35.72L22.3867 43.46C22.9913 43.8198 23.6831 44.0066 24.3867 44H24.9467C25.6493 43.9988 26.3391 43.8126 26.9467 43.46L40.3667 35.7C40.9787 35.3574 41.4841 34.852 41.8267 34.24L42.1267 33.74C42.4749 33.1306 42.6609 32.442 42.6667 31.74V16.24C42.6655 15.5375 42.4793 14.8477 42.1267 14.24ZM24.3667 8H24.9467L36.6667 14.76L24.6667 21.68L12.6667 14.76L24.3667 8ZM26.6667 39L38.3667 32.24L38.6667 31.74V18.22L26.6667 25.16V39Z"
                                    fill="#289A7B" />
                            </svg>
                        </div>

                        <h3
                            class="text-text32 font-archivo font-bold text-[#2E67A4] w-full md:max-w-[405px] mx-auto text-center">
                            Puntualidad en el Compromiso
                        </h3>
                        <p
                            class="text-[#696969] font-normal font-archivo text-text16 w-full md:max-w-[405px] mx-auto text-center">
                            Dar cumplimiento oportuno a nuestros compromisos.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex justify-center items-center w-full md:max-w-[405px] mx-auto">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.1267 14.24L41.8467 13.74C41.4855 13.1354 40.9761 12.6329 40.3667 12.28L26.9467 4.54C26.3391 4.1875 25.6493 4.00124 24.9467 4H24.3667C23.6641 4.00124 22.9743 4.1875 22.3667 4.54L8.94675 12.3C8.34069 12.6505 7.83727 13.1539 7.48675 13.76L7.20675 14.26C6.85425 14.8677 6.66799 15.5575 6.66675 16.26V31.76C6.66799 32.4626 6.85425 33.1524 7.20675 33.76L7.48675 34.26C7.84633 34.859 8.34773 35.3604 8.94675 35.72L22.3867 43.46C22.9913 43.8198 23.6831 44.0066 24.3867 44H24.9467C25.6493 43.9988 26.3391 43.8126 26.9467 43.46L40.3667 35.7C40.9787 35.3574 41.4841 34.852 41.8267 34.24L42.1267 33.74C42.4749 33.1306 42.6609 32.442 42.6667 31.74V16.24C42.6655 15.5375 42.4793 14.8477 42.1267 14.24ZM24.3667 8H24.9467L36.6667 14.76L24.6667 21.68L12.6667 14.76L24.3667 8ZM26.6667 39L38.3667 32.24L38.6667 31.74V18.22L26.6667 25.16V39Z"
                                    fill="#289A7B" />
                            </svg>
                        </div>

                        <h3
                            class="text-text32 font-archivo font-bold text-[#2E67A4] w-full md:max-w-[405px] mx-auto text-center">
                            Innovación en Acción
                        </h3>
                        <p
                            class="text-[#696969] font-normal font-archivo text-text16 w-full md:max-w-[405px] mx-auto text-center">
                            Presentar proactividad en nuestros servicios.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex justify-center items-center w-full md:max-w-[405px] mx-auto">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.1267 14.24L41.8467 13.74C41.4855 13.1354 40.9761 12.6329 40.3667 12.28L26.9467 4.54C26.3391 4.1875 25.6493 4.00124 24.9467 4H24.3667C23.6641 4.00124 22.9743 4.1875 22.3667 4.54L8.94675 12.3C8.34069 12.6505 7.83727 13.1539 7.48675 13.76L7.20675 14.26C6.85425 14.8677 6.66799 15.5575 6.66675 16.26V31.76C6.66799 32.4626 6.85425 33.1524 7.20675 33.76L7.48675 34.26C7.84633 34.859 8.34773 35.3604 8.94675 35.72L22.3867 43.46C22.9913 43.8198 23.6831 44.0066 24.3867 44H24.9467C25.6493 43.9988 26.3391 43.8126 26.9467 43.46L40.3667 35.7C40.9787 35.3574 41.4841 34.852 41.8267 34.24L42.1267 33.74C42.4749 33.1306 42.6609 32.442 42.6667 31.74V16.24C42.6655 15.5375 42.4793 14.8477 42.1267 14.24ZM24.3667 8H24.9467L36.6667 14.76L24.6667 21.68L12.6667 14.76L24.3667 8ZM26.6667 39L38.3667 32.24L38.6667 31.74V18.22L26.6667 25.16V39Z"
                                    fill="#289A7B" />
                            </svg>
                        </div>

                        <h3
                            class="text-text32 font-archivo font-bold text-[#2E67A4] w-full md:max-w-[405px] mx-auto text-center">
                            Compromiso Social y Ético
                        </h3>
                        <p
                            class="text-[#696969] font-normal font-archivo text-text16 w-full md:max-w-[405px] mx-auto text-center">
                            Actuar con responsabilidad social y alto nivel ético.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@section('scripts_importados')

    <script>
        const menu = document.querySelector(".menu");
        const logo_1 = document.querySelector(".logo_1");
        const logo_2 = document.querySelector(".logo_2");
        /* logo_1.classList.add('logo_blanco'); */
        logo_2.classList.remove('hidden');
        const body = document.body;
        menu.addEventListener("click", (e) => {
            body.classList.toggle("overflow-hidden");
        });
    </script>
@stop

@stop
