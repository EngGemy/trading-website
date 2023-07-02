@extends('layouts.main')

@section('title', 'Search Results')



@section('nav')
    @include('partials._nav')
@endsection

@section('header')
    @include('partials._header')
@endsection


@section('content')

    <div class="container text-center mt-5">
        <h1>Search Results</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Companies</h2>
                @if ($companies->count() > 0)
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            @foreach ($companies as $company)
                                <li class="list-group-item">
                                    <a href="{{ route('details.show', $company->companyName->id) }}">{{ $company->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p>No company results found.</p>
                @endif
            </div>

            <div class="col-md-6">
                <h2>Fraudulent Companies</h2>
                @if ($fraudulentCompanies->count() > 0)
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            @foreach ($fraudulentCompanies as $fraudulentCompany)
                                <li class="list-group-item">
                                    <a href="{{ route('details.show', $fraudulentCompany->companyName->id) }}">{{ $fraudulentCompany->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p>No fraudulent company results found.</p>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Trading Companies</h2>
                @if ($tradingCompanies->count() > 0)
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            @foreach ($tradingCompanies as $tradingCompany)
                                <li class="list-group-item">
                                    <a href="{{ route('details.show', $tradingCompany->companyName->id) }}">{{ $tradingCompany->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p>No trading company results found.</p>
                @endif
            </div>



            </div>
        </div>
    </div>

    @section('footer')
        @include('partials._footer')
    @endsection
@endsection
