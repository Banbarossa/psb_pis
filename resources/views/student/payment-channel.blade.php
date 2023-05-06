<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row mt-4">
            @foreach ($channels as $channel)
            <div class="col-12 col-md-2 col-lg-4">
                <div class="card">
                    <div class="card-body bg-gradient-warning">
                        <div class="">
                            <img src="{{$channel->icon_url}}" alt="" class="img-fluid">
                            {{ $channel->name }}
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
      
    </div>
</main>





<x-layouts.app>


    @foreach ($channels as $channel)
    <div class="card">
        <div class="card-body">
            <img src="{{$channel->icon_url}}" alt="">
        <li>{{ $channel->name }}</li>
        </div>
        
    </div>
    @endforeach


</x-layouts.app>

