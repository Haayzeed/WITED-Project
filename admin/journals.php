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
                        <h4 class="page-title">Journals</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Journal Title</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Font Awesome</td>
                                            <td>font@mail.com</td>
                                            <td>081234567890</td>
                                            <td>The importance of Malaria drugs in Africa</td>
                                            <td>03/06/2020</td>
                                            <td><a href="" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalScrollable">View</a> <a href="" class="btn btn-success">Approve</a> <a href="" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
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