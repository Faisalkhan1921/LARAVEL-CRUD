@extends('welcome')
@section('content')

<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger fw-bold btn-lg fs-4 rounded-pill" data-toggle="modal" data-target="#modelId">
    Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="InsertData" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group">
                        <input type="text" name="p_name" placeholder="Enter the name here" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="p_price" placeholder="Enter the Price here" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" class="form-control">
                    </div>

                     <button type="submit" class="btn btn-outline-danger fw-bold btn-lg fs-4 rounded-pill">Add Record</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>
</center>
@endsection()