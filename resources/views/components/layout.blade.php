<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imBlogger</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    {{$slot}}

    <!-- custom js file link  -->
    <script src="/js/index.js"></script>
    <!-- jquery link  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
    $(function () {
        $(".select-tags").select2({
            placeholder: "Enter tags",
            tags: true,
            tokenSeparators: [',']
        });
    });
    $(function(){
        $('#upload').change(function(){
          var input = this;
          var url = $(this).val();
          var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
          if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
           {
              var reader = new FileReader();

              reader.onload = function (e) {
                 $('#img').attr('src', e.target.result);
              }
             reader.readAsDataURL(input.files[0]);
          }
          else
          {
            $('#img').attr('src', '/assets/no_preview.png');
          }
        });
    });
    </script>
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- ckeditor js link  -->
    <script src="/ckeditor/ckeditor.js"></script>
		<script>ClassicEditor
				.create( document.querySelector( '.editor' ), {
					licenseKey: '',
				} )
				.then( editor => {
					window.editor = editor;
				} )
				.catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: yri1u5ivu6tj-4jhto8qlg224' );
					console.error( error );
				} );
		</script>
</body>
</html>
