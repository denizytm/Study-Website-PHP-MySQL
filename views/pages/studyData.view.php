<?php 

$headData = partialsHead("studyDataHead.php");
$bodyData = partialsBody("studyDataBody.php");

$htmlInductionData = "<div class='w3-row w3-white'>
    
<div class='w3-col l10 m12' id='main'>

<h1>HTML <span class='color_h1'>Introduction</span></h1>
<div class='w3-clear nextprev' style='display: flex; justify-content : center; gap : 25px'>
<a class='w3-left w3-btn' href='default.asp'>❮ Previous</a>
<a class='w3-right w3-btn' href='html_editors.asp'>Next ❯</a>
</div>
<hr>
<p class='intro'>HTML is the standard markup language for creating Web pages.</p>
<hr>

<h2>What is HTML?</h2>
<ul>
<li>HTML stands for Hyper Text Markup Language</li>
<li>HTML is the standard markup language for creating Web pages</li>
<li>HTML describes the structure of a Web page</li>
<li>HTML consists of a series of elements</li>
<li>HTML elements tell the browser how to display the content</li>
<li>HTML elements label pieces of content such as 'this is a heading', 'this 
is a paragraph', 'this is a link', etc.</li>
</ul>
<hr>

<h2>A Simple HTML Document</h2>
<div class='w3-example'>
<h3>Example</h3>
<div class='w3-code notranslate htmlHigh'>
<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>!DOCTYPE<span class='attributecolor' style='color:red'> html</span><span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br>
<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>html<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br><span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>head<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br><span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>title<span class='tagcolor' style='color:mediumblue'>&gt;</span></span>Page Title<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>/title<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br>
<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>/head<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br>
<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>body<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br><br><span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>h1<span class='tagcolor' style='color:mediumblue'>&gt;</span></span>My First Heading<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>/h1<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br><span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>p<span class='tagcolor' style='color:mediumblue'>&gt;</span></span>My first paragraph.<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>/p<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br><br>
<span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>/body<span class='tagcolor' style='color:mediumblue'>&gt;</span></span><br><span class='tagnamecolor' style='color:brown'><span class='tagcolor' style='color:mediumblue'>&lt;</span>/html<span class='tagcolor' style='color:mediumblue'>&gt;</span></span>
</div>
<a target='_blank' href='tryit.asp?filename=tryhtml_intro' class='w3-btn w3-margin-bottom'>Try it Yourself »</a>
</div>
<h3>Example Explained</h3>
<ul>
<li>The <code class='w3-codespan'>&lt;!DOCTYPE html&gt;</code> declaration defines 
that this document is an HTML5 document</li>
<li>The <code class='w3-codespan'>&lt;html&gt;</code> element is the root element of an HTML 
page</li>
<li>The <code class='w3-codespan'>&lt;head&gt;</code> element contains meta information about the 
HTML page</li>
<li>The <code class='w3-codespan'>&lt;title&gt;</code> element specifies a title for the 
HTML page (which is shown in the browser's title bar or in the page's tab)</li>
<li>The <code class='w3-codespan'>&lt;body&gt;</code> element defines the 
document's body, and is a container for all the visible contents, such as 
headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
<li>The <code class='w3-codespan'>&lt;h1&gt;</code> element defines a large heading</li>
<li>The <code class='w3-codespan'>&lt;p&gt;</code> element defines a paragraph</li>
</ul>
<hr>

<h2>What is an HTML Element?</h2>
<p>An HTML element is defined by a start tag, some content, and an end tag:</p>
<div style='font-size:20px;padding:10px;margin-bottom:10px;'>
<span class='spes_tagname'>
<span class='spes_tag'>&lt;</span>tagname<span class='spes_tag'>&gt;</span></span>
Content goes here...
<span class='spes_tagname'>
<span class='spes_tag'>&lt;</span>/tagname<span class='spes_tag'>&gt;</span></span>
</div>

<p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>

<div style='font-size:20px;padding:10px;margin-bottom:10px;'>
<span class='spes_tagname'><span class='spes_tag'>&lt;<span class='spes_tagname'>h1</span>&gt;</span></span>My 
First Heading<span class='spes_tagname'><span class='spes_tag'>&lt;</span>/h1<span class='spes_tag'>&gt;</span></span>
</div>

<div style='font-size:20px;padding:10px;margin-bottom:10px;'>
<span class='spes_tagname'><span class='spes_tag'>&lt;</span>p<span class='spes_tag'>&gt;</span></span>My first paragraph.<span class='spes_tagname'><span class='spes_tag'>&lt;</span>/p<span class='spes_tag'>&gt;</span></span>
</div>

<table class='ws-table-all notranslate'>
<tbody><tr>
<th>Start tag</th>
<th>Element content</th>
<th>End tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;/h1&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td><em>none</em></td>
<td><em>none</em></td>
</tr>
</tbody></table>

