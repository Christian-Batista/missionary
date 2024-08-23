
<!-- resources/views/homepage.blade.php -->
<x-guest-layout>
        <!---->
    <nav class="w-full bg-white mb-6">
        <div class="flex items-center justify-between">
            <!--Imagen para el nav-->
            <div>
                <a href="#">
                    <img src="{{ asset('img/logoChurch.png') }}" alt="Logo" class="h-14">
                </a>
            </div>
            <!--boton de iniciar sesion-->
            <div class="mr-6">
                <div class="mr-6">
                    <a href="{{ route('login') }}" class="bg-azul-boton text-white font-extralight py-1 px-1.5 rounded-[6px] flex items-center">
                        <x-iconpark-people-o class="h-4 mr-[6px]" />
                        Sign in
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!--Seccion conoce a los misioneros-->
    <section>
        <div class="flex flex-col lg:flex-row items-center lg:mb-32 mb-16">
            <!--imagen de los misioneros-->
            <div class="w-full flex items-center justify-center m-6">
                <img src="{{ asset('img/misioneros.png') }}" alt="missionaries together" class="rounded-md shadow-3xl">
            </div>
            <!--label de los misioneros-->
            <div class="w-full flex flex-col items-center justify-center">
                <h1 class="font-extrabold text-xl text-center text-gris-obscuro/85 mb-4">
                    Would you like to meet the missionaries?
                </h1>
                <p class="text-center text-gris-obscuro w-4/8 mb-8">
                    The young people of the Church of Jesus Christ of Latter-day Saints dedicate a period of their lives to
                    service, moved by their love and faith. They temporarily abandon their studies and jobs to share the
                    message
                    of Jesus Christ, help those in need, and strengthen communities with love and dedication.
                </p>
                <p class=" text-center text-gris-obscuro/65 mb-6">
                    By clicking on the following button you can contact the missionaries near you!
                </p>
                <div>
                    <button
                        class="bg-azul-boton text-white font-medium py-2 px-2 rounded-[6px] flex items-center shadow-3xl">
                        Meet the missionaries
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--seccion de gordon b hinckley-->
    <div class="flex flex-col items-center lg:mb-32 mb-16">
        <div class="flex flex-col items-center">
            <h1 class="font-extrabold lg:text-3xl text-xl text-center text-gris-obscuro/85 mb-6 ">
                The Latter-Day Miracle of Missionary Work
            </h1>
            <p class="text-center text-gris-obscuro w-4/5 mb-8">
                “I invite you to become a vast army with enthusiasm for this work and a great general desire to help
                missionaries in the tremendous responsibility they have.”
            </p>
        </div>
        <!--imagen de gordon b hinckley-->
        <div class="items-center justify-center mb-6">
            <img src="{{ asset('img/gordon_b_hinckley.webp') }}" alt="missionaries together"
                class="rounded-full w-48 h-48 object-cover">
        </div>
        <!--label de los misioneros-->
        <div class="w-full flex flex-col items-center justify-center">
            <p class=" text-center text-gris-obscuro/65 w-5/6">
                The members of The Church of Jesus Christ, like the missionaries, dedicate themselves with devotion to a
                divine cause: serving their neighbors and sharing the blessings of a work that transcends borders and
                transforms lives. With unwavering faith, they bring light to those who need it, extending the hands of
                Christ in every act of love and service, illuminating the path to a future full of hope and eternal peace.
            </p>
        </div>
    </div>
    <!--seccion quienes son los misioneros-->
    <div class="flex flex-col items-center lg:mb-32 mb-16">
        <div class="items-center mb-8">
            <h1 class="font-extrabold text-xl text-center text-gris-obscuro/85 mb-6 ">
                Who are the missionaries?
            </h1>
        </div>
        <!--label de los misioneros-->
        <div class="w-full flex flex-col items-center justify-center mb-10">
            <p class=" text-center text-gris-obscuro w-5/6">
                Missionaries of the Church of Jesus Christ of Latter-day Saints are young volunteers who dedicate between 18
                and 24 months of their lives to the service of God and humanity. Motivated by their love for Jesus Christ
                and their neighbors, they leave behind their studies, jobs and families to share a message of hope and
                salvation. These brave young people strive to strengthen communities, provide help to those in need, and
                offer a sincere testimony of their faith in Christ. With humility and dedication, they seek to change lives
                and hearts, guiding people toward a greater understanding of the gospel and toward a life full of purpose
                and peace.
            </p>
        </div>
        <div class="flex justify-around items-center md:justify-center my-10">
            <img src="{{ asset('img/2.jpg') }}" alt="missionaries together"
                class="rounded-lg w-1/3  h-26 sm:w-1/6 object-cover">
            <img src="{{ asset('img/elder_missionaries_bulgaria.webp') }}" alt="missionaries together"
                class="rounded-lg w-1/3 h-26 md:w-1/6 bject-cover">
            <img src="{{ asset('img/misioneras.jpeg') }}" alt="missionaries together"
                class="rounded-lg w-1/3 h-26 md:w-1/6 object-cover">
        </div>
    </div>

    <!--seccion que hacen los misioneros-->
    <div class="flex flex-col items-center lg:mb-32 mb-10">
        <div class="lg:mb-8 mb-2 text-center">
            <h1 class="font-extrabold text-xl text-gris-obscuro/85 mb-6 ">
                What do missionaries do?
            </h1>
        </div>

        <div class="w-full flex flex-col md:flex-row items-center justify-center mb-10">
            <div class="text-center md:text-left mb-6">
                <h3 class="font-bold mb-2  text-gris-obscuro">Their time</h3>
                <p class="text-gris-obscuro/80 w-5/6 mx-auto">
                    Missionaries of the Church of Jesus Christ of Latter-day Saints are young people who spend between 18
                    and 24 months serving God and humanity. During this time, they step away from their studies, jobs, and
                    families to share a message of hope and faith in Christ. Motivated by their love for God and neighbor,
                    they offer their time and skills to strengthen communities, help those in need, and offer their personal
                    testimony of the truth of the gospel. It is a time of sacrifice and dedication, where they focus on
                    changing lives and hearts through service and teaching.
                </p>
            </div>

            <div class="text-center md:text-left mb-6">
                <h3 class="font-bold mb-2  text-gris-obscuro">Why?</h3>
                <p class="text-gris-obscuro/80 w-5/6 mx-auto">
                    What drives missionaries is their deep love for Jesus Christ and the desire to share the joy they have
                    found in his gospel. They feel a sacred responsibility to help others come closer to Christ and
                    experience the peace and purpose that their faith has brought them. Missionaries believe their message
                    can transform lives and bring hope to those who need it. With determination and love, they embark on
                    this mission to serve others, convinced that, in doing so, they are fulfilling God's will.
                </p>
            </div>
            <div class="text-center md:text-left mb-6">
                <h3 class="font-bold mb-2  text-gris-obscuro">What do they gain by doing it?</h3>
                <p class="text-gris-obscuro/80 w-5/6 mx-auto">
                    For many, it may be difficult to understand why young people in the prime of life would leave their
                    studies or jobs to preach in unknown places. However, missionaries reap invaluable rewards from serving.
                    They gain deep spiritual growth, a renewed sense of purpose, and a greater understanding of God's love.
                    They also develop life skills, such as resilience, empathy and leadership. Although their service is
                    unpaid, the satisfaction of seeing lives transformed and hearts changed is the greatest reward they can
                    receive.
                </p>
            </div>
        </div>
    </div>

    <!--Carrusel de imagenes-->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/2.jpg') }}"
                    class="absolute block w-1/2 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/elder_missionaries_bulgaria.webp') }}"
                    class="absolute block w-1/2 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/misioneras.jpeg') }}"
                    class="absolute block w-1/2 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/misioneros.png') }}"
                    class="absolute block w-1/2 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/7b006dce6b184329bb5872830b1ba1c4.jpg') }}"
                    class="absolute block w-1/2 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 6 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/sisiter_misisonaries_crowd.webp') }}"
                    class="absolute block w-1/2 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <!--Foother-->
    <div class="w-full h-full flex flex-col justify-center items-center bg-gradient-to-t from-slate-300 mt-36">
        <div class="mb-[63px] md:mb-[75px]">
            <img src="{{ asset('img/Untitled design (2).png') }}" alt="church icon" class="h-[240px]">
        </div>
        <div class="md:mt-10 font-thin text-3xl md:text-4xl mb-10">
            <h1 class="text-gray-600">Learn More About Us</h1>
        </div>
        <div class="hidden md:flex md:w-3/4 flex-row justify-evenly mb-28 md:mt-18">
            
            <!--Libreries links-->
            <div class="flex flex-col">
                <h2 class="text-[13px] text-sky-900">Libraries</h2>
                <hr class="mb-1">
                <div class="flex flex-col text-gray-600 text-[12px] font-thin space-y-1">
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/scriptures?lang=eng&platform=web">Scriptures</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/general-conference?lang=eng">General Conference</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/come-follow-me?lang=eng">Come, Follow Me</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/lib?lang=eng&platform=web">Gospel Library</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/media?lang=eng">Media Library</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/media/music?lang=eng">Media
                        Music</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/topics/families-and-individuals/lifes-challenges/hope-and-help?lang=eng">Life
                        Help</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/learn?lang=eng">Topic and
                        Questions</a>
                </div>

            </div>
            <!--Serve links-->
            <div class="flex flex-col">
                <h2 class="text-[13px] text-sky-900">Serve</h2>
                <hr class="mb-1">
                <div class="flex flex-col text-gray-600 text-[12px] font-thin space-y-1">
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/callings?lang=eng">Callings</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/sharing-the-gospel?lang=eng">Sharing the Gospel</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/serve?lang=eng">Volunteer and
                        Serve</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/temples?lang=eng">Temples</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/family-history?lang=eng">Family
                        History</a>
                </div>

            </div>
            <!--News links-->
            <div class="flex flex-col">
                <h2 class="text-[13px] text-sky-900">News</h2>
                <hr class="mb-1">
                <div class="flex flex-col text-gray-600 text-[12px] font-thin space-y-1">
                    <a class="hover:underline" href="https://newsroom.churchofjesuschrist.org/">Newsroom</a>
                    <a class="hover:underline" href="https://newsroom.churchofjesuschrist.org/events">Events</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/media/broadcasts?lang=eng">Broadcasts</a>
                </div>

            </div>
            <!--About Us links-->
            <div class="flex flex-col">
                <h2 class="text-sky-900 text-[13px]">About Us</h2>
                <hr class="mb-1">
                <div class="flex flex-col text-gray-600 text-[12px] font-thin space-y-1">
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/who-are-the-latter-day-saints?lang=eng">Who We
                        Are</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/restored-church-of-jesus-christ?lang=eng">Our
                        Story</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/what-do-latter-day-saints-believe?lang=eng">What
                        We
                        Believe</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/what-latter-day-saints-do?lang=eng">What We
                        Do</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/comeuntochrist/lp/basic-beliefs/meet-with-missionaries?lang=eng">Learn
                        More with </br>Missionaries</a>
                </div>

            </div>
            <!--Resources links-->
            <div class="flex flex-col w-48">
                <h2 class="text-sky-900 text-[13px]">Resources</h2>
                <hr class="mb-1">
                <div class="flex flex-col text-gray-600 text-[12px] font-thin space-y-1">
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/my-home?lang=eng">My Home</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/donations?lang=eng">Donations</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/temples/schedule/appointment?lang=eng">Temple
                        Appointments</a>
                    <a class="hover:underline" href="https://lcr.churchofjesuschrist.org/?lang=eng">Leader and Clerk
                        Resources</a>
                    <a class="hover:underline"
                        href="https://missionary.churchofjesuschrist.org/portal/home?lang=eng">Missionary Portal</a>
                    <a class="hover:underline" href="https://www.familysearch.org/">FamilySearch.org</a>
                    <a class="hover:underline" href="https://directory.churchofjesuschrist.org/">Ward Directory and
                        Map</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/calendar?lang=eng">Calendar</a>
                    <a class="hover:underline" href="https://maps.churchofjesuschrist.org/?lang=eng">Meetinghouse
                        Locator</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/notes?lang=eng">Notes</a>
                    <a class="hover:underline" href="https://pb.churchofjesuschrist.org/pbrequest?lang=eng">Patriarchal
                        Blessing</a>
                </div>

            </div>
        </div>

        <!-- Sección de dropdown para pantallas pequeñas -->
        <div class="md:hidden w-3/4 px-1">
            <!--Libraries dropdown-->
            <hr class="w-full border-gray-400 mx-auto">
            <details class="w-full p-4">
                <summary class="font-bold text-[13px] text-gray-700">Libraries</summary>
                <div class="mt-2 flex flex-col text-gray-600 text-[12px] font-thin space-y-4">
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/scriptures?lang=eng&platform=web">Scriptures</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/general-conference?lang=eng">General Conference</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/come-follow-me?lang=eng">Come, Follow Me</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/lib?lang=eng&platform=web">Gospel Library</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/media?lang=eng">Media Library</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/media/music?lang=eng">Media
                        Music</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/topics/families-and-individuals/lifes-challenges/hope-and-help?lang=eng">Life
                        Help</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/learn?lang=eng">Topic and
                        Questions</a>
                </div>
            </details>
            <!--Serve dropdown-->
            <hr class="w-full border-gray-400 mx-auto">
            <details class="w-full p-4">
                <summary class="font-bold text-[13px] text-gray-700">Serve</summary>
                <div class="mt-2 flex flex-col text-gray-600 text-[12px] font-thin space-y-4">
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/callings?lang=eng">Callings</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/study/sharing-the-gospel?lang=eng">Sharing the Gospel</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/serve?lang=eng">Volunteer and
                        Serve</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/temples?lang=eng">Temples</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/family-history?lang=eng">Family
                        History</a>
                </div>
            </details>
            <!--News dropdown-->
            <hr class="w-full border-gray-400 mx-auto">
            <details class="w-full p-4">
                <summary class="font-bold text-[13px] text-gray-700">News</summary>
                <div class="mt-2 flex flex-col text-gray-600 text-[12px] font-thin space-y-4">
                    <a class="hover:underline" href="https://newsroom.churchofjesuschrist.org/">Newsroom</a>
                    <a class="hover:underline" href="https://newsroom.churchofjesuschrist.org/events">Events</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/media/broadcasts?lang=eng">Broadcasts</a>
                </div>
            </details>
            <!--About Us dropdown-->
            <hr class="w-full border-gray-400 mx-auto">
            <details class="w-full p-4">
                <summary class="font-bold text-[13px] text-gray-700">About Us</summary>
                <div class="mt-2 flex flex-col text-gray-600 text-[12px] font-thin space-y-4">
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/who-are-the-latter-day-saints?lang=eng">Who We
                        Are</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/restored-church-of-jesus-christ?lang=eng">Our
                        Story</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/what-do-latter-day-saints-believe?lang=eng">What
                        We
                        Believe</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/welcome/what-latter-day-saints-do?lang=eng">What We
                        Do</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/comeuntochrist/lp/basic-beliefs/meet-with-missionaries?lang=eng">Learn
                        More with </br>Missionaries</a>
                </div>
            </details>
            <!--Resources-->
            <hr class="w-full border-gray-400 mx-auto">
            <details class="w-full p-4">
                <summary class="font-bold text-[13px] text-gray-700">Resources</summary>
                <div class="mt-2 flex flex-col text-gray-600 text-[12px] font-thin space-y-4">
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/my-home?lang=eng">My Home</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/donations?lang=eng">Donations</a>
                    <a class="hover:underline"
                        href="https://www.churchofjesuschrist.org/temples/schedule/appointment?lang=eng">Temple
                        Appointments</a>
                    <a class="hover:underline" href="https://lcr.churchofjesuschrist.org/?lang=eng">Leader and Clerk
                        Resources</a>
                    <a class="hover:underline"
                        href="https://missionary.churchofjesuschrist.org/portal/home?lang=eng">Missionary Portal</a>
                    <a class="hover:underline" href="https://www.familysearch.org/">FamilySearch.org</a>
                    <a class="hover:underline" href="https://directory.churchofjesuschrist.org/">Ward Directory and
                        Map</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/calendar?lang=eng">Calendar</a>
                    <a class="hover:underline" href="https://maps.churchofjesuschrist.org/?lang=eng">Meetinghouse
                        Locator</a>
                    <a class="hover:underline" href="https://www.churchofjesuschrist.org/notes?lang=eng">Notes</a>
                    <a class="hover:underline" href="https://pb.churchofjesuschrist.org/pbrequest?lang=eng">Patriarchal
                        Blessing</a>
                </div>
            </details>
        </div>

        <!--Seccion links redes-->
        <div class="hidden md:block w-3/5 my-14 mx-auto">
            <div class="flex flex-row justify-center gap-8 font-normal text-[12px] mb-1">
                <a class="hover:underline" href="https://www.churchofjesuschrist.org/tools/help/sitemap?lang=eng">Site
                    Map</a>
                <a class="hover:underline"
                    href="https://research.churchofjesuschrist.org/jfe/form/SV_da3uAscVgcSOlxA?lang=eng">Feedback</a>
                <a class="hover:underline"
                    href="https://www.churchofjesuschrist.org/church/employment?lang=eng">Employment</a>
                <a class="hover:underline" href="https://www.churchofjesuschrist.org/tools/help?lang=eng">Help</a>
                <a class="hover:underline" href="https://www.churchofjesuschrist.org/countries?lang=eng">Area Sites</a>
            </div>
            <!-- Aquí personalizamos el HR -->
            <hr class="w-2/5 border-gray-400 mx-auto mb-4">
            <div class="flex flex-row justify-center gap-2">
                <a href="">
                    <x-bi-facebook class="size-6 text-blue-800" />
                </a>
                <a href="">
                    <x-bi-twitter class="size-6 text-blue-400" />
                </a>
                <a href="">
                    <x-bi-instagram class="size-5 text-blue-950" />
                </a>
                <a href="">
                    <x-bi-youtube class="size-6 text-red-600" />
                </a>
                <a class="font-thin text-[12px] hover:underline" href="">All Church Social Pages</a>
            </div>
        </div>

        <!--Seccion links redes pequena-->
        <div class="w-3/5 md:hidden my-14 mx-auto">
            <!-- Aquí personalizamos el HR -->
            <div class="flex flex-col justify-center mb-6">
                <div class="flex flex-row justify-center  gap-3 mb-1">
                    <a href="">
                        <x-bi-facebook class="size-6 text-blue-800" />
                    </a>
                    <a href="">
                        <x-bi-twitter class="size-6 text-blue-400" />
                    </a>
                    <a href="">
                        <x-bi-instagram class="size-5 text-blue-950" />
                    </a>
                    <a href="">
                        <x-bi-youtube class="size-6 text-red-600" />
                    </a>
                </div>
                <a class="font-thin text-[12px] hover:underline flex justify-center" href="">All Church Social Pages</a>
            </div>
            <!--links-->
            <div class="flex flex-col justify-center items-center gap-2 font-light text-gray-600 text-[12px] mb-1">
                <a class="hover:underline" href="https://www.churchofjesuschrist.org/tools/help/sitemap?lang=eng">Site
                    Map</a>
                <a class="hover:underline"
                    href="https://research.churchofjesuschrist.org/jfe/form/SV_da3uAscVgcSOlxA?lang=eng">Feedback</a>
                <a class="hover:underline"
                    href="https://www.churchofjesuschrist.org/church/employment?lang=eng">Employment</a>
                <a class="hover:underline" href="https://www.churchofjesuschrist.org/tools/help?lang=eng">Help</a>
                <a class="hover:underline" href="https://www.churchofjesuschrist.org/countries?lang=eng">Area Sites</a>
            </div>
        </div>
        
        <div class="text-[12px] font-thin flex flex-col justify-center items-center mb-14 md:mb-36">
            <a class="hover:underline" href="">Accessibility Support</a>
            <div class="flex flex-row my-2">
                <a class="hover:underline" href="">Terms of Use (Updated 2021-04-13)</a>
                <a class="hover:underline" href="">Privacy Notice (Updated 2021-04-06)</a>
                <a class="hover:underline" href="">Preferencias sobre cookies</a>
            </div>

            <p>2024 by Intellectual Reserve, Inc. All rights reserved.</p>
        </div>
    </div>
</x-guest-layout>