
<?php
    require controllers("navbarController.php");
?>

<div class="not-found-container">
    <div class="inner-container">
        <img class="image" src=" <?php echo publicImage("404.png") ?> " alt="">
        <h1>404 Not Found</h1>
        <a href="/" class="button" >Go Home</a>
    </div>
</div>

<div class="w3-row w3-white">
    
    <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="adngin-main_leaderboard-0" data-google-query-id="CN7hnOOGkoYDFS2dgwcd20gPiw"><div id="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//main_leaderboard_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//main_leaderboard_0" name="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//main_leaderboard_0" title="3rd party ad content" width="970" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" style="border: 0px; vertical-align: bottom;" data-google-container-id="4"></iframe></div></div>
        <!-- adspace leaderboard -->

      </div>

<h1>HTML<span class="color_h1"> Basic Examples</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="html_editors.asp">❮ Previous</a>
<a class="w3-right w3-btn" href="html_elements.asp">Next ❯</a>
</div>
<hr>
<p class="intro">In this chapter we will show some basic HTML examples.</p>
<p class="intro">Don't worry if we use tags you have not learned about yet.</p>
<hr>

<h2>HTML Documents</h2>
<p>All HTML documents must start with a document type declaration: <code class="w3-codespan">&lt;!DOCTYPE html&gt;</code>.</p>
<p>The HTML document itself begins with <code class="w3-codespan">&lt;html&gt;</code> and ends with <code class="w3-codespan">&lt;/html&gt;</code>.</p>
<p>The visible part of the HTML document is between <code class="w3-codespan">&lt;body&gt;</code> and <code class="w3-codespan">&lt;/body&gt;</code>. </p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
<a class="w3-btn w3-margin-bottom" href="tryit.asp?filename=tryhtml_basic_document" target="_blank">Try it Yourself »</a>
</div>
<hr>

<h2>The &lt;!DOCTYPE&gt; Declaration</h2>
<p>The <code class="w3-codespan">&lt;!DOCTYPE&gt;</code> declaration represents the document type, and helps browsers to display web pages correctly.</p>
<p>It must only appear once, at the top of the page (before any HTML tags). </p>
<p>The <code class="w3-codespan">&lt;!DOCTYPE&gt;</code> declaration is not case sensitive.</p>
<p>The <code class="w3-codespan">&lt;!DOCTYPE&gt;</code> declaration for HTML5 is:</p>
<div class="w3-example">
 <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>HTML Headings</h2>
<p>HTML headings are defined with the <code class="w3-codespan">&lt;h1&gt;</code> to <code class="w3-codespan">&lt;h6&gt;</code> tags.</p>
<p><code class="w3-codespan">&lt;h1&gt;</code> defines the most important heading. <code class="w3-codespan">&lt;h6&gt;</code> defines the least important 
heading:&nbsp;</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is heading 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is heading 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is heading 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" href="tryit.asp?filename=tryhtml_basic_headings" class="w3-btn w3-margin-bottom">Try it Yourself »</a>
</div>

<hr>

<hr>

<h2>HTML Paragraphs</h2>
<p>HTML paragraphs are defined with the <code class="w3-codespan">&lt;p&gt;</code> tag:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is another paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" href="tryit.asp?filename=tryhtml_basic_paragraphs" class="w3-btn w3-margin-bottom">Try it Yourself »</a>
</div>
<hr>

<h2>HTML Links</h2>
<p>HTML links are defined with the <code class="w3-codespan">&lt;a&gt;</code> tag:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" href="tryit.asp?filename=tryhtml_basic_link" class="w3-btn w3-margin-bottom">Try it Yourself »</a>
</div>
<p>The link's destination is specified in the <code class="w3-codespan">href</code> attribute.&nbsp;</p>
<p>Attributes are used to provide additional information about HTML elements.</p>
<p>You will learn more about attributes in a later chapter.</p>
<hr>

<h2>HTML Images</h2>
<p>HTML images are defined with the <code class="w3-codespan">&lt;img&gt;</code> tag.</p>
<p>The source file (<code class="w3-codespan">src</code>), alternative text (<code class="w3-codespan">alt</code>), 
<code class="w3-codespan">width</code>, and <code class="w3-codespan">height</code> are provided as attributes:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="w3schools.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="W3Schools.com"</span> width<span class="attributevaluecolor" style="color:mediumblue">="104"</span> height<span class="attributevaluecolor" style="color:mediumblue">="142"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" href="tryit.asp?filename=tryhtml_basic_img" class="w3-btn w3-margin-bottom">Try it Yourself »</a>
</div>
<hr>

