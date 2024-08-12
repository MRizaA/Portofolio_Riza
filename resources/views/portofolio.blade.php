<!DOCTYPE html>

<?php 
$portfolios = [
    [
        'judul' => 'Juara umum ujian nasional',
        'comen' => 'saya pernah mendapat nilai ujian tertingi di sekolah saya',
        'sertifikat' => 'https://drive.google.com/file/d/1TtGCDHkZ8CNpMuQmYwcThum1wAj_JFWL/view?usp=sharing',
    ],
    [
        'judul' => 'Kompetisi Sains Nasional',
        'comen' => 'saya pernah mengikuti kompetisi matematika saat sekolah',
        'sertifikat' => 'https://drive.google.com/file/d/1U-wjaClsWOAK4hXmMsOhuckvqxX0xa7Y/view?usp=sharing',
    ],
    [
        'judul' => 'Kemahiran bahasa indonesia',
        'comen' => 'berikut hasil uji kemahiran berbahasa indonesia saya',
        'sertifikat' => 'https://drive.google.com/file/d/1TtFaetTBeegKRKyDbSMu76fAf_Q2FBSh/view?usp=sharing',
    ],
    [
        'judul' => 'Workshop backend defeloper',
        'comen' => 'seminar online backend developer bersama altera academi',
        'sertifikat' => 'https://drive.google.com/file/d/1U3N-JaxIFSnl_rm7hpLrSDPsKpCj5opl/view?usp=sharing',
    ],
    [
        'judul' => 'Workshop frontend defeloper',
        'comen' => 'seminar online frontend developer bersama altera academi',
        'sertifikat' => 'https://drive.google.com/file/d/1U3hUdEw3FD8OgWr8jDOLNQ2O3b1GwOTv/view?usp=sharing',
    ],
    [
        'judul' => 'Workshop Quality assurance',
        'comen' => 'seminar online Quality assurance bersama altera academi',
        'sertifikat' => 'https://drive.google.com/file/d/1Tqw33LcG6XCIz-lF5bt7qUoxD2jcdcCy/view?usp=sharing',
    ],
    [
        'judul' => 'Junior Network Administrator',
        'comen' => 'pelatihan dan uji kompetensi network administrator VSGA',
        'sertifikat' => 'https://drive.google.com/file/d/1U5vwLgIHpb1iE6mqELvD6omwZavokhn1/view?usp=sharing',
    ],
    [
        'judul' => 'Literasi digital',
        'comen' => 'Seminar literasi digital Politeknik Hasnur yang diselenggarakan Kominfo',
        'sertifikat' => 'https://drive.google.com/file/d/1U5enuw2WG_ed3_2WnYTcK2fyCld8_gFa/view?usp=sharing',
    ],
    [
        'judul' => 'Photoshop for dummies',
        'comen' => 'pelatihan panduan dasar photoshop oleh Veldava',
        'sertifikat' => 'https://drive.google.com/file/d/1U4h388j6kY-kDVwydzHxvE4PvzNDgi7e/view?usp=sharing',
    ],
    [
        'judul' => 'Intro to softwere enginering',
        'comen' => 'fundamental cource Intro to softwere enginering oleh RevoU',
        'sertifikat' => 'https://drive.google.com/file/d/1TwVbUrJNhGRmEKJqd7BzNt4LtA7U8neD/view?usp=sharing',
    ],
    [
        'judul' => 'Leadership Mini school',
        'comen' => 'Leadership Mini school Poiteknik Hasnur yang diselenggarakan oleh BCTI',
        'sertifikat' => 'https://drive.google.com/file/d/1f0gs7yRg965oIKy2BKRUlYlKMsx87wOM/view?usp=sharing',
    ],
    [
        'judul' => 'Creativ Critical Canvas',
        'comen' => 'Workshop Creativ Critical Canvas bersama Edutechnium',
        'sertifikat' => 'https://drive.google.com/file/d/1Tr62tudJtUQZLdJLkeZ0pFt7Gko2dZyR/view?usp=sharing',
    ],
];
?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <style>
        </style>

        <link rel="stylesheet" href="css/riza1.css">
        @vite('resources/css/app.css')

    </head>
    <body class="">
        <div className="">
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
                         class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                         role="button">
                         Awal
                       </a>
                        <a href="/tentang" title=""
                          class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                          role="button">
                          Tentang saya
                        </a>
                         <a href="/portofolio" title=""
                          class="text-white bg-primary-600 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                          role="button">
                          portofolio saya
                        </a> 
                      </div>
                    </header>

                    <main class="">
                       
                        <section class="bg-white dark:bg-gray-900 antialiased">
                            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                              <div class="max-w-2xl mx-auto text-center">
                                <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                                  Portofolio saya
                                </h2>
                                <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400 align-middle">
                                  berikut adalah beberapa pengalaman saya dan sertifikat yang saya dapatkan
                                </p>
                              </div>
                          
                              <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-12 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 bg-primary-400 p-4">

                                <?php foreach ($portfolios as $index => $portfolio): ?>

                                <div class="space-y-4 bg-white rounded-md p-4">
                                  <span
                                    class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">

                                    <?= $index + 1 ?>

                                  </span>
                                  <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">

                                    <?= $portfolio['judul'] ?>

                                  </h3>
                                  <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                                    
                                    <?= $portfolio['comen'] ?>

                                  </p>
                                  <a href="<?= $portfolio['sertifikat'] ?>" title=""
                                    class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                    role="button">
                                    Sertifikat
                                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                    </svg>
                                  </a>
                                </div>
                          
                                <?php endforeach; ?>

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

