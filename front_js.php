<script src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
-    <script type="text/javascript" src="js/materialize.min.js"></script>
+    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/buttons.html5.min.js"></script>
     <script type="text/javascript" src="js/buttons.print.min.js"></script>
     <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
     <script type="text/javascript" src="js/jszip.min.js"></script>
-    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
     <script type="text/javascript" src="js/tablscript.js"></script>
 
     <!-- Start of HubSpot Embed Code -->
     <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3074142.js"></script>
 
     <script src="js/init.js"></script>
     <script type="text/javascript">
         $(document).ready(function() {
             $(document).ready(function() {
                 $('.select-country select').material_select();
                 $('.select-country select').change(function() {
                     var flag = $('.select-country li.active img').attr('src');
                     console.log(flag);
                     $('.select-country #container img').attr("src", flag);
                     $('.select-country').addClass('activedd');
                 });
             });
         })
     </script>
     <script type="text/javascript">
         $(document).ready(function() {
 
             var arr = ["da", "pa", "traffic", "bounce"];
 
             $(".main_warpper").click(function(e) {
                 arr.forEach(id => {
                     if (e.target.id == ("span_" + id)) {
 
                     } else {
 
                         if ($(document.activeElement)[0].id == id + "1" || $(document
                                 .activeElement)[0].id == id + "2") {
 
                         } else {
                             $("#" + id + "_open").slideUp();
                         }
                     }
                 });
             });
 
             arr.forEach(id => {
 
                 $("#span_" + id).click(function(e) {
                     arr.forEach(id => {
                         if (e.target.id == ("span_" + id)) {
 
 
                             if ($("#" + id + "_open").css("display") == "none") {
                                 $("#" + id + "_open").slideDown();
                             } else {
                                 $("#" + id + "_open").slideUp();
                             }
 
                         } else {
                             // $("#" + id + "_open").css("display", "none");
                             $("#" + id + "_open").slideUp();
                         }
                     });
                 });
 
                 if ($("#" + id).val()) {
                     var da = $("#" + id).val().split("-");
                     $("#" + id + 1).val(da[0]);
                     $("#" + id + 2).val(da[1]);
                 }
             });
         });
 
         $(".validate").keyup((e) => {
             var arr = ["da", "pa", "traffic", "bounce"];
 
             arr.forEach(id => {
 
                 $("#" + id).val($("#" + id + 1).val() + "-" + $("#" + id + 2).val());
 
                 if ($("#" + id).val()) {
                     var a = $("#" + id).val().split("-");
                     if (a[0] == "" || a[1] == "") {
                         $("#" + id).val($("#" + id).val().replace("-", ""));
                     }
                 }
 
             });
 
         });
 
         $("#clear_fl").click((e) => {
             var arr = ["da", "pa", "traffic", "bounce"];
 
             arr.forEach(id => {
 
                 $("#" + id).val("");   
                 $("#" + id+1).val("");   
                 $("#" + id+2).val("");   
                  
             });
 
             submitForm();
 
         });
 
         function asd(id) {
             $("#" + id).val($("#" + id + 1).val() + "-" + $("#" + id + 2).val());
         }
 
         function submitForm() {
             $("#search_form").submit();
         }
 
 
         function submit_feed(val) {
             $.ajax({
                 type: 'post',
                 url: 'report_spam.php',
                 data: $('#spam_form_' + val).serialize(),
                 success: function() {
                     $("#fdiv_" + val).hide(true);
                     $("#tdiv_" + val).show();
                 }
             });
         };
 
         function submit_notification(val) {
             $.ajax({
                 type: 'post',
                 url: 'subscribe.php',
                 data: $('#subs_form').serialize(),
                 success: function() {
                     $("#subs_form").hide(true);
                     $("#message").css("display", "block");
                 }
             });
         };
         
         function closeModel(val) {
             // $('#modal_' + val).close();
             $("#tdiv_" + val).hide();
         }
 
         function openModel(val) {
             var modal = document.getElementById('modal_' + val);
             var jquerymodal = $(modal); //convert to jQuery Element
 
             if ($("#user_info").val()) {
                 console.log("------1--------");
                 $("#fdiv_" + val).show();
                 $("#tdiv_" + val).hide();
                 jquerymodal.openModal();
 
             } else {
                 console.log("------2--------");
                 $('#signuplogin').openModal();
             }
 
         }
 
          function openspam(val) {
             var modal = document.getElementById('modal_' + val);
             var jquerymodal = $(modal); //convert to jQuery Element
 
             if ($("#user_info").val()) {
                 console.log("------1--------");
                 $("#fdiv_" + val).show();
                 $("#tdiv_" + val).hide();
                 jquerymodal.openModal();
 
             } else {
                 console.log("------2--------");
                 $('#spam_model').openModal();
             }
 
         }
     </script>
     <script type="text/javascript">
         (function($) {
             $(function() {
 
                 $('.dropdown-button').dropdown({
                     inDuration: 300,
                     outDuration: 225,
                     hover: true, // Activate on hover
                     belowOrigin: true, // Displays dropdown below the button
                     alignment: 'right' // Displays dropdown with edge aligned to the left of button
                 });
 
             }); // End Document Ready
         })(jQuery); // End of jQuery name space
 
     // $('#apply_fl').on('click', function(){
     // $('.wrap_filter').removeClass('current_fliter');
     // $(this).addClass('current_fliter');
     // });
 
     $( function() {
         $( "#apply_fl" ).click( function() {
           $( ".wrap_filter" ).toggleClass( "current_fliter" );
         });
       });
 
 
     function submit_profile() {
 
         $.ajax({
             type: 'post',
             url: 'pages-profile.php',
             data: $('#profileForm').serialize(),
             success: function() {
                 $("#updatemsg").html("Updated");
                 setTimeout(() => {
                     $("#updatemsg").html("");
                 }, 5000);
             }
         });
     };
 </script>
 <script type="text/javascript">
     function subscribe() {
 
         console.log("cll subscribe");
 
         $("#profileForm").each(function() {
             var input = $(this).find(':input') //<-- Should return all input elements in that specific form.
             console.log("input == ", input);
         });
 
         $.ajax({
             type: 'get',
             url: 'subscribe_user.php',
             success: function(data) {
                 console.log("===>", data);
             }
         });
     };
 
     (function($) {
         $(function() {
 
             $('.dropdown-button').dropdown({
                 inDuration: 300,
                 outDuration: 225,
                 hover: true, // Activate on hover
                 belowOrigin: true, // Displays dropdown below the button
                 alignment: 'right' // Displays dropdown with edge aligned to the left of button
             });
 
         }); // End Document Ready
     })(jQuery); // End of jQuery name space
 </script>