<h2>How to View HTML Source</h2>
<p>Have you ever seen a Web page and wondered "Hey! How did they do that?"</p>
<h3>View HTML Source Code:</h3>
<p>Click CTRL + U in an HTML page, or right-click on the page and select "View Page Source". This will open a 
new tab 
containing the HTML source code of the page.</p>
<h3>Inspect an HTML Element:</h3>
<p>Right-click on an element (or a blank area), and choose "Inspect" to see what elements are made up of (you will see both 
the HTML and the CSS). You can also edit the HTML or CSS on-the-fly in the 
Elements or Styles panel that opens.</p>

<hr>
<h2>HTML Exercises</h2>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_html_basic1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div class="exercisewindow">
<h2>Exercise:</h2>
<p>HTML elements are surrounded by a specific type of brackets, which one?</p>
<div class="exerciseprecontainer">
<input name="ex1" maxlength="1" style="width: 20px;">p<input name="ex2" maxlength="1" style="width: 20px;">
This is a paragraph.<input name="ex3" maxlength="1" style="width: 20px;">/p<input name="ex4" maxlength="1" style="width: 20px;">

</div>
<br>
<button type="submit" class="w3-btn w3-margin-bottom">Submit Answer »</button>
<p><a target="_blank" href="exercise.asp?filename=exercise_html_basic1">Start the Exercise</a></p>
</div>
</form>
<hr>


<br>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="html_editors.asp">❮ Previous</a>
<a class="w3-right w3-btn" href="html_elements.asp">Next ❯</a>
</div>
<div id="user-profile-bottom-wrapper" class="user-profile-bottom-wrapper">

  <div class="w3s-pathfinder -teaser user-anonymous">
  <div class="-background-image -variant-t2">&nbsp;</div>

  <div class="-inner-wrapper">
    <div class="-main-section">
      <div class="-inner-wrapper">
        <div class="-title">W3schools Pathfinder</div>

        <div class="-headline">Track your progress - it's free!</div>
      
        <div class="-body">
          <div class="-progress-bar">
            <div class="-slider" style="width: 20%;">&nbsp;</div>    
          </div>
        </div>
      </div>
    </div>

    <div class="-right-side-section">
      <div class="-user-session-btns">
        <a href="https://profile.w3schools.com/log-in?redirect_url=https%3A%2F%2Fpathfinder.w3schools.com&amp;origin=https%3A%2F%2Fwww.w3schools.com%2Fhtml%2Fhtml_basic.asp" class="-login-btn w3-btn bar-item-hover w3-right ws-light-green ga-bottom ga-bottom-login" title="Login to your account" aria-label="Login to your account" target="_top">
          Log in
        </a>

        <a href="https://profile.w3schools.com/sign-up?redirect_url=https%3A%2F%2Fpathfinder.w3schools.com&amp;origin=https%3A%2F%2Fwww.w3schools.com%2Fhtml%2Fhtml_basic.asp" class="-signup-btn w3-button w3-right ws-green ws-hover-green ga-bottom ga-bottom-signup" title="Sign Up to Improve Your Learning Experience" aria-label="Sign Up to Improve Your Learning Experience" target="_top">
          Sign Up
        </a>
      </div>
    </div>
  </div>
</div>

</div>

</div>

<div class="w3-col l2 m12" id="right">

<div class="sidesection">
  <div id="skyscraper">
  
    <div id="adngin-sidebar_top-0" data-google-query-id="CN_hnOOGkoYDFS2dgwcd20gPiw"><div id="sn_ad_label_adngin-sidebar_top-0" class="sn_ad_label" style="color:#000000;font-size:12px;margin:0;text-align:center;">ADVERTISEMENT</div><div id="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//wide_skyscraper_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//wide_skyscraper_0" name="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//wide_skyscraper_0" title="3rd party ad content" width="300" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="5" style="border: 0px; vertical-align: bottom;"></iframe></div></div>
  
  </div>
</div>
  
<style>
.ribbon-vid {
  font-size:12px;
  font-weight:bold;
  padding: 6px 20px;
  left:-20px;
  top:-10px;
  text-align: center;
  color:black;
  border-radius:25px;
}
</style>

<div class="sidesection" style="margin-top:20px;margin-bottom:20px;">
<a id="upperfeatureshowcaselink" class="ga-right ga-top-presummer ga-top-program" href="https://campus.w3schools.com/collections/course-catalog/products/front-end-course" target="_blank">
<picture id="upperfeatureshowcase">
  <source id="upperfeatureshowcase3001" srcset="/images/img_program_up_300.png" media="(max-width: 990px)" style="border-radius: 5px;">
  <source id="upperfeatureshowcase120" srcset="/images/img_program_up_120.png" media="(max-width: 1260px)" style="border-radius: 5px;">
  <source id="upperfeatureshowcase160" srcset="/images/img_program_up_160.png" media="(max-width: 1700px)" style="border-radius: 5px;">
  <img id="upperfeatureshowcase300" src="/images/img_program_up_300.png" alt="Get Certified" style="width:auto;border-radius: 5px;">
