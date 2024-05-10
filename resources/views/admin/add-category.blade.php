<x-app-layout>
<div class="content-page">
    <div class="content">
        <!--stat content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <h4 class="header-tittle mt-0 mb-4">Add Category</h4>
                        <form action="{{ route ('admin.category.store')}}" method="POST">@csrf
                            <lebel for="name">Name</lebel>
                            <input type="" name="name" class="form-control mb-3">

                            <lebel for="image">Image</lebel>
                            <input type="" name="image" class="form-control mb-3">

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>

