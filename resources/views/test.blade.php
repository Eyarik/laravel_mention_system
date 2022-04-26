<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="nguyenluat">
        <title>Page Title</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset("css/app.css") }}" >
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
        <style>
            textarea {width: 100%}
            .mentiony-container, .mentiony-content{width: 100%!important;}
            .demo-item{ height: 300px;}
            .demo-item .demo, .demo-item .demo > *{ height: 100%; }
            .demo-item .code, .demo-item .code > *{ height: 100%; }
            .demo-item .code, .demo-item .code > pre > code{ padding: 0; background: none }
            .demo-item .code > pre > code{
                width: 999px !important;
                display: block;
            }

        </style>
    </head>
    <body>
        <div class="container">
            
            <div class="row demo-item">
                <form action="{{ route('addcomment') }}" method="POST">
                    @csrf
                    <div class="col-sm-12"><h4>Mention anyone by @name</h4></div>
                    <div class="col-sm-6 demo">
                        <textarea id="t1" name="content" class="content" rows="6" mentioned=[]>Try to @John</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div>
                <form action="{{ route('addteam') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Team Nmae</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="teamName">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>

        </div>




    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=javascript&amp;skin=desert"></script>
    <script src={{ URL::asset("js/jquery.mentiony.js") }}></script>
    <script src={{ URL::asset("js/mention.js") }}> </script>

        </div>
    </body>
</html>