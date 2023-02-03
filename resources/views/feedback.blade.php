@extends ('layouts.dashboard')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Feedback input</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <form action="upload-feedback" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="image">Role</label>
                            <input type="text" class="form-control" id="image" placeholder="Enter gambar" name="role">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subtitle">feedback</label>
                            <input type="text" class="form-control" id="subtitle" placeholder="sub title Text" name="feedback">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">image</label>
                            <input type="file" class="form-control" id="subtitle" placeholder="sub title Text" name="file">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn-primary">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
