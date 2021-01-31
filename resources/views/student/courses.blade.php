<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>


        <div class="container">
            <div class="mt-4 row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="animation-single-int bg-white rounded">
                        <div class="animation-ctn-hd">
                            <h2>Attention Seekers1111</h2>
                            <p>Click on the buttons below to start the animation action in image.</p>
                        </div>
                        <div class="animation-img mg-b-15">
                            <img class="animate-one" src="img/2.png" alt=""/>
                        </div>
                        <div class="animation-action">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn bg-info btn-reco-mg btn-button-mg">Buy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
