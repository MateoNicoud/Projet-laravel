@extends('layouts.app')
@section('content')
    @include('partials.header')

    <div class="flex mt-10 justify-center">
        <a href="http://last_man.local/">
            <div class="card max-w-max image-full ">

                <figure>
                    <img src="./assets/img/romain-gal-f5KkNedSydo-unsplash 2.webp" alt="liens vers l'article tendance"/>
                </figure>

                <div class="card-body">
                    <h2 class="card-title">SAC Gérémy 3000 en promo !</h2>
                    <p></p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">En savoir+</button>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- catégorie les + populaires-->

    <div class="flex my-20 justify-center">
        <h2 class="text-5xl py-10">Les + populaires</h2>
    </div>

    <div class="flex flex-wrap justify-center gap-x-11">
        <div class="flex  justify-center flex-col gap-y-3">
            @for($item=0;$item<2;$item++)
                {{--    @foreach($categories as $item)--}}
                <!--{{$categories[$item]->name}} -->
                <a href="http://last_man.local/{{$categories[$item]->slug}}">
                    <div class="card max-w-max bg-base-100 shadow-none image-full rounded-none">
                        <figure>
                            <img src="{{$categories[$item]->img}}" alt="liens vers couteaux/haches"/>
                        </figure>

                        <div class="card-body">
                            <h2 class="card-title">{{$categories[$item]->name}}</h2>
                            <p></p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-secondary">En savoir+</button>
                            </div>
                        </div>
                    </div>
                </a>
                {{--    @endforeach--}}
            @endfor
        </div>
        <div class="flex  justify-center flex-col gap-y-4">
            @for($item=2;$item<5;$item++)
                {{--    @foreach($categories as $item)--}}
                <!--{{$categories[$item]->name}} -->
                <a href="http://last_man.local/{{$categories[$item]->slug}}">
                    <div class="card max-w-max bg-base-100 shadow-none image-full rounded-none">
                        <figure>
                            <img src="{{$categories[$item]->img}}" alt="liens vers couteaux/haches"/>
                        </figure>

                        <div class="card-body">
                            <h2 class="card-title">{{$categories[$item]->name}}</h2>
                            <p></p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-secondary">En savoir+</button>
                            </div>
                        </div>
                    </div>
                </a>
                {{--    @endforeach--}}
            @endfor
        </div>
    </div>

    <div class="my-20">
        <hr class="flex justify-center border-solid border-1 border-neutral-800 w-8/12 mx-auto rounded-full my-6">


        <div class="flex justify-start items-center justify-center gap-x-20 rounded-none">
            <div class="items-center  flex-col flex">
                <img src="./assets/img/made-in-france-1.webp">
                <span>Fabrication 100% française</span>
            </div>
            <div class="items-center flex-col flex">
                <img src="{{asset('assets/icons/logo_card_secure.svg')}}">
                <span>Paiment sécurisé</span>
            </div>
            <div class="items-center flex-col flex">
                <img src="{{asset('assets/icons/delivery_back.svg')}}">
                <span>Retour gratuit</span>
            </div>
            <div>
                <img class="min-w-20" src="{{asset('assets/icons/outdoor_quality.svg')}}">
            </div>
            <div class="items-center flex-col flex">
                <svg width="75" height="157" viewBox="0 0 75 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M73.5796 1.18115V0.681152H73.0796H1H0.5V1.18115V104.321V104.476L0.587786 104.604C18.1536 130.191 55.926 130.191 73.4918 104.604L73.5796 104.476V104.321V1.18115Z"
                        fill="black" stroke="#F2A000"/>
                    <path d="M3.5127 102.572V3.86279H70.7354V102.572C54.4022 125.871 19.8459 125.871 3.5127 102.572Z"
                          fill="black" stroke="#F2A000" stroke-width="3"/>
                    <path
                        d="M40.6817 105.947C38.4276 107.421 35.4503 107.412 33.2053 105.926L12.1419 91.9804L33.9408 102.57C35.8102 103.478 38.0227 103.482 39.8957 102.581L62.3701 91.7666L40.6817 105.947Z"
                        fill="#F2A000"/>
                    <path
                        d="M40.6817 95.9342C38.4276 97.408 35.4503 97.3996 33.2053 95.9133L12.1419 81.9678L33.9408 92.5577C35.8102 93.4659 38.0227 93.4699 39.8957 92.5686L62.3701 81.754L40.6817 95.9342Z"
                        fill="#F2A000"/>
                    <path
                        d="M40.6817 85.9216C38.4276 87.3954 35.4503 87.3871 33.2053 85.9007L12.1419 71.9552L33.9408 82.5452C35.8102 83.4533 38.0227 83.4573 39.8957 82.5561L62.3701 71.7414L40.6817 85.9216Z"
                        fill="#F2A000"/>
                    <path
                        d="M47.3731 37.8954C50.6889 44.3334 37.1899 17.3864 37.1899 17.3864C37.1899 17.3864 28.35 35.3535 24.4118 42.9943C20.4735 50.6351 44.0573 31.4575 47.3731 37.8954Z"
                        fill="white" stroke="black" stroke-width="5"/>
                    <path
                        d="M14.5039 62.6259L24.4181 42.968C20.4219 50.8916 43.9804 31.4756 47.2541 37.8872C50.5279 44.2987 59.7435 62.6259 59.7435 62.6259H14.5039Z"
                        fill="white" stroke="black" stroke-width="5"/>
                </svg>
                <span class="mt-[-20px]">Garantie 5 ans</span>
            </div>
        </div>

        <hr class="flex justify-center border-solid border-1 border-neutral-800 w-8/12 mx-auto rounded-full my-6">
    </div>


    <div class="flex flex-wrap justify-center gap-x-11">
        <div class="flex  justify-center flex-col gap-y-3">
            @for($item=5;$item<8;$item++)
                {{--    @foreach($categories as $item)--}}
                <!--{{$categories[$item]->name}} -->
                <a href="http://last_man.local/{{$categories[$item]->slug}}">
                    <div class="card max-w-max bg-base-100 shadow-none image-full rounded-none">
                        <figure>
                            <img src="{{$categories[$item]->img}}" alt="liens vers couteaux/haches"/>
                        </figure>

                        <div class="card-body">
                            <h2 class="card-title">{{$categories[$item]->name}}</h2>
                            <p></p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-secondary">En savoir+</button>
                            </div>
                        </div>
                    </div>
                </a>
                {{--    @endforeach--}}
            @endfor
        </div>
        <div class="flex   justify-center flex-col gap-y-4">
            @for($item=8;$item<10;$item++)
                {{--    @foreach($categories as $item)--}}
                <!--{{$categories[$item]->name}} -->
                <a href="http://last_man.local/{{$categories[$item]->slug}}">
                    <div class="card max-w-max bg-base-100 shadow-none image-full rounded-none">
                        <figure>
                            <img src="{{$categories[$item]->img}}" alt="liens vers couteaux/haches"/>
                        </figure>

                        <div class="card-body">
                            <h2 class="card-title">{{$categories[$item]->name}}</h2>
                            <p></p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-secondary">En savoir+</button>
                            </div>
                        </div>
                    </div>
                </a>
                {{--    @endforeach--}}
            @endfor
        </div>
    </div>




    @include('partials.footer')
@endsection


