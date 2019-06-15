<?php
 include_once 'include/class.user.php';
 $user = new User();
 session_start();
 error_reporting(0);
 if ($_GET['action'] == "logout") {
     $user->user_logout();
     header("location:/");
 }
 
 ?>
  <?php include('route.php'); ?>
  <?php include('header.php'); ?>
         <div class="content_section">
             <div class="search_wrapper">
                 <!-- search-start -->
                 <div class="container">
                     <div class="row">
                         <div class="search_bar">
                             <div class="search_db center-align">
                                 <h2 class="">World's 1st Guest Posting Search Engine</h2>
                                 <form action="search" method="get">
                                     <div class="input-field col">
                                         <input name="q" type="text" class="validate" placeholder="Search from the List of 2056 Blogs that accept Guest Posts">
                                         <input type="submit" name="" value="submit">
                                     </div>
                                 </form>
 
                                 <?php
                                     echo "<a href=''>How it Works</a> &nbsp;&nbsp;&nbsp;&nbsp;";
                                     if ($_SESSION['login'] == 1) {
                                     echo "<a href='http://phpstack-242348-864948.cloudwaysapps.com/webmaster/add-website'>Add Website</a>";
                                     }
                                     else{
                                     echo "<a href='signin'>Add Website</a>";
                                     }
 
                                     ?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             
             <div class="section_guest_postwork pd-top pd-bottom">
                 <!-- Client-Section-start -->
                 <div class="container">
                     <div class="row">
                         <div class="col s12 Head_titale">
                             <h2 class="">How <span>Guest Post Engine</span> Works</h2>
                         </div>
                     </div>
                     <div class="row">
                         <div class="video-wrapper pd-top">
                             <div class="video_frame">
                                 <!-- <a href="#modal1" class="modal-trigger"><img src="images/video-img.jpg" alt=""></a> -->
                               <img src="images/video-img.jpg" alt="">
                             </div>
                   
                         </div>
                     </div>
                 </div>
             </div>
             <div class="section_why_guest_post pd-bottom" id="Features">
                 <!-- why guet post-Section-start -->
                 <div class="container">
                     <div class="row">
                         <div class="col s12 Head_titale">
                             <h2 class="">Why<span> Guest Post Engine</span></h2>
                         </div>
                     </div>
-                    <div class="row">
-                        <div class="guest_potwhy pd-top">
-                            <div class="col s12 m6 l4 featured_cat">
+                  
+                        <div class="guest_potwhy pd-top row">
+                            <div class="col-12 col-sm-6 col-lg-4 featured_cat">
                                 <div class="icon_guest">
                                     <img src="images/Robust-Engine.png" alt="">
                                 </div>
                                 <h4>Robust Engine</h4>
                                 <p>Guest Post Engine will fulfill your quest of finding high-quality websites, as it brings hand-picked quality websites for your SEO campaigns.</p>
                             </div>
-                            <div class="col s12 m6 l4 featured_cat">
+                            <div class="col-12 col-sm-6 col-lg-4 featured_cat">
                                 <div class="icon_guest">
                                     <img src="images/Largest-Database.png" alt="">
                                 </div>
                                 <h4>Largest Database</h4>
                                 <p>One of the largest database that holds around 10,000+ quality websites and it gets updated on a daily basis.</p>
                             </div>
-                            <div class="col s12 m6 l4 featured_cat">
+                            <div class="col-12 col-sm-6 col-lg-4 featured_cat">
                                 <div class="icon_guest">
                                     <img src="images/Updated-Key-Metrics.png" alt="">
                                 </div>
                                 <h4>Updated Key Metrics</h4>
                                 <p>Over Guest Post Engine, websites get regularly updated and so does their metrics. Usually, websites key metrics gets updated once a month.</p>
                             </div>
-                            <div class="col s12 m6 l4 featured_cat">
+                            <div class="col-12 col-sm-6 col-lg-4 featured_cat">
                                 <div class="icon_guest">
                                     <img src="images/Quality-Prospecting.png" alt="">
                                 </div>
                                 <h4>Quality Prospecting</h4>
                                 <p>Websites provided by Guest Post Engine are hand-picked quality websites that provide quality backlinks.</p>
                             </div>
