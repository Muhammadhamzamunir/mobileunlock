@include('common.header', ['title' => $service->slug])

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="service-details">
                <h1>{{ $service->title }}</h1>

                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid " style="height: 300px;">
                    </div>
                    <div class="col-md-6">
                        <p><strong>Price:</strong> ${{ $service->price }}</p>
                        {{-- <p><strong>Cost Price:</strong> ${{ $service->cost_price }}</p> --}}
                        {{-- <p><strong>Supplier:</strong> {{ $service->supplier }}</p> --}}
                        <p><strong>Delivery Time:</strong> {{ $service->delivery_time }}</p>
                        <p><strong>Service Type:</strong> {{ $service->service_type }}</p>
                        <p><strong>IMEI Field Type:</strong> {{ $service->imei_field_type }} 

                        @if ($service->imei_field_type === 'Custom')
                            ( {{ implode(', ', json_decode($service->custom_field_values)) }}) 
                        @endif
                    </p>
                        <p><strong>Details:</strong> {{ $service->details }}</p>
                        <div class="mt-3">
                            <p><strong>Features:</strong></p>
                            <ul>
                                @if($service->refundable)
                                    <li>Refund available if code is not found</li>
                                @endif
                                @if($service->service_available_24_7)
                                    <li>Service available 24 * 7</li>
                                @endif
                                @if($service->unlock_guaranteed)
                                    <li>Unlock guaranteed</li>
                                @endif
                                @if($service->no_refund_for_bad_requests)
                                    <li>No Refund for bad requests</li>
                                @endif
                                @if($service->working_on_business_days_only)
                                    <li>Working on business days only</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

              

                
            </div>
        </div>
    </div>
</div>

@include('common.footer')
