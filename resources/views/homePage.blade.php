@extends('layouts.app')
@section('content')
    @include('partials.header')
<h1 class="text-3xl font-bold underline">
</h1>
<div class="flex justify-center">
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

<div class="flex justify-center">
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
<div class="flex justify-start items-center justify-center gap-x-20 rounded-none">
    <div class="items-center  flex-col flex">
        <img src="./assets/img/made-in-france-1.webp">
        <span>Fabrication 100% française</span>
    </div>
    <div class="items-center flex-col flex">
        <svg width="55" height="36" viewBox="0 0 55 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.921875" y="0.75" width="49" height="30" rx="3.5" stroke="black"/>
            <rect x="0.421875" y="6.25" width="50" height="4" fill="black"/>
            <line x1="5.42188" y1="13.75" x2="20.4219" y2="13.75" stroke="black"/>
            <circle cx="7.92188" cy="26.75" r="0.5" fill="black"/>
            <circle cx="17.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="27.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="37.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="9.92188" cy="26.75" r="0.5" fill="black"/>
            <circle cx="19.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="29.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="39.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="11.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="21.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="31.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="41.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="13.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="23.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="33.9219" cy="26.75" r="0.5" fill="black"/>
            <circle cx="43.9219" cy="26.75" r="0.5" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M53.3043 28.1996H52.9821C52.8858 26.9438 52.4261 25.9481 51.7411 25.2431C50.9713 24.4508 49.945 24.0555 48.922 24.0555C47.8991 24.0555 46.8728 24.4508 46.103 25.2431C45.418 25.9481 44.9583 26.9438 44.862 28.1996H44.5397C43.8199 28.1996 43.2363 28.7832 43.2363 29.5031V31.822C43.2363 33.8226 44.8581 35.4444 46.8587 35.4444H50.9854C52.986 35.4444 54.6078 33.8226 54.6078 31.822V29.5031C54.6078 28.7832 54.0242 28.1996 53.3043 28.1996ZM46.8202 25.94C46.3293 26.4452 45.9578 27.189 45.8654 28.1996H51.9787C51.8863 27.189 51.5148 26.4452 51.0239 25.94C50.4517 25.351 49.6885 25.0555 48.922 25.0555C48.1556 25.0555 47.3924 25.351 46.8202 25.94Z"
                  fill="black"/>
        </svg>
        <span>Paiment sécurisé</span>
    </div>
    <div class="items-center flex-col flex">
        <svg width="54" height="59" viewBox="0 0 54 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M37.2726 26.3771L46.077 17.5728M37.2726 26.3771H7.9248M37.2726 26.3771V44.5728M46.077 17.5728H16.7292L7.9248 26.3771M46.077 17.5728V35.7684L37.2726 44.5728M37.2726 44.5728H7.9248V26.3771"
                stroke="black" stroke-width="3"/>
            <path
                d="M40.4898 53.522C40.7202 53.9054 40.5967 54.4042 40.2065 54.623C36.1698 56.8866 31.6145 58.0768 26.9774 58.0727C22.07 58.0685 17.2566 56.7268 13.0546 54.192C8.85255 51.6571 5.42082 48.025 3.12829 43.686C0.835763 39.3471 -0.230861 34.4653 0.0430757 29.5656C0.317013 24.6658 1.92115 19.9334 4.68305 15.877C7.44495 11.8206 11.2602 8.59367 15.7186 6.54304C20.177 4.4924 25.1099 3.69564 29.9872 4.2384C34.5959 4.75127 38.9901 6.44185 42.7493 9.14127C43.1127 9.4022 43.1799 9.91165 42.9081 10.267V10.267C42.6364 10.6224 42.1288 10.6891 41.7649 10.4289C38.24 7.90789 34.124 6.32877 29.808 5.84847C25.2234 5.33827 20.5864 6.08722 16.3955 8.01482C12.2046 9.94242 8.61831 12.9758 6.02213 16.7888C3.42594 20.6018 1.91805 25.0503 1.66055 29.656C1.40305 34.2618 2.40568 38.8506 4.56065 42.9292C6.71563 47.0079 9.94145 50.4221 13.8914 52.8048C17.8413 55.1876 22.3659 56.4487 26.9788 56.4527C31.3215 56.4565 35.5878 55.3461 39.3718 53.2337C39.7624 53.0157 40.2594 53.1385 40.4898 53.522V53.522Z"
                fill="black"/>
            <path
                d="M43.2222 11.4027C43.7691 11.3259 44.1501 10.8202 44.0733 10.2733L42.8207 1.36088C42.7439 0.813975 42.2382 0.432928 41.6913 0.509791C41.1444 0.586654 40.7633 1.09232 40.8402 1.63923L41.9536 9.56137L34.0314 10.6748C33.4845 10.7516 33.1035 11.2573 33.1803 11.8042C33.2572 12.3511 33.7629 12.7321 34.3098 12.6553L43.2222 11.4027ZM42.2468 11.0345L42.4812 11.2111L43.6848 9.61382L43.4504 9.43721L42.2468 11.0345Z"
                fill="black"/>
            <circle cx="42.8487" cy="51.9097" r="0.586956" fill="black"/>
            <circle cx="44.7566" cy="50.2956" r="0.440218" fill="black"/>
            <circle cx="46.3706" cy="48.6814" r="0.293478" fill="black"/>
            <circle cx="47.6917" cy="47.0673" r="0.14674" fill="black"/>
        </svg>
        <span>Retour gratuit</span>
    </div>
    <div>
        <img src="/assets/img/component-8.webp" alt="Logo qualité outdoor made in france">
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
    <div class="flex  justify-center flex-col gap-y-4">
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


