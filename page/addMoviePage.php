<?php
    include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>TAMBAH MOVIE</h4>
    </div>
    <hr>
    <form class="row g-3" action="../process/addMovieProcess.php" method="post">
        <div class="col-md-12">
            <label for="title" class="form-label">Movie Title</label>
            <input class="form-control" name="name" placeholder="Movie Title">
        </div>

        <div class="col-md-12">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" name="genre" multiple>
                <option value="Action">Action</option>
                <option value="Drama">Drama</option>
                <option value="Romance">Romance</option>
            </select>
        </div>

        <div class="col-md-12">
            <label for="realese" class="form-label">Year Realese</label>
            <input class="form-control" name="realese" placeholder="Year Realese">
        </div>

        <div class="col-md-12">
            <label for="season" class="form-label">Season</label>
            <input class="form-control" name="season" placeholder="Season">
        </div>

        <div class="col-md-12">
            <label for="sypnosis" class="form-label">Synopsis</label>
            <input class="form-control" name="synopsis" placeholder="Synopsis">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="addMovie">Add</button>
        </div>

    </form>
</div>
</div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>
</html>