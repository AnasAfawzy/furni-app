@extends('layout.app')
@section('title')
    Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co
@endsection
@section('contact_status', 'active')
@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Contact List</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 pb-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First_Name</th>
                                    <th scope="col">Last_Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Catgory</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($contacts) > 0)
                                    @foreach ($contacts as $key => $contact)
                                        <tr>
                                            <th scope="row">{{ $contacts->firstItem() + $loop->index }}</th>
                                            <td>{{ $contact->first_name }}</td>
                                            <td>{{ $contact->last_name }}</td>
                                            <td>{{ $contact->emsil }}</td>
                                            <td>{{ $contact->catgory?->name }}</td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                        {{ $contacts->links('pagination::bootstrap-4') }}

                    </div>

                </div>

            </div>

        </div>


    </div>
    </div>

    <!-- End Contact Form -->
@endsection
