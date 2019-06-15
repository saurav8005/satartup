<script src="../js/jquery.min.js"></script>
     <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
-    <script type="text/javascript" src="../js/materialize.min.js"></script>
+    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
     <script type="text/javascript" src="../js/buttons.html5.min.js"></script>
     <script type="text/javascript" src="../js/buttons.print.min.js"></script>
     <script type="text/javascript" src="../js/dataTables.buttons.min.js"></script>
     <script type="text/javascript" src="../js/jszip.min.js"></script>
-    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->
     <script type="text/javascript" src="../js/tablscript.js"></script>
 
     <!-- Start of HubSpot Embed Code -->
     <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3074142.js"></script>
 
     <!-- profile upfate js -->
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