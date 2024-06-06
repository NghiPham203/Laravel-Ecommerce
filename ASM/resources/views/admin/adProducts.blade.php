@extends('admin.layoutadmin')
@section('title','Dashbord')
@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
         data-sidebar-position="fixed" data-header-position="fixed">
        <aside class="left-sidebar">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{route('dashboard')}}" class="text-nowrap logo-img">
                        <img src="ASM/assets/img/logo.png" width="180" alt=""/>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                                <span><i class="ti ti-layout-dashboard"></i></span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="" aria-expanded="false">
                                <span><i class="ti ti-article"></i></span>
                                <span class="hide-menu">Products</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                                <span><i class="ti ti-alert-circle"></i></span>
                                <span class="hide-menu">Sản Phẩm</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                                <span><i class="ti ti-cards"></i></span>
                                <span class="hide-menu">Người Dùng</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                                <span><i class="ti ti-file-description"></i></span>
                                <span class="hide-menu">Đơn Hàng</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Khác</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                                <span><i class="ti ti-login"></i></span>
                                <span class="hide-menu">Đăng Xuất</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                               href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35"
                                         class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                     aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                           class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                           class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="container-fluid">
                <div class="table-responsive">
                    <div class="container">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Quản lý<b> Sản Phẩm</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                                class="material-icons">&#xE147;</i> <span>Thêm mới sản phẩm</span></a>
                                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                                class="material-icons">&#xE15C;</i> <span>Xóa</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Hình ảnh</th>
                                    <th>
                                        <form method="GET" action="{{ route('adProducts') }}">
                                            <div class="form-group">
                                                <select id="category-options" name="category" class="form-control" onchange="this.form.submit()">
                                                    <option value="all">Danh mục</option>
                                                    @foreach($categories as $item)
                                                        <option value="{{$item->id}}" {{ request()->category == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </form>
                                    </th>
                                    <th>Lượt xem</th>
                                    <th>Lượt bán</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $prd)
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox{{$prd->id}}" name="options[]" value="{{$prd->id}}">
                                                <label for="checkbox{{$prd->id}}"></label>
                                            </span>
                                        </td>
                                        <td>{{$prd->id}}</td>
                                        <td>{{$prd->name}}</td>
                                        <td>{{number_format($prd->price,0,',','.')}}</td>
                                        <td><img src="{{asset('storage/uploads/'.$prd->image)}}" alt="{{$prd->name}}" class="img-fluid" style="max-width: 100px; height: auto; border-radius: 50%"></td>
                                        <td>{{$prd->category->name}}</td>
                                        <td>{{$prd->view}}</td>
                                        <td>{{$prd->sold}}</td>
                                        <td>
                                            <!-- Thêm thuộc tính data-id vào nút "Edit" với giá trị id của sản phẩm -->
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal" data-id="{{ $prd->id }}" data-name="{{ $prd->name }}" data-price="{{ $prd->price }}" data-image="{{ asset('storage/uploads/'.$prd->image) }}" data-slug="{{ $prd->slug }}" data-description="{{ $prd->description }}" data-quantity="{{ $prd->quantity }}" data-category-id="{{ $prd->category->id }}"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                            <!-- JavaScript để lắng nghe sự kiện click vào nút "Edit" và truyền giá trị id vào modal "Edit" -->

                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal" data-id="{{ $prd->id }}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>{{ $products->firstItem() }}</b> to <b>{{ $products->lastItem() }}</b> of <b>{{ $products->total() }}</b> entries</div>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>

{{--    add modal--}}
                <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="ad-Products" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Employee</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <input type="text" class="form-control" name="price" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="image" class="form-control" required>
                                        <div id="imagePreview" style="border-radius: 50%"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Lượt xem</label>
                                        <input type="text" class="form-control" name="view" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lượt bán</label>
                                        <input type="text" class="form-control" name="sold" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    document.querySelector('input[name="image"]').addEventListener('change', function(event) {
                        const file = event.target.files[0];
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imagePreview = document.getElementById('imagePreview');
                            imagePreview.innerHTML = `<img src="${e.target.result}" alt="Preview" style="max-width: 200px; max-height: 200px; border-radius: 50%">`;
                        };
                        reader.readAsDataURL(file);
                    });

                    document.addEventListener('DOMContentLoaded', function() {
                        $('#deleteEmployeeModal').on('show.bs.modal', function(e) {
                            var button = $(e.relatedTarget);
                            var productId = button.data('id');
                            var action = '{{ route("deleteproduct", ":id") }}';
                            action = action.replace(':id', productId);
                            $('#deleteForm').attr('action', action);
                        });
                    });
                </script>

                {{--           edit modal--}}


                <div id="editEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('updateproduct', ['id' => $prd->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" id="edit-id">

                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Product</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="edit-id">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="edit-name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="price" id="edit-price" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="text" name="quantity" id="edit-quantity" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" id="edit-category_id" class="form-control" required>
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="image" id="edit-image" class="form-control">
                                        <div id="imagePreview" style="border-radius: 50%"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea type="text" name="description" id="edit-description" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" id="edit-slug" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lượt xem</label>
                                        <input type="text" name="view" id="edit-view" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lượt bán</label>
                                        <input type="text" name="sold" id="edit-sold" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function(){
                        $('.edit').on('click', function() {
                            // Lấy thông tin từ thuộc tính data-*
                            var id = $(this).data('id');
                            var name = $(this).data('name');
                            var price = $(this).data('price');
                            var image = $(this).data('image');
                            var slug = $(this).data('slug');
                            var description = $(this).data('description');
                            var quantity = $(this).data('quantity');
                            var categoryId = $(this).data('category-id');
                            var view = $(this).data('view');
                            var sold = $(this).data('sold');

                            // Cập nhật thông tin vào modal
                            $('#editEmployeeModal #edit-id').val(id);
                            $('#editEmployeeModal [name="name"]').val(name);
                            $('#editEmployeeModal [name="price"]').val(price);
                            $('#editEmployeeModal [name="description"]').val(description);
                            $('#editEmployeeModal [name="slug"]').val(slug);
                            $('#editEmployeeModal [name="view"]').val(view);
                            $('#editEmployeeModal [name="sold"]').val(sold);
                            $('#editEmployeeModal [name="quantity"]').val(quantity);
                            $('#editEmployeeModal [name="category_id"]').val(categoryId);
                            $('#editEmployeeModal [name="image"]').val(image);

                            // Hiển thị modal
                            $('#editEmployeeModal').modal('show');
                        });
                    });




                </script>

                {{--                DELETE MODAL--}}
                <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="deleteForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Employee</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this record?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
