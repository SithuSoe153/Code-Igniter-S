<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="row">

    <div class="col-12 col-sm-9">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">

                <form action="/blog/new" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="post_title">
                    </div>

                    <div class="form-group">
                        <label for="title">Text</label>
                        <textarea name="post_content" id="" cols="30" rows="10" class="form-control"></textarea>

                    </div>

                    <div class="form-group">
                        <button class="btn btn-success btn-sm">Create</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>