<?php include_once 'header.php' ?>
<?php include_once 'navbar.php' ?>
<?php include_once 'menu.php' ?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Articles</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--    Hover Rows  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Hover Rows
                        <div class="pull-right">
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle btn-xs" type="button"
                                        id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <span class="glyphicon glyphicon-cog"></span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="#"
                                           data-toggle="modal"
                                           data-target="#newArticleModal">New Article</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php include_once 'newArticle.php' ?>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Hover Rows  -->
            </div>
        </div>
    </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<?php include_once 'footer.php' ?>