-                            <div class="col s12 m6 l4 featured_cat">
+                            <div class="col-12 col-sm-6 col-lg-4 featured_cat">
                                 <div class="icon_guest">
                                     <img src="images/Save-Time-&-Money.png" alt="">
                                 </div>
                                 <h4>Save Time & Money</h4>
                                 <p>Over Guest Post Engine you will get relevant quality websites within a second. So, it will save your time and eventually saves you money.</p>
                             </div>
-                            <div class="col s12 m6 l4 featured_cat">
+                            <div class="col-12 col-sm-6 col-lg-4 featured_cat">
                                 <div class="icon_guest">
                                     <img src="images/Powerful-Backlinks.png" alt="">
                                 </div>
                                 <p>Using Guest Post Engine, you can get relevant, quality websites and these websites provide you Powerful backlinks</p>
                             </div>
                         </div>
-                    </div>
+                   
                 </div>
             </div>
 
             <div class="section_review" id="Reviews">
                  <div class="container">
                  <div class="row">
-                         <div class="col s12 m12 l12 ">
+                         <div class="col-12 ">
                              <!-- <h2 class="Head_tital">Reviews</h2> -->
                             <div class='embedsocial-reviews' data-ref="d94fdeee2a313220ccdc77eeccaa72ed6bf54919"></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/ri.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialReviewsScript"));</script>
 
                             <h2 class="">Frequently Asked <span>Questions</span></h2>
                         </div>
                     </div> -->
-                   
                     <div class="row">                        
-                       <div class="col s12 m12 l12">
-                         <h2 class="Head_titale">Frequently Asked <span>Questions</span></h2>
-                        <div class="frequently_questions">
-                            <ul class="collapsible">
-                                <li class="">
-                                    <div class="collapsible-header">What is Guest Blogging?</div>
-                                    <div class="collapsible-body" style="display: block;"><span>Guest Blogging or guest posting it is the act of writing content for various companies websites. Generally in guest blogging, usually bloggers write for a similar type of blogs as a guest blogger. The guest bloggers motive behind writing content is to:</span><br><br>
-                                        <span>1. Spread information using their Blogs.</span><br>
-                                        <span>2. Attract visitors on their website.</span><br>
-                                        <span>3. Boost DA by using external links to high-authority domains.</span><br>
-                                        <span>4. Create relationships with peers in their industry.</span><br><br>
-                                        <span>Guest blogging holds mutual benefits for both website and guest blogger. </span>
+                        <div class="col-12">
+                            <h2 class="Head_titale">Frequently Asked <span>Questions</span></h2>
+                            <div class="frequently_questions">
+                                <div id="accordion">
+                                    <div class="card">
+                                        <div class="collapsible-header collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
+                                          What is Guest Blogging?
+                                        </div>
+                                        <div id="collapse1" class="collapse" data-parent="#accordion">
+                                            <div class="collapsible-body">
+                                                <span>Guest Blogging or guest posting it is the act of writing content for various companies websites. Generally in guest blogging, usually bloggers write for a similar type of blogs as a guest blogger. The guest bloggers motive behind writing content is to:</span><br><br>
+                                                <span>1. Spread information using their Blogs.</span><br>
+                                                <span>2. Attract visitors on their website.</span><br>
+                                                <span>3. Boost DA by using external links to high-authority domains.</span><br>
+                                                <span>4. Create relationships with peers in their industry.</span><br><br>
+                                                <span>Guest blogging holds mutual benefits for both website and guest blogger. </span>
+                                            </div>
+                                        </div>
                                     </div>
