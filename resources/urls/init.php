<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codeworker</title>
    <link rel="stylesheet" href="resources/css/main.css">
</head>
<body>
    <h1><?php welcome(); ?></h1>
    <div class="content">
        <h2><i>#</i> Description</h2>

        <div class="content-min">
            <h3><i>=></i> URL</h3>
            <div class="info">
                <p>This is how you can work with URL redirects on your pages.</p>
            </div>
            <div class="card">
                <a>&lt;/a href="?redirect"&gt;I will redirect to the page redirect.php&lt;/a&gt;</a>
            </div>
            <div class="info">
                <p>You can change the settings for URLS calls in the <a class="b">url.config.php</a> file located in the settings folder.</p>
            </div>
            <div class="info">
                <h4><i>[</i> app / Config / url.config.php <i>]</i></h4>
            </div>
            <div class="card">
                <a>const INDEX_FOLDER = 'resources/urls/';</a><br>
                <a>const INDEX_VIEW = 'init';</a>
            </div>
            <div class="info">
                <p>The constant <a class="b">INDEX_FOLDER</a> refers to the folder where your URL files will be viewed. 
                The <a class="b">INDEX_VIEW</a> constant refers to the default file or "index", if URLs are not found, 
                it will also serve as your application's home page.</p>
            </div>
            <div class="info">
                <h4><i>[</i> index.php <i>]</i></h4>
            </div>
            <div class="card">

<pre><a>require __DIR__ . '/app.php';

use App\Codew\URL;

$views = URL::call([
    'init' => 'init'
]);

URL::index($views);</a></pre>

            </div>
            <div class="info">
                <p>You can also <a class="b">call</a> more pages in the associative matrix of the call method, 
                in addition to passing parameters to your URL. the array <a class="b">key</a> in the URL refers 
                to the name of the URL passed in, while the <a class="b">value</a> is the 
                name of the file in the URLs folder.</p>
            </div>
        </div>

        <div class="content-min">
            <h3><i>=></i> Database</h3>

            <div class="info">
                <p>The file in which you can configure the settings in your 
                database whether PostgreSQL or MySQL is located at:</p>
            </div>
            <div class="info">
                <h4><i>[</i> app / Config / db.config.php <i>]</i></h4>
            </div>
            <div class="card">
<pre><a>const HOST = 'localhost';
const DB_NAME = 'codeworker';
const USERNAME = 'root';
const PASSWORD = '';</a></pre>
            </div>
            <div class="info">
                <p>In the <a class="b">app.php</a> file located at the root of the project, 
                you can define the database option using the variable <a class="b">$db</a>.</p>
            </div>
            <div class="info">
                <p>To manipulate SQL in your project it is recommended to work on the except.php file 
                which is also located at the root of the project.<br>
                In it is made all the exceptions of form submission and data manipulation that go 
                straight to your database. We will also know some shortcuts that facilitate the typing of 
                queries within the project.</p>
            </div>
            <div class="info">
                <h4><i>[</i> resources / urls / form.php <i>]</i></h4>
            </div>
            <div class="card">
<pre><a>&lt;form action=&quot;&quot; method=&quot;POST&quot;&gt;
    &lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;
    &lt;input type=&quot;submit&quot; value=&quot;Submit&quot; name=&quot;submit&quot;&gt;
&lt;/form&gt;</a></pre>
            </div>
            <div class="info">
                <h4><i>[</i> except.php <i>]</i></h4>
            </div>
            <div class="card">
<pre><a>use App\Codew\Form;

if (isset($_POST['submit'])) {
    global $db;

    $name = Form::text($_POST['name']);

    $db->insert('users', ['id' => 1, 'name' => $name]);
}</a></pre>
            </div>
            <div class="info">
                <p>Above we have an example of insertion of data very simple to be understood 
                in which the verification validates the data type in the 
                variable <a class="b">$text</a> and then we use the <a class="b">insert</a> method of 
                class <a class="b">DB</a> to make the insertion of a name where the id is equal to <a class="b">1</b>.</p>
            </div>
        </div>

    </div>

    <script>
        function typeWriter(element) {
            const textArray = element.innerHTML.split('')
            element.innerHTML = ''
            textArray.forEach((char, i) => {
                setTimeout(() => {
                    element.innerHTML += char
                }, 75 * i)
            });
        }

        const title = document.querySelector('h1')

        typeWriter(title)
    </script>
</body>
</html>