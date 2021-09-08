<?php $this->view('header', $data); ?>

<section id="main-content">
    <section class="wrapper">
        <div style="min-height: 300px;max-height: 1000px;margin: auto;">
            <style type="text/css">
                #user_text{
                    color: #6e93ce;
                }
                p{
                    color: #6e93ce;
                }
            </style>
            <div class="col-md-4 mb" style="background-color: #eee;text-align: center;box-shadow: 0 0 20px #808080;border: solid thin #ddd ">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                    <div class="white-header" style="color: #808080">
                        <h5>MY ACCOUNT</h5>
                    </div>
                    <p><img src="<?= ASSETS . THEME ?>admin/img/ui-zac.jpg" class="img-circle" width="80"></p>
                    <p><b><?= $data['user_data']->name ?></b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p id="user_text" class="small mt">MEMBER SINCE</p>
                            <p><?= date("jS Y",strtotime($data['user_data']->date)) ?></p>
                        </div>
                        <div class="col-md-6">
                            <p id="user_text" class="small mt">TOTAL SPEND</p>
                            <p>$ 47,60</p>
                        </div>
                    </div>
                    <hr style="color: #888;margin: 0">
                    <div class="row">
                        <div class="col-md-6">
                            <p id="user_text" class="small mt" style="cursor: pointer;color: #18b8ea;"><b><i class="fa fa-edit"></i> EDIT</b></p>
                        </div>
                        <div class="col-md-6">
                            <p id="user_text" class="small mt" style="cursor: pointer;color: #e18b57"><b><i class="fa fa-times"></i>DELETE</b></p>
                        </div>
                    </div>
                </div>
            </div><!-- /col-md-4 -->
        </div>
    </section>
</section>
<?php $this->view('footer', $data); ?>