-                                </li>
-                                <li>
-                                    <div class="collapsible-header">Why you need Guest Blogging?</div>
-                                    <div class="collapsible-body"><span>Guest blogging offers a number of benefits for bloggers and businesses. When you share your expertise on the website of another company, it allows you to build yourself as an authority figure in the market. </span><br><br>
-                                        <span>Also, featuring guest blogs on your own blog can help you to share fresh content with a unique perspective for the audience. It is a great way of keeping the readers busy- not to mention the promotional boost occurs when a blogger shares their posts via a personal network.</span>
+                                    <div class="card">
+                                        <div class="collapsible-header collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
+                                          Why you need Guest Blogging?
+                                        </div>
+                                        <div id="collapse2" class="collapse" data-parent="#accordion">
+                                            <div class="collapsible-body">
+                                                <span>Guest blogging offers a number of benefits for bloggers and businesses. When you share your expertise on the website of another company, it allows you to build yourself as an authority figure in the market. </span><br><br>
+                                                <span>Also, featuring guest blogs on your own blog can help you to share fresh content with a unique perspective for the audience. It is a great way of keeping the readers busy- not to mention the promotional boost occurs when a blogger shares their posts via a personal network.</span>
+                                            </div>
+                                        </div>
                                     </div>
-                                </li>
-                                <li>
-                                    <div class="collapsible-header">How does Guest Post Engine work?</div>
-                                    <div class="collapsible-body"><span>GuestPostEngine database holds various quality websites that accept guest blog.
-                                        </span><br><br>
-                                        <span>So all you need to do is, search your keyword in GuestPostEngine. As a result, you'll get websites (with DA, PA, Traffic, Bounce rate) that suits best to your keyword.</span>
+                                    <div class="card">
+                                        <div class="collapsible-header collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
+                                         How does Guest Post Engine work?
+                                        </div>
+                                        <div id="collapse3" class="collapse" data-parent="#accordion">
+                                            <div class="collapsible-body">
+                                                <span>GuestPostEngine database holds various quality websites that accept guest blog.
+                                                </span><br><br>
+                                                <span>So all you need to do is, search your keyword in GuestPostEngine. As a result, you'll get websites (with DA, PA, Traffic, Bounce rate) that suits best to your keyword.</span>
+                                            </div>
+                                        </div>
                                     </div>
-                                </li>
-                                <li>
-                                    <div class="collapsible-header">Which Category or Niche website do you have?</div>
-                                    <div class="collapsible-body"><span>With Guest Post Engine, you don’t need to worry about category or niche. All you need to do is Search your keyword in the guest post engine and it will provide you websites that matches your keyword.</span></div>
-                                </li>
-                                <li>
-                                    <div class="collapsible-header">How GuestPostEngine is helpful for SEO Campaigns? </div>
-                                    <div class="collapsible-body"><span>With Guest Post Engine, you can get high-quality websites of your niche. Further, the website will help you to get high-quality backlinks for your website.</span><br><br>
-                                        <span>And you'll agree on that finding High-quality website for guest blogging is really time-consuming.</span><br><br>
-                                        <span>So, GuestPostEngine will save you time and provide you quality websites within a seconds.</span>
+                                    <div class="card">
+                                        <div class="collapsible-header collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
+                                         How GuestPostEngine is helpful for SEO Campaigns? 
+                                        </div>
+                                        <div id="collapse4" class="collapse" data-parent="#accordion">
+                                            <div class="collapsible-body">
+                                                <span>With Guest Post Engine, you can get high-quality websites of your niche. Further, the website will help you to get high-quality backlinks for your website.</span><br><br>
+                                                <span>And you'll agree on that finding High-quality website for guest blogging is really time-consuming.</span><br><br>
+                                                <span>So, GuestPostEngine will save you time and provide you quality websites within a seconds.</span>
+                                            </div>
+                                        </div>
                                     </div>
-                                </li>
-                                <li>
-                                    <div class="collapsible-header">Is GuestPostEngine Free to use? </div>
-                                    <div class="collapsible-body"><span>Yes, as for now Guest Post Engine is free to use and you can browse websites over it. Soon, we will come with the paid version.</span></div>
-                                </li>
-                                <li>
-                                    <div class="collapsible-header">How often the Data Metrics of the website is updated? </div>
-                                    <div class="collapsible-body"><span>In the guest post engine, we regularly update the websites and we update websites metrics once a month.</span></div>
-                                </li>
-                            </ul>
-                        </div>
+                                    <div class="card">
+                                            <div class="collapsible-header collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
+                                             Is GuestPostEngine Free to use? 
+                                            </div>
+                                        <div id="collapse5" class="collapse" data-parent="#accordion">
+                                             <div class="collapsible-body"><span>Yes, as for now Guest Post Engine is free to use and you can browse websites over it. Soon, we will come with the paid version.</span></div>
+                                        </div>
+                                    </div>
+                                    <div class="card">
+                                            <div class="collapsible-header collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
+                                             How often the Data Metrics of the website is updated? 
+                                            </div>
+                                        <div id="collapse6" class="collapse" data-parent="#accordion">
+                                               <div class="collapsible-body"><span>In the guest post engine, we regularly update the websites and we update websites metrics once a month.</span></div>
+                                        </div>
+                                    </div>
+                                </div>
+                            </div>
                         </div>
