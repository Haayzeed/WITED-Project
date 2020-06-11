<?php
include "includes/header.php";
include "includes/sidebar.php";
?>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">WITED</a></li>
                                <li class="breadcrumb-item active"><a href="javascript: void(0);">Journals</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Modify Journal</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-uppercase">Towards better quality compounded drugs - an updated form</h4>
                            <p>Romano Mullin Adaptation, Volume 12, Issue 2, August 2019, Pages 89–104, https://doi.org/10.1093/adaptation/apy006 Published: 03 April 2018</p>
                            <hr>
                            <h4>Abstract</h4>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <a href="docs/work.pdf" download class="btn btn-info btn-block">Download Journal</a>
                            <form class="mt-3">
                                <div class="form-group">
                                    <label>Journal Title</label>
                                    <input type="text" name="" value="Towards better quality compounded drugs - an updated form" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Assign Volume</label>
                                    <select class="form-control">
                                        <option>--Select Volume--</option>
                                        <option>Volume 1</option>
                                        <option>Volume 2</option>
                                        <option>Volume 3</option>
                                        <option>Volume 4</option>
                                        <option>Volume 5</option>
                                        <option>Volume 6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info btn-block">Assign Volume & Approve</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row-->
        </div> <!-- container -->

    </div> <!-- content -->

    <?php
    include "includes/footer.php";
    ?>
    <!-- Long Content Scroll Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Journal: The importance of Malaria drugs in Africa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <embed src="docs/work.pdf" type="application/pdf" width="100%" height="100%"></embed>
            </div>
        </div>
    </div>
</div>