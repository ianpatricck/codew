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
                <a class="docs-link" onclick="show('.app')"><li>App</li></a>
                <a class="docs-link" onclick="show('.cli')"><li>CLI</li></a>
                <a class="docs-link" onclick="show('.internalf')"><li>Internal functions</li></a>
                <a class="docs-link" onclick="show('.url')"><li>URL</li></a>
                <a class="docs-link" onclick="show('.inputs')"><li>Inputs</li></a>
                <a class="docs-link" onclick="show('.requests')"><li>Requests</li></a>
                <a class="docs-link" onclick="show('.sessions')"><li>Sessions</li></a>
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
                    With this feature, the developer can perform tasks quickly and with better use in the source
                    code, being free to create all his business rules in his own way and define his own standards.
                </div>
            </div>

            <div class="config">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> Config</h2>                
                </div>
            </div>

            <div class="app">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> App</h2>                
                </div>
            </div>

            <div class="cli">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> CLI</h2>                
                </div>
            </div>

            <div class="internalf">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> Internal functions</h2>                
                </div>
            </div>

            <div class="url">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> URL</h2>                
                </div>
            </div>

            <div class="inputs">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> Inputs</h2>                
                </div>
            </div>

            <div class="requests">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> Requests</h2>                
                </div>
            </div>

            <div class="sessions">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> Sessions</h2>                
                </div>
            </div>

            <div class="database">
                <div class="center">
                    <h2 class="title"><i class="title">#</i> Database</h2>                
                </div>
            </div>
        </div>
    </div>

    <script src="<?= assets('js/docs.js'); ?>"></script>
</body>
</html>