@include('common.header', ['title' => 'Mobile unlock'])

<div class="media-icon">
    <a href="#" class="ri-facebook-fill"></a>
    <a href="#" class="ri-twitter-fill"></a>
    <a href="mailto:example@example.com" class="ri-mail-fill"></a>
    <a href="https://wa.me/1234567890" class="ri-whatsapp-fill"></a>
</div>


<div style="position: relative; z-index: 1;">
    <x-maincarousal />
</div>
<div class="container">
    <h1 class="mainheading mt-5 ">Our Services</h1>
    <div class="container mt-3">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-3 col-12 mt-3 p-2">
                    <div class="card">
                        <a href="{{ route('service.show', ['slug' => $service->slug]) }}">
                            <img src="{{ asset('storage/images/' . $service->image) }}" class="p-1" style="width: 100%;" alt="...">
                            <div class="card-body p-2">
                                <h6 class="card-text semiBold">{{ $service->title }}</h6>
                            </div>
                            <div class="mb-2 d-flex justify-content-around align-items-center">
                                <h3 class="text-center">{{ $service->price }}$</h3>
                                <button class="btn btn-primary btn-sm"><a href="{{route('service.buy',['slug'=>$service->slug])}}" style="color: white">Buy Now</a></button>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
  
   
       
    
    <h1 class="mainheading mt-5">Why Mobile UnLock</h1>
    <div class="row" >
        <div class="col-md-3 mt-2 ">

            <i class="ri-lock-2-line ri-3x"></i>
            <h2 class="subheading">Absolutely Safe</h2>
            <p>We are the only ones in the market. If there's any problem with our product, we're here to provide you
                with an alternative. Our aim is customer satisfaction.</p>
        </div>
        <div class="col-md-3 ">
            <i class="ri-price-tag-3-line ri-3x"></i>
            <h2 class="subheading">Unbeatable Price Guarantee</h2>
            <p>We offer the lowest prices with the most reliable services you can trust. We will MEET or BEAT any
                competitors' price.</p>
        </div>
        <div class="col-md-3 ">
            <i class="ri-headphone-line ri-3x"></i>
            <h2 class="subheading">24/7 Reliable Support</h2>
            <p>We make a difference by providing support to our customers 24x7. Whether it's via email, live chat, or
                text message, we're here to help.</p>
        </div>
        <div class="col-md-3">
            <i class="ri-money-dollar-box-line ri-3x"></i>
            <h2 class="subheading">Money Back Guarantee</h2>
            <p>All services on our website are covered by our 100% Money Back Guarantee. We offer this guarantee to give
                honest customers peace of mind.</p>
        </div>
    </div>
    <h1 class="mainheading mt-5 ">Brands We UnLock</h1>
    {{-- <div class="row mt-4 justify-content-between flex-wrap bg-light mb-5 p-3 pb-5 gy-4 brand-logo">
        <div class="col-md-2 col-6">
            <img src="./logo/apple.webp" alt="LOGO" class="img-fluid" width="100px">
        </div>
        <div class="col-md-2 col-6">
            <img src="./logo/Google.webp" alt="LOGO" class="img-fluid" width="100px">
        </div>
        <div class="col-md-2 col-6">
            <img src="./logo/Huawei.webp" alt="LOGO" class="img-fluid" width="100px">
        </div>

        <div class="col-md-2 col-6">
            <img src="./logo/Samsung.webp" alt="LOGO" class="img-fluid" width="100px">
        </div>
        <div class="col-md-2 col-6">
            <img src="./logo/Sony.webp" alt="LOGO" class="img-fluid" width="100px">
        </div>
        <div class="col-md-2 col-6">
            <img src="./logo/Xiaomi.webp" alt="LOGO" class="img-fluid" width="100px">
        </div>
    </div> --}}
    <div class="row mt-4 bg-white mb-5 p-3 pb-5 gy-4">
        <div class="col-12">
            <marquee behavior="scroll" direction="right" scrollamount="5">
                <div class="d-flex">
                    <div class="col-md-2 col-6 brand-logo">
                        <img src="./logo/apple.webp" alt="Apple Logo" class="img-fluid " width="100px">
                    </div>
                    <div class="col-md-2 col-6 brand-logo">
                        <img src="./logo/Google.webp" alt="Google Logo" class="img-fluid" width="100px">
                    </div>
                    <div class="col-md-2 col-6 brand-logo">
                        <img src="./logo/Huawei.webp" alt="Huawei Logo" class="img-fluid" width="100px">
                    </div>
                    <div class="col-md-2 col-6 brand-logo">
                        <img src="./logo/Samsung.webp" alt="Samsung Logo" class="img-fluid" width="100px">
                    </div>
                    <div class="col-md-2 col-6 brand-logo">
                        <img src="./logo/Sony.webp" alt="Sony Logo" class="img-fluid" width="100px">
                    </div>
                    <div class="col-md-2 col-6 brand-logo">
                        <img src="./logo/Xiaomi.webp" alt="Xiaomi Logo" class="img-fluid" width="100px">
                    </div>
                </div>
            </marquee>
        </div>
    </div>
    
</div>
</div>
@include('common.footer')
