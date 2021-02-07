<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container">
        <div class="mt-4 row">
            @foreach($courses as $course)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
                    <div class="animation-single-int bg-white rounded">
                        <div class="animation-ctn-hd">
                            <h2>{{$course->name}}</h2>
                            <p class="mt-4">{{$course->brief}}</p>
                        </div>
                        <div class="animation-img mg-b-15">
                            <img class="animate-one img-circle" src="storage/{{$course->course_logo}}" alt=""/>
                        </div>
                        <div class="text-center">
                            {{$course->price}} T
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="animation-btn">
                                    <button class="btn bg-info btn-reco-mg btn-button-mg">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
