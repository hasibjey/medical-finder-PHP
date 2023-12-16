<?php
$title = "Dashboard";
include_once('./inc/header.php');
?>

<section class="right-section">
    <header class="header">
        <img src="./assets/images/doctor_1.jpeg" alt="" class="admin-img" />
        <ul class="admin-nav">
            <li class="admin-item">
                <a href="" class="admin-link">
                    <i class="fa-regular fa-user"></i>
                    <span>profile</span>
                </a>
            </li>
            <li class="admin-item">
                <a href="" class="admin-link">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>logout</span>
                </a>
            </li>
        </ul>
    </header>
    <section class="admin-container">

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">blood groups</div>
                    <div class="card-body">
                        <table class="table table-striped" id="blood-table">
                            <tr>
                                <th>#</th>
                                <th>blood group</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">Insert blood group</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label class="label">blood group</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="my-4 text-center">
                                <button class="btn btn-sm btn-danger px-4" type="reset">Clear</button>
                                <button class="btn btn-sm btn-success px-4" type="submit">Insert</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
</section>

<?php
include_once('./inc/footer.php');
?>