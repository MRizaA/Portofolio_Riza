<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
                
        </style>

@vite('resources/css/app.css')
<link rel="stylesheet" href="css/riza1.css">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            
            
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="flex justify-between">
                        <div class="flex items-center">
                          <img id="foto1" class="fotoprofil" src="img/fotoprofil.jpg"/> 
                          <h1 class="text-3xl text-white font-bold">Muhammad Riza Aditya</h1>
                        </div>
                        <div class="flex grid-cols-3 gap-4 bg-primary-700 rounded-lg"> 
                         </a>
                          <a href="/" title=""
                           class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                           role="button">
                           Awal
                         </a>
                          <a href="/tentang" title=""
                            class="text-white bg-primary-600 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
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

                    <main class="mt-6">
                        <section class=" bg-white dark:bg-gray-900 rounded-md justify-center items-center p-4">
                            <div class="flex max-w-screen-xl px-4 py-4 mx-auto lg:gap-8 xl:gap-0 lg:py-16 items-center ">

                                <div class=" lg:flex mr-5">
                                    <img src="img/foto2.jpg" width="200px" alt="">
                                </div> 

                                <div class="mr-auto place-self-center lg:col-span-7">
                                    <h1 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-4xl dark:text-white">Tentang saya</h1>
                                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Nama saya Muhammad Riza Aditya. saya adalah mahasiswa TI Politeknik Hasnur. saya sudah belajar programing selama 2 tahun. saya sangat menyukai algoritma pemrograman dan ingin menciptakan sesuatu yang berguna dengan kemampuan saya.</p>       
                                </div>
                                              
                            </div>

                            <div class="mr-auto place-self-center lg:col-span-7 mt-4">
                                <h1 class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-4xl dark:text-white">Kontak</h1>
                                <div class=" flex"><p class="max-w-2xl mb-6 font-bolt text-black lg:text-xl">Hp dan WhatsAapp:</p> 
                                <p class="pl-2 max-w-2xl mb-6 font-light text-black lg:text-xl">+62 887-4362-34143 </p></div> 
                                <div class=" flex"><p class="max-w-2xl mb-6 font-bolt text-black lg:text-xl">Email:</p> 
                                <p class="pl-2 max-w-2xl mb-6 font-light text-black lg:text-xl">mra474188@gmail.com </p></div>
                                <div class=" flex"><p class="max-w-2xl mb-6 font-bolt text-black lg:text-xl">Github:</p> 
                                <a class="pl-2 max-w-2xl mb-6 font-light text-blue-600 underline lg:text-xl" href="https://github.com/MRizaA/">MRizaA </a></div>
                                <div class=" flex"><p class="max-w-2xl mb-6 font-bolt text-black lg:text-xl">CV:</p> 
                                    <a class="pl-2 max-w-2xl mb-6 font-light text-blue-600 underline lg:text-xl" href="https://drive.google.com/file/d/1J7l67xZy6jgv9rwmWPDc_H_uw0l2DQw4/view?usp=drivesdk">Lihat</a></div>
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
