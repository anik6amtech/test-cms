<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$page->page_title}}</title>

    @action('web_css')
  </head>
  <body>
    @action('web_header')
    <div id="editableContent">
{!! $page->html !!}
    </div>
    @action('web_footer')
  </body>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <!-- Bootstrap core CSS -->
      @action('web_js')
</html>
