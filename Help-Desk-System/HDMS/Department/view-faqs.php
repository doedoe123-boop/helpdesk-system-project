<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Help Desk | Dashboard</title>
<head>
<?php include ('core/css-links.php');//css connection?>
</head>

<body>
<?php include ('core/header.php');//Design for  Header?>
<?php $page = 'dashboard';include ('core/sidebar.php');//Design for sidebar?>


<main id="main" class="main">


<div class="container" style="margin-top: 30px;">

        <div id="tableManager" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">F.A.Q.S Program</h2>
                    </div>

                    <div class="modal-body">
                        <div id="editContent">
                            <input type="text" class="form-control" placeholder="Enter title" id="title"><br>
                            <textarea class="form-control" id="shortDesc" placeholder="Enter Department"></textarea><br>
                            <textarea class="form-control" id="longDesc" placeholder="Enter Description"></textarea><br>
                            <input type="hidden" id="editRowID" value="0">
                        </div>

                        <div id="showContent" style="display:none;">
                            <h3>Department</h3>
                            <div id="shortDescView"></div>
                            <hr>
                            <h3>Description</h3>
                            <div id="longDescView" style="overflow-y: scroll; height: 250px;"></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        <input type="button" id="manageBtn" onclick="manageData('addNew')" value="Save" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Department Record of Faqs</h2>

                <input style="float: right" type="button" class="btn btn-success" id="addNew" value="Add New">
                <br><br>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#addNew").on('click', function () {
               $("#tableManager").modal('show');
            });

            $("#tableManager").on('hidden.bs.modal', function () {
               $("#showContent").fadeOut();
               $("#editContent").fadeIn();
               $("#editRowID").val(0);
               $("#longDesc").val("");
               $("#shortDesc").val("");
               $("#title").val("");
               $("#closeBtn").fadeOut();
               $("#manageBtn").attr('value', 'Add New').attr('onclick', "manageData('addNew')").fadeIn();
            });

            getExistingData(0, 50);
        });

        function deleteRow(rowID) {
            if (confirm('Are you sure you want to delete this?')) {
                $.ajax({
                    url: 'faqs_delete.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: 'deleteRow',
                        rowID: rowID
                    },  success:function(response) {
                        $("#faqs_"+rowID).parent().remove();
                        alert(response);
                    }
                });
            }
        }

        function viewORedit(rowID, type) {
            $.ajax({
                url: 'dept-action.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    key: 'getRowData',
                    rowID: rowID
                }, success: function (response) {
                    if (type == "view") {
                        $("#showContent").fadeIn();
                        $("#editContent").fadeOut();
                        $("#longDescView").html(response.longDesc);
                        $("#shortDescView").html(response.shortDesc);
                        $("#manageBtn").fadeOut();
                        $("#closeBtn").fadeIn();
                    } else {
                        $("#editContent").fadeIn();
                        $("#editRowID").val(rowID);
                        $("#showContent").fadeOut();
                        $("#longDesc").val(response.longDesc);
                        $("#shortDesc").val(response.shortDesc);
                        $("#title").val(response.title);
                        $("#closeBtn").fadeOut();
                        $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('updateRow')");
                    }

                 
                    $("#tableManager").modal('show');
                }
            });
        }

        function getExistingData(start, limit) {
            $.ajax({
                url: 'dept-action.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingData',
                    start: start,
                    limit: limit
                }, success: function (response) {
                    if (response != "reachedMax") {
                        $('tbody').append(response);
                        start += limit;
                        getExistingData(start, limit);
                    } else
                        $(".table").DataTable();
                }
            });
        }

        function manageData(key) {
            var title = $("#title");
            var shortDesc = $("#shortDesc");
            var longDesc = $("#longDesc");
            var editRowID = $("#editRowID");

            if (isNotEmpty(title) && isNotEmpty(shortDesc) && isNotEmpty(longDesc)) {
                $.ajax({
                   url: 'faqs_add.php',
                   method: 'POST',
                   dataType: 'text',
                   data: {
                       key: key,
                       title: title.val(),
                       shortDesc: shortDesc.val(),
                       longDesc: longDesc.val(),
                       rowID: editRowID.val()
                   }, success: function (response) {
                       if (response != "success")
                           alert(response);
                       
                
                       else {
                           $("#faqs_"+editRowID.val()).html(title.val());
                           title.val('');
                           shortDesc.val('');
                           longDesc.val('');
                           $("#tableManager").modal('hide');
                           $("#manageBtn").attr('value', 'Add').attr('onclick', "manageData('addNew')");
                       }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == '') {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</main>

  <!-- ======= Footer ======= -->
  <?php include ('core/footer.php');//css connection?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files/ Template main js file -->
  


 
    </body>
</html>