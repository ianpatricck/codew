<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docs | Codew</title>
    <link rel="stylesheet" href="<?= assets('css/style.css'); ?>">
</head>
<body>

<div class="content">
<div class="right-side">
<ul>
<a class="docs-link" onclick="show('.introduction')"><li>Introduction</li></a>
<a class="docs-link" onclick="show('.config')"><li>Config</li></a>
<a class="docs-link" onclick="show('.cli')"><li>CLI</li></a>
<a class="docs-link" onclick="show('.internalf')"><li>Internal functions</li></a>
<a class="docs-link" onclick="show('.url')"><li>URL</li></a>
<a class="docs-link" onclick="show('.inputs')"><li>Inputs</li></a>
<a class="docs-link" onclick="show('.requests')"><li>Requests</li></a>
<a class="docs-link" onclick="show('.database')"><li>Database</li></a>
</ul>
</div>

<div class="center">

<div class="introduction">
<div class="center">
<h2 class="title"><i class="title">#</i> Knowing the Codew</h2>                
</div>
                
<div class="card bg-blue">
Codew is a project in constant development to help organize and write code.
</div>

<div class="description" style="margin-top: 30px; margin-bottom: 20px;">
This is a project created by me to supply my time in language development with clean and light code, feel 
free to report errors in the application and errors in code writing.
</div>

<div class="description">
With this feature, the developer can perform tasks quickly and with better use at the source
code, being free to create all your business rules your way and set your own standards.
</div>

</div>

<div class="config">
<div class="center">
<h2 class="title"><i class="title">#</i> Config</h2>                
</div>

<div class="description" style="margin-top: 30px; margin-bottom: 20px;">
The configuration file for the constants can be found in <b>config/define.php</b>, 
where you can make changes to the database and application settings in general.
</div>

<div class="card bg-light" style="margin-top: 10%;">
<pre>
<a class="tag">&lt;?php</a>

<a class="comment">// => PHP config</a>

<a class="function">define</a>(<a class="string">'PORT'</a>, <a class="tag">80</a>);

<a class="function">define</a>(<a class="string">'INDEX_PAGE'</a>, <a class="string">'home'</a>);

<a class="comment">// => Database config</a>

<a class="function">define</a>(<a class="string">'HOST'</a>, <a class="string">'127.0.0.1'</a>);
<a class="function">define</a>(<a class="string">'DB_NAME'</a>, <a class="string">'codew'</a>);
<a class="function">define</a>(<a class="string">'USERNAME'</a>, <a class="string">'root'</a>);
<a class="function">define</a>(<a class="string">'PASSWORD'</a>, <a class="string">''</a>);
</pre>
</div>
</div>

<div class="cli">

<div class="center">
<h2 class="title"><i class="title">#</i> Command Line</h2>           
</div>

<div class="description" style="margin-top: 5%;">
There are parameters to be passed on the command line to speed up development, 
from running the server to creating a controller. For the execution of this resource 
we can use the <b>run</b> file as a path, located at the root of the project.
</div>

<div class="card" style="margin-top: 5%;"><b>php run [command]</b></div>

<div class="description" style="margin-top: 5%;">
Here is a list of useful commands:
</div>

<hr style="margin: 2%;">

<div class="description" style="margin: 1%;">
<b>php run server</b> 
<a class="fright">to start the server</a>
</div>

<div class="description" style="margin: 1%;">
<b>php run create:controller [controller name]</b>
<a class="fright">to create a controller</a>
</div>

</div>

</div>
</div>

<script src="<?= assets('js/docs.js'); ?>"></script>
</body>
</html>