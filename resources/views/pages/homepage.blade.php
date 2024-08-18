@extends('layouts.guest')

@section('title', 'MeetTheMissionaries')

@section('content')
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
                <button class="bg-azul-boton text-white font-extralight py-1 px-1.5 rounded-[6px] flex items-center">
                    <x-iconpark-people-o class="h-4 mr-[6px]" />
                    Sign in
                </button>
            </div>
        </div>
    </nav>
    <!--Seccion conoce a los misioneros-->
    <section>
        <div class="flex flex-col lg:flex-row items-center mb-32">
            <!--imagen de los misioneros-->
            <div class="w-full flex items-center justify-center m-6">
                <img src="{{ asset('img/misioneros.png') }}" alt="missionaries together" class="rounded-md shadow-3xl">
            </div>
            <!--label de los misioneros-->
            <div class="w-full flex flex-col items-center justify-center">
                <h1 class="font-extrabold text-xl text-center text-gris-obscuro/85 mb-6 ">
                    Would you like to meet the missionaries?
                </h1>
                <p class="text-center text-gris-obscuro w-4/5 mb-8">
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

    <div class="flex flex-col items-center mb-32">
        <div class="flex flex-col items-center">
            <h1 class="font-extrabold text-3xl text-center text-gris-obscuro/85 mb-6 ">
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
    <div class="flex flex-col items-center mb-32">
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

        <div class="flex items-center justify-center my-10">
            <img src="{{ asset('img/2.jpg') }}" alt="missionaries together" class="rounded-lg w-1/6 h-26 object-cover">
            <img src="{{ asset('img/elder_missionaries_bulgaria.webp') }}" alt="missionaries together"
                class="rounded-lg w-1/6 h-26 object-cover">
            <img src="{{ asset('img/misioneras.jpeg') }}" alt="missionaries together"
                class="rounded-lg w-1/6 h-26 object-cover">
        </div>
    </div>


@endsection
