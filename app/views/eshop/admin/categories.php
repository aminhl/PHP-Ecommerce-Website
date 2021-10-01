<?php $this->view('admin/header',$data); ?>

<?php $this->view('admin/sidebar',$data); ?>
<style type="text/css">
    .add_new{
        width: 500px;
        height: 300px;
        position: absolute;
        padding: 6px;
        background-color: #eae8e8;
        box-shadow: 0 0 10px #aaa;
    }
    .show{
        display: block;
    }
    .hide{
        display: none;
    }
</style>
<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Product Categories  <button class="btn btn-primary btn-xs" onclick="show_add_new(event)"><i class="fa fa-plus"></i>Add New</button></h4>
                 <!--Add New Category-->
                <div class="add_new hide">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Add New Category</h4>
                    <form class="form-horizontal style-form" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <input id="category" name="category" type="text" class="form-control" autofocus >
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning" style="position: absolute;bottom: 10px;left: 10px" onclick="show_add_new(event)">Close</button>
                        <button type="button" class="btn btn-primary" style="position: absolute;bottom: 10px;right: 10px" onclick="collect_data(event)">Save</button>
                    </form>
                </div>
                <hr>
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Category</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    <th><i class="fa fa-bookmark"></i> Price</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th><i class=" fa fa-edit"></i> Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="basic_table.html#">Company Ltd</a></td>
                    <td class="hidden-phone">Lorem Ipsum dolor</td>
                    <td>12000.00$ </td>
                    <td><span class="label label-info label-mini">Enabled</span></td>
                    <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div><!-- /content-panel -->


        <script type="text/javascript">
            function show_add_new(){
                var show_add_box = document.querySelector(".add_new");
                if(show_add_box.classList.contains("hide")){
                    show_add_box.classList.remove("hide");
                    var category_input = document.querySelector("#category");
                    category_input.focus();
                }else{
                    show_add_box.classList.add("hide");
                }
            }
            function collect_data(e){
                var  category_input = document.querySelector("#category");
                if (category_input.value.trim() == "" || !isNaN(category_input.value.trim())){
                    alert("Please Enter A Valid Category Name");
                }
                send_data(category_input.value.trim());
            }
            function send_data(data){
                var ajax = new XMLHttpRequest();
                var form = new FormData();
                form.append('data',data);
                ajax.addEventListener('readystatechange',function () {
                    if (ajax.readyState === 4 && ajax.status === 200){
                        handle_result(ajax.responseText);
                    }
                });

                ajax.open("POST","<?= ROOT?>ajax",true);
                ajax.send(form);
            }
            function handle_result(result){
                // alert(result);
                show_add_new();
            }
        </script>

<?php $this->view('admin/footer',$data); ?>