<div class='w3-panel w3-note'>
<p><strong>Note:</strong> Some HTML elements have no content (like the &lt;br&gt; 
element). These elements are called empty elements. Empty elements do not have an end tag!</p>
</div>
<hr>

<hr>
<h2>Web Browsers</h2>
<p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them 
correctly.</p>
<p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
<p><img alt='View in Browser' style='height: 250px; width : auto; border-radius : 0' src='./views/assets/img_chrome.png' class='w3-image'></p>
<hr>

<h2>HTML Page Structure</h2>
<p>Below is a visualization of an HTML page structure:</p>
<div class='ws-grey' style='width:99%;border:1px solid grey;padding:3px;margin:0;'>&lt;html&gt;
<div style='width:90%;border:1px solid grey;padding:3px;margin:20px'>&lt;head&gt;
<div style='width:90%;border:1px solid grey;padding:5px;margin:20px'>&lt;title&gt;Page title&lt;/title&gt;
</div>
&lt;/head&gt;
</div>
<div class='ws-grey' style='width:90%;border:1px solid grey;padding:3px;margin:20px;'>&lt;body&gt;
<div class='w3-white' style='width:90%;border:1px solid grey;padding:3px;margin:20px;'>
<div style='width:90%;border:1px solid grey;padding:5px;margin:20px'>&lt;h1&gt;This is a heading&lt;/h1&gt;</div>
<div style='width:90%;border:1px solid grey;padding:5px;margin:20px'>&lt;p&gt;This is a paragraph.&lt;/p&gt;</div>
<div style='width:90%;border:1px solid grey;padding:5px;margin:20px'>&lt;p&gt;This is another paragraph.&lt;/p&gt;</div>
</div>
&lt;/body&gt;
</div>
&lt;/html&gt;
</div>
<div class='w3-panel w3-note'>
<p><strong>Note:</strong> The content inside the &lt;body&gt; section 
will be displayed in a browser. The content inside the &lt;title&gt; element will be 
shown in the browser's title bar or in the page's tab.</p>
</div>
<hr>

<h2>HTML History</h2>
<p>Since the early days of the World Wide Web, there have been many versions of HTML:</p>
<table class='ws-table-all notranslate'>
<tbody><tr>
<th>Year</th>
<th>Version</th>
</tr>
<tr>
<td>1989</td>
<td>Tim Berners-Lee invented www</td>
</tr>
<tr>
<td>1991</td>
<td>Tim Berners-Lee invented HTML</td>
</tr>
<tr>
<td>1993</td>
<td>Dave Raggett drafted HTML+</td>
</tr>
<tr>
<td>1995</td>
<td>HTML Working Group defined HTML 2.0</td>
</tr>
<tr>
<td>1997</td>
<td>W3C Recommendation: HTML 3.2</td>
</tr>
<tr>
<td>1999</td>
<td>W3C Recommendation: HTML 4.01</td>
</tr>
<tr>
<td>2000</td>
<td>W3C Recommendation: XHTML 1.0</td>
</tr>
<tr>
<td>2008</td>
<td>WHATWG HTML5 First Public Draft</td>
</tr>
<tr>
<td>2012</td>
<td><a href='http://whatwg.org/html/' target='_blank'>WHATWG HTML5 Living Standard</a></td>
</tr>
<tr>
<td>2014</td>
<td><a href='http://www.w3.org/TR/html5/' target='_blank'>W3C Recommendation: HTML5</a></td>
</tr>
<tr>
<td>2016</td>
<td>W3C Candidate Recommendation: HTML 5.1</td>
</tr>
<tr>
<td>2017</td>
<td><a href='http://www.w3.org/TR/html51/' target='_blank'>W3C Recommendation: HTML5.1 2nd Edition</a></td>
</tr>
<tr>
<td>2017</td>
<td><a href='http://www.w3.org/TR/html52/' target='_blank'>W3C Recommendation: HTML5.2</a></td>
</tr>
</tbody></table>

<div class='w3-panel w3-note'>
<p>This tutorial follows the latest HTML5 standard.</p>
</div>

<hr>

<br>
<hr>

<div class='w3-clear nextprev' style='display: flex; justify-content : center; gap : 25px'>
<a class='w3-left w3-btn' href='default.asp'>❮ Previous</a>
<a class='w3-right w3-btn' href='html_editors.asp'>Next ❯</a>
</div>

</div>

</div>";

$pagesTitleData = [
    "HTML Home",
    "HTML Introduction",
    "HTML Editors",
    "HTML Basic",
    "HTML Elements",
    "HTML Attributes",
];

require globalPartials("head.php");
require globalPartials("body.php");