</picture>
</a>
</div>

<div class="sidesection">
<h4><a href="/colors/colors_picker.asp">COLOR PICKER</a></h4>
<a href="/colors/colors_picker.asp" class="ga-right">
<img src="/images/colorpicker2000.png" alt="colorpicker" loading="lazy">
</a>
</div>

<div class="sidesection">
  <div class="sharethis">
    <a href="https://www.youtube.com/@w3schools" target="_blank" title="W3Schools on YouTube"><span class="fa fa-youtube fa-2x ga-right w3-hover-text-red"></span></a>
    <a href="https://www.linkedin.com/company/w3schools.com/" target="_blank" title="W3Schools on LinkedIn"><span class="fa fa-linkedin-square fa-2x ga-right"></span></a>
    <a href="https://discord.gg/6Z7UaRbUQM" target="_blank" title="Join the W3schools community on Discord"><span class="fa fa-discord fa-2x ga-right"></span></a> 
    <a href="https://www.facebook.com/w3schoolscom/" target="_blank" title="W3Schools on Facebook"><span class="fa fa-facebook-square fa-2x ga-right"></span></a>
    <a href="https://www.instagram.com/w3schools.com_official/" target="_blank" title="W3Schools on Instagram"><span class="fa fa-instagram fa-2x ga-right"></span></a>
  </div>
</div>



<div id="vidpos" class="sidesection" style="text-align:center;margin-bottom:0;height:0;">
<div id="adngin-outstream-0"></div>
</div>


<div id="stickypos" class="sidesection" style="text-align: center; position: sticky; top: 50px;">
  <div id="stickyadcontainer" style="width: 465.516px; position: fixed; top: 100px;">
    <div style="position:relative;margin:auto;">
      
      <div id="adngin-sidebar_sticky-0-stickypointer" style=""><div id="adngin-sidebar_sticky-0" class="" style="" data-google-query-id="COqXjvKGkoYDFUCugwcdxBwP5w"><div id="sn_ad_label_adngin-sidebar_sticky-0" class="sn_ad_label" style="color:#000000;font-size:12px;margin:0;text-align:center;">ADVERTISEMENT</div><div id="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//sidebar_sticky_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//sidebar_sticky_0" name="google_ads_iframe_/22152718,16833175/sws-hb//w3schools.com//sidebar_sticky_0" title="3rd party ad content" width="300" height="600" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" data-load-complete="true" data-google-container-id="1" style="border: 0px; vertical-align: bottom;"></iframe></div></div></div>
        <script>
        function secondSnigel() {
          if(window.adngin && window.adngin.adnginLoaderReady) {
            if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {
              if (document.getElementById("adngin-mid_content-0")) {
                adngin.queue.push(function(){  adngin.cmd.startAuction([
                  {placement: "adngin-sidebar_sticky-0", adUnit: "sidebar_sticky" },
                  {placement: "adngin-mid_content-0", adUnit: "mid_content" },
                  ]);
                });
              } else {
                adngin.queue.push(function(){  adngin.cmd.startAuction([
                  {placement: "adngin-sidebar_sticky-0", adUnit: "sidebar_sticky" },
                  ]);
                });
              }
            } else {
              if (document.getElementById("adngin-mid_content-0")) {
                adngin.queue.push(function(){  adngin.cmd.startAuction([
                  {placement: "adngin-mid_content-0", adUnit: "mid_content" },
                  ]);
                });
              }
            }
          } else {
            window.addEventListener('adnginLoaderReady', function() {
              if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {
                if (document.getElementById("adngin-mid_content-0")) {
                  adngin.queue.push(function(){  adngin.cmd.startAuction([
                    {placement: "adngin-sidebar_sticky-0", adUnit: "sidebar_sticky" },
                    {placement: "adngin-mid_content-0", adUnit: "mid_content" },
                    ]);
                  });
                } else {
                  adngin.queue.push(function(){  adngin.cmd.startAuction([
                    {placement: "adngin-sidebar_sticky-0", adUnit: "sidebar_sticky" },
                    ]);
                  });
                }
              } else {
                if (document.getElementById("adngin-mid_content-0")) {
                  adngin.queue.push(function(){  adngin.cmd.startAuction([
                    {placement: "adngin-mid_content-0", adUnit: "mid_content" },
                    ]);
                  });
                }
              }
            });
          }
        }
      </script>
      
    </div>
  </div>
</div>

<script>
uic_r_c()
</script>

</div>
</div>

<?php 
    require components("global/footer.php");
?>