@extends('master')
@section('content')
<div class="space50">&nbsp;</div>
<div class="container beta-relative">
    <div class="pull-left">
        <h2>Add new</h2>
    </div>
    <div class="space50">&nbsp;</div>
    @include('error')
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for='inputTitle'>Title</label>
                <input type="text" class="form-control" name="inputTitle" id="inputTitle" placeholder="Enter title"
                    required>
            </div>

            <div class="form-group">
                <label for='inputAuthor'>Author</label>
                <input type="text" class="form-control" name="inputAuthor" id="inputAuthor"
                    placeholder="Enter author" required>
            </div>

            <div class="form-group">
                <label for='inputDate'>Date</label>
                <input type="date" class="form-control" name="inputDate" id="inputDate" placeholder="Enter date"
                    required>
            </div>

            <div class="form-group">
                <label for='inputImage'>Image file</label>
                <input type="file" class="form-control-file" name="inputImage" id="inputImage" required>
            </div>

            <div class="form-group">
                <img id="preview-image-before-upload"
                    src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image"
                    style="max-height: 250px;">
                <script type="text/javascript">
                $(document).ready(function(e) {
                    $('#inputImage').change(function() {
                        let reader = new FileReader();
                        reader.onload = (e) => {
                            $('#preview-image-before-upload').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(this.files[0]);
                    });
                });
                </script>
            </div>

            <div class="form-group">
                <label for='inputDescription'>Description</label>
                <textarea name="inputDescription" required></textarea>
                <script>
                CKEDITOR.replace('inputDescription');
                </script>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <div class="space50">&nbsp;</div>
</div>
@endsection