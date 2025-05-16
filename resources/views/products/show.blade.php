@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-3">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <div class="float-start">
 Product Information
 </div>
 <div class="float-end">
 <a href="{{ route('products.index') }}" class="btn 
btn-primary btn-sm">&larr; Back</a>
 </div>
 </div>
 <div class="card-body">
 <div class="row">
    <div class="col-md-6">
        <div class="mb-2"><strong>Code:</strong> {{ $product->code }}</div>
        <div class="mb-2"><strong>Name:</strong> {{ $product->name }}</div>
        <div class="mb-2"><strong>Quantity:</strong> {{ $product->quantity }}</div>
        <div class="mb-2"><strong>Price:</strong> {{ $product->price }}</div>
        <div class="mb-2"><strong>Description:</strong> {{ $product->description }}</div>
    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-center">
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-fluid rounded" style="max-width: 300px;">
        @else
            <span class="text-muted">No image available</span>
        @endif
    </div>
 </div>
 </div>
 </div>
 </div> 
</div>
 
@endsection