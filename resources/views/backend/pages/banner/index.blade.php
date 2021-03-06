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
                            <th>
                                Action
                            </th>
                            </thead>

                            <tbody>
                            @foreach($banners as $banner)
                                <tr>
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
                                    <td>
                                        <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-dark btn-round btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-round btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
