<x-app-layout>
    <div class="content-page">
        <div class="content">
            <!--stat content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h4 class="header-tittle mt-0 mb-4">Add Product</h4>
                            <form action="{{ route('admin.product.store') }}" method="POST">@csrf
                                <lebel for="name">Name</lebel>
                                <input type="" name="name" class="form-control mb-3">

                                <lebel for="image">Price</lebel>
                                <input type="" name="price" class="form-control mb-3">

                                <lebel for="image">Write description</lebel>
                                <input type="" name="description" class="form-control mb-3">

                                <lebel for="image">Catigory id</lebel>
                                <select name="category_id" id="" class="form-control mb-3">
                                    <option value="">Select Category</option>
                                </select>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
