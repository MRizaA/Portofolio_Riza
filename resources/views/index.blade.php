<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}

        <!-- Styles -->
        <style>


        </style>
        
        <link rel="stylesheet" href="css/riza1.css">
        @vite('resources/css/app.css')

    </head>
    <body class="">
        <div className="">
            {{-- <img id="background" class="" width="100%" height="100%" src="img/backgroundbiru.jpg" /> --}}
            <div class="">
                <div class="">
                    <header class="flex justify-between">
                      <div class="flex items-center">
                        <img id="foto1" class="fotoprofil" src="img/fotoprofil.jpg"/> 
                        <h1 class="text-3xl text-white font-bold">Muhammad Riza Aditya</h1>
                      </div>
                      <div class="flex grid-cols-3 gap-4 bg-primary-700 rounded-lg"> 
                       </a>
                        <a href="/" title=""
                         class="text-white bg-primary-600 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                         role="button">
                         Awal
                       </a>
                        <a href="/tentang" title=""
                          class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                          role="button">
                          Tentang saya
                        </a>
                         <a href="/portofolio" title=""
                          class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                          role="button">
                          portofolio saya
                        </a> 
                      </div>
                    </header>

                    <main class="">

                        <!--hero section-->
                        
                    {{-- <section>

                    </section> --}}
                       
                        <section class="bg-white dark:bg-gray-900 antialiased">
                            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                              <div class="max-w-2xl mx-auto text-center">
                                <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                                  Hallo semua
                                </h2>
                                <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400 align-middle">
                                  Perkenalkan nama saya Riza 
                                  saya suka belajar hal baru 
                                </p>
                                <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400 align-middle">
                                   kenali diri saya lebih detail disini
                                </p>
                              </div>
                          
                              <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                                <div class="space-y-4">
                                  <span
                                    class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                    data diri 
                                  </span>
                                  <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                                    Tentang saya
                                  </h3>
                                  <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                                    nama lengkap saya Muhammad Riza Aditya. berikut detail lengkap saya
                                  </p>
                                  <a href="/tentang" title=""
                                    class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    role="button">
                                    Tentang saya
                                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                    </svg>
                                  </a>
                                </div>
                          
                                <div class="space-y-4">
                                  <span
                                    class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                    sertifikat & portofolio
                                  </span>
                                  <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                                    Portofolio saya
                                  </h3>
                                  <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                                    saya adalah seorang mahasiswa yang tertarik dengan programming. berikut adalah beberapa pengalaman saya
                                  </p>
                                  <a href="/portofolio" title=""
                                    class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    role="button">
                                    portofolio saya
                                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                    </svg>
                                  </a>
                                </div>
                          
                                <div class="space-y-4">
                                  <span
                                    class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                    projek github
                                  </span>
                                  <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                                    Projek saya
                                  </h3>
                                  <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                                    saya memasukan beberapa projek saya kedalam akun github
                                  </p>
                                  <a href="https://github.com/MRizaA/" title=""
                                    class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    role="button">
                                    Github saya
                                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                    </svg>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </section>

                    </main>

                    <footer class="py-16 text-center text-sm text-white dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
