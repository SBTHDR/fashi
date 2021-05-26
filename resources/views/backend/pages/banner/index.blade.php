@extends('backend.layouts.master')

@section('title', 'All Banners')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('msg'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span><b> Success - </b> {{ Session::get('msg') }}</span>
                </div>
            @endif

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Active Banner List</h4>
                    <a href="{{ route('banner.create') }}" class="btn btn-primary btn-round">Create Banner</a>
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table">

                            <thead class=" text-primary">
                            <th>
                                Title
                            </th>
                            <th>
                                Slug
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Image
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Condition
                            </th>
                            </thead>

                            <tbody>

                            <tr>
                                @foreach($banners as $banner)
                                    <td>
                                        {{ $banner->title }}
                                    </td>
                                    <td>
                                        {{ $banner->slug }}
                                    </td>
                                    <td>
                                        {{ $banner->description }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/banner/' . $banner->image) }}" alt="" class="img-thumbnail" width="120px">
                                    </td>
                                    <td>
                                        {{ $banner->status }}
                                    </td>
                                    <td>
                                        {{ $banner->condition }}
                                    </td>
                                @endforeach
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
