@extends('backend.layouts.master')

@section('title', 'Create Banners')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Create a banner</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter a banner title" value="{{ old('title') }}">
                                        @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Description</label>
                                        <textarea name="description" class="form-control textarea" placeholder="Enter a banner description">{{ old('description') }}</textarea>
                                        @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">---Select a banner status---</option>
                                            <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Condition</label>
                                        <select name="condition" id="condition" class="form-control">
                                            <option value="">---Select a banner condition---</option>
                                            <option value="banner" {{ old('condition') === 'banner' ? 'selected' : '' }}>Banner</option>
                                            <option value="promo" {{ old('condition') === 'promo' ? 'selected' : '' }}>Promo</option>
                                        </select>
                                        @error('condition')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Banner Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3 d-flex justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-round">Create Banner</button>
                                    <a href="{{ route('banner.index') }}" class="btn btn-danger btn-round">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