-                       
                     </div>
                 </div>
             </div>
-                <div class="section_pricing">
-                     <div class="container">
-                         <div class="row">
-                            <h2 class="Head_titale">FREE Subscription for Limited Time</h2> 
-                         </div>
-                         <div class="row">
-                              <div class="pricing">
-                                   <div class="col s12 m12 l3 pr_spc pricestart">
-                                        <h2>Startup</h2>
-                                   </div>
-                                   <div class="col s12 m12 l2 pr_spc pricebx">
-                                        <h2>$0.00</h2>
-                                   </div>
-                                   <div class="col s12 m12 l5 pr_spc pricelist-type">
-                                       <ul>
-                                         <li>Search Unlimited Database of Websites</li>
-                                         <li>Access 100 Contact Details every Month</li>
-                                         <li>Deep Level of Website Filtering</li>
-                                         <li>FREE Live Chat & Email Support</li>
-                                       </ul>
-                                   </div>
-                                   <div class="col s12 m12 l2 pr_spc price_button">
-                                        <a href="signup" class="Signup_btn">Signup Now</a>
-                                   </div>
-                              </div>
-                         </div>
-                     </div>
+            <div class="section_pricing">
+                <div class="container">
+                    <h2 class="Head_titale">FREE Subscription for Limited Time</h2> 
+                    <div class="pricing">
+                        <div class="col-12 col-lg-3 pr_spc pricestart">
+                            <h2>Startup</h2>
+                        </div>
+                        <div class="col-12 col-lg-3 pr_spc pricebx">
+                            <h2>$0.00</h2>
+                        </div>
+                        <div class="col-12 col-lg-6 pr_spc pricelist-type">
+                            <div>
+                                <ul>
+                                    <li>Search Unlimited Database of Websites</li>
+                                    <li>Access 100 Contact Details every Month</li>
+                                    <li>Deep Level of Website Filtering</li>
+                                    <li>FREE Live Chat & Email Support</li>
+                                </ul>
+                                <div class="price_button">
+                                    <a href="signup" class="Signup_btn">Signup Now</a>
+                               </div>
+                            </div>
+                        </div>
+                        <!--  <div class="col-12 col-lg-3 pr_spc price_button">
+                            <a href="signup" class="Signup_btn">Signup Now</a>
+                       </div> -->
+                    </div>
                 </div>
+            </div>
             <div class="section_blogging_paybook pd-bottom">
                 <!-- blogging_paybook-Section-start -->
                 <div class="container">
                     <div class="row">
-                        <div class="col s12 m12 l6 blogplaybook">
+                        <div class="col-12 col-lg-6 blogplaybook">
                             <h2 class="">Guest Blogging Playbook</h2>
                             <span>EVERYTHING THAT YOU NEED TO KNOW</span>
                             <p>Guest blogging is one of the well-known marketing techniques in which a blogger writes
                                 <li>Why and How to Promote your Guest Blog.</li>
                             </ul>
                             <a href="https://www.guestpostengine.com/playbook/" class="playbook_btn">
-                                <i class="material-icons dp48">chevron_right</i>
+                                <i class="fa fa-chevron-right"></i>
                                 <span>GO TO PLAYBOOK</span></a>
                         </div>
-                        <div class="col s12 m6 hide-on-med-and-down playbook">
+                        <div class="col-12 col-lg-6 hide-on-med-and-down playbook">
                             <img src="images/Blogging-Playbook.png" alt="">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- footer-start -->
     <?php include('footer.php'); ?>
     <?php include('front_js.php'); ?>
 
     </div>
 </body>
 
 </html>