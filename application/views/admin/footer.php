</div>
     </div>
        <!-- END PAGE CONTAINER -->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->   
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url() ?>admin/logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url() ?>assets/admin/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url() ?>assets/admin/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/bootstrap/bootstrap.min.js"></script>   
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/bootstrap/bootstrap-select.js"></script> 
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/isSelect/isSelect.js"></script>      
        <!-- END PLUGINS -->
         <!-- CUSTOM JS FOR AJAX START-->        
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/custom/ajax.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/custom/vehicles.js"></script>
        <!-- CUSTOM JS FOR AJAX END -->
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url() ?>assets/admin/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url() ?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo base_url() ?>assets/admin/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/owl/owl.carousel.min.js"></script>                 
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/demo_tables.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/daterangepicker/daterangepicker.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url() ?>assets/admin/js/plugins/noty/jquery.noty.js'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>assets/admin/js/plugins/noty/layouts/topCenter.js'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>assets/admin/js/plugins/noty/themes/default.js'></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/codemirror/codemirror.js"></script>

        
        <script type='text/javascript' src="<?php echo base_url() ?>assets/admin/js/plugins/codemirror/mode/css/css.js"></script>
        <script type='text/javascript' src="<?php echo base_url() ?>assets/admin/js/plugins/codemirror/mode/javascript/javascript.js"></script>
        <script type='text/javascript' src="<?php echo base_url() ?>assets/admin/js/plugins/codemirror/mode/clike/clike.js"></script>
        <script type='text/javascript' src="<?php echo base_url() ?>assets/admin/js/plugins/codemirror/mode/php/php.js"></script> 
        <script type='text/javascript' src="<?php echo base_url() ?>assets/admin/js/plugins/imageupload/dist/js/fileinput.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins/summernote/summernote.js"></script>

        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <!--<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/settings.js"></script>-->
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/actions.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
        <!-- IMAGE PICKER START -->
        <script src="<?php echo base_url(); ?>assets/admin/image-picker/image-picker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/image-picker/image-picker.js"></script>  
        <!-- IMAGE PICKER END -->
        <script>var b_url = '<?php echo base_url() ?>';</script>   
        <script>            
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement;
                var link = target.src ? target.parentNode : target;
                var options = {index: link, event: event,onclosed: function(){
                        setTimeout(function(){
                            $("body").css("overflow","");
                        },200);                        
                    }};
                var links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>    
        <script type="text/javascript">
            $('#submt').click(function(e) {
                var text = document.getElementsByClassName('note-editable')[0].innerHTML;
                $('#description').html(text);
                document.getElementById("cases_form").submit();

        });
        </script>
      
    <!-- END SCRIPTS --> 

            <!--ALERT MESSAGE START-->
            <?php 
                if($this->session->flashdata('error')){ ?>
                    ?>               
                    <script>
                        var n = noty({text: '<?php echo $this->session->flashdata('error'); ?>', layout: 'topCenter', type: 'error'});
                            n.setTimeout(3000);
                    </script>
                <?php 
            }?>
            <!--ALERT MESSAGE END-->


            <!-- SUCCESS MESSAGE START -->
            <?php 
            if($this->session->flashdata('success')){ ?>
       
            <script>
                 var n= noty({text: '<?php echo $this->session->flashdata('success'); ?>', layout: 'topCenter', type: 'success'});
                 n.setTimeout(  3000);
            </script>
            <?php 
            }
            ?>
        <!--SUCCESS MESSAGE END-->

        <!--CODEMIRROR FOR ANALYTICS CODE START-->
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "application/x-httpd-php",
                indentUnit: 4,
                indentWithTabs: true,
                enterMode: "keep",
                tabMode: "shift"                                                
            });
            editor.setSize('100%','420px');
        </script> 
        <!--CODEMIRROR FOR ANALYTICS CODE END-->   
        
    </body>
</html>






