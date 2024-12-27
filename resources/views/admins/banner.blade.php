<x-layout>
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                    <a href="{{route('addbanner')}}" class="btn btn-primary m-2">Tambah Banner</a>
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td> <a href="#" class="btn btn-warning m-2">Edit</a> 
                                            <a href="#" class="btn btn-danger m-2">Hapus</a>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

</x-layout>