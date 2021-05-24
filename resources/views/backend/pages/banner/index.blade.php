@extends('backend.layouts.master')

@section('title', 'All Banners')

@section('content')
<div class="content vh-100">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Active Banner List</h4>
                    <a href="{{ route('banner.create') }}" class="btn btn-primary">Create Banner</a>
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
                                Photo
                            </th>
                            <th>
                                Status
                            </th>
                            </thead>

                            <tbody>

                            <tr>
                                <td>
                                    Dakota Rice
                                </td>
                                <td>
                                    dakota-rice
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, officia.
                                </td>
                                <td>
                                    imgdefault.png
                                </td>
                                <td>
                                    Active
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
