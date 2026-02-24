@extends('layouts.app')

@section('title', 'Contact | Make with Africa')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pagesCss/donetNow.css') }}">
@endpush

@section('content')

 <section class="donation-hero">
            <div class="container">
                <h6 class="text-uppercase tracking-widest fw-bold mb-3" style="color: #ffbf00; letter-spacing: 5px;">
                    Natural Asset Stewardship</h6>
                <h1 class="display-3 fw-bold">Plant the Future of A frica</h1>
                <p class="lead opacity-75">Integrate nature with progress. Every contribution supports land reclamation
                    and agricultural sustainability.</p>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="donation-card">
                            <h3 class="fw-bold mb-4 text-dark">Select Donation Amount</h3>

                            <div class="row g-2 mb-4">
                                <div class="col-4"><button class="amount-btn active" data-amt="25">$25</button></div>
                                <div class="col-4"><button class="amount-btn" data-amt="50">$50</button></div>
                                <div class="col-4"><button class="amount-btn" data-amt="100">$100</button></div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold small text-uppercase">Custom Amount (USD)</label>
                                <input type="number" class="form-control form-control-lg rounded-0" id="customAmount"
                                    placeholder="Enter amount">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold small text-uppercase">Impact Sector</label>
                                <select class="form-select form-control-lg rounded-0">
                                    <option selected>Reforestation & Land Reclamation</option>
                                    <option>Agricultural Growth Systems</option>
                                    <option>Community Infrastructure</option>
                                </select>
                            </div>

                            <button class="donate-submit-btn">Complete Donation</button>

                            <div class="text-center mt-4">
                                <small class="text-muted"><i class="bi bi-shield-lock me-2"></i>Secure Transaction
                                    powered by SINADAI Digital Intelligence</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="p-4 bg-white border">
                            <h5 class="fw-bold border-bottom pb-3 mb-3">Your Strategic Impact</h5>
                            <ul class="list-unstyled">
                                <li class="mb-4">
                                    <span class="impact-badge">Environment</span>
                                    <p class="small mt-2 mb-0"><strong>Land Restoration:</strong> Every $100 contributes
                                        to 1 hectare of reclaimed mining land returned to nature.</p>
                                </li>
                                <li class="mb-4">
                                    <span class="impact-badge">Community</span>
                                    <p class="small mt-2 mb-0"><strong>Agro-Transition:</strong> Supporting long-term
                                        livelihoods for farmers in emerging resource economies.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
@push('scripts')
       <script>
        document.addEventListener('DOMContentLoaded', function () {
            const amountBtns = document.querySelectorAll('.amount-btn');
            const customInput = document.getElementById('customAmount');

            amountBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    // Remove active class from all
                    amountBtns.forEach(b => b.classList.remove('active'));
                    // Add to clicked
                    this.classList.add('active');
                    // Clear custom input if a preset is picked
                    customInput.value = '';
                });
            });

            customInput.addEventListener('input', function () {
                // Remove active class from presets if typing custom
                amountBtns.forEach(b => b.classList.remove('active'));
            });
        });
    </script>
@endpush