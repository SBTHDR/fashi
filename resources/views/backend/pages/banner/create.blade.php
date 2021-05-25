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
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter a banner title" value="{{ old('title') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control textarea" placeholder="Enter a banner description">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">---Select a banner status---</option>
                                            <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Condition</label>
                                        <select name="condition" id="condition" class="form-control">
                                            <option value="">---Select a banner condition---</option>
                                            <option value="banner" {{ old('condition') === 'banner' ? 'selected' : '' }}>Banner</option>
                                            <option value="promo" {{ old('condition') === 'promo' ? 'selected' : '' }}>Promo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label>Slider Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="update ml-auto">
                                    <button type="submit" class="btn btn-primary btn-round">Create Banner</button>
                                    <button type="submit" class="btn btn-danger btn-round">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

