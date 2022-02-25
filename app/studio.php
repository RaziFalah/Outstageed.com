<?php
include "connection.php";
include "../apis/auth_api.php";
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../main.css">

</head>



<?php
echo'
<body style="overflow: scroll;overflow-x: hidden;">
  <div class="wrapper">
    <form class="form" action="../apis/post_api.php" method="post" enctype="multipart/form-data">
      <div class="pageTitle title">Hushh, someone is telling truth!</div>
      <div  class="secondaryTitle title">Pick a title and design your mindset.</div>';
      ?>
      <input type="text" class="name formEntry" name="title"  placeholder="Title" pattern="[^'\x22]+" require/>
      <input type="text" class="name formEntry" name="Description"  placeholder="Description" pattern="[^'\x22]+" require/>
      <input type="file" class="name formEntry" name="photo" id="fileToUpload">
      <?php
      echo'
      <select style="color:black" class="option formEntry" name="option" require>
      <option name="option" value="General-Science">General-Science</option>
      <option name="option" value="Space-Science">Space-Science</option>
      <option name="option" value="Science-Fiction">Science-Fiction</option>
      <option name="option" value="Life-Env">Life-Env</option>
      <option name="option" value="Religion">Religion</option>
    </select>';
      ?>
  <div id="editor">
    <h3 style="color:red;">Important: Customize the way your page look from scratch you can use <a style="color:#00FFFF" target="_blank" href="../help/page-designing">html and css</a></h3>
      <textarea id="edit" name="content" style="margin-top: 30px;"  placeholder="You awesome thoghuts goes here!" require>
      </textarea>
  </div>
  <script>
    const input = document.querySelector('input[name="title"]');

    input.addEventListener('invalid', function (event) {
      if (event.target.validity.patternMismatch) {
        event.target.setCustomValidity("Sorry for that, but title can't have quotes(').");
      }
    })

    input.addEventListener('change', function (event) {
      event.target.setCustomValidity('');
    })
  </script>
      <?php
      echo'
      <input type="submit" class="submit formEntry" name="submit">continue</input>
    </form>
  </div>
  <script src="app.js"></script>
</body>';



?>

</html>
<style>
    body {
        background-image: url("../images/1.png");
}

#title-Tag-Line {
  font-size: 20px;
}
/* .card-item__bg{
  width: 150px;
  margin-left: auto;
  margin-right: auto;
  left: 0;
  right: 0;
  display: block;
  position: relative;
  margin: 30px auto;
  transform: translate(0px, 50px);
  z-index: 5;
} */

/* form animation starts */
.form {
  background: black;
  box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  border-radius: 5px;
  max-width: 980px;
  margin-left: auto;
  margin-right: auto;
  padding-top: 5px;
  padding-bottom: 5px;
  left: 0;
  right: 0;
  position: absolute;
  border-top: 5px solid #0e3721;
/*   z-index: 1; */
  animation: bounce 1.5s infinite;
}
::-webkit-input-placeholder {
  font-size: 1.3em;
}

.title{
  display: black;
  font-family: sans-serif;
  margin: 10px auto 5px;
  width: 300px;
}
.termsConditions{
  margin: 0 auto 5px 80px;
}

.pageTitle{
  font-size: 2em;
  font-weight: bold;
  color: white;
}
.secondaryTitle{
  color: grey;
}

.name {
  background-color: white;
  color: black;
}
.name:hover {
  border-bottom: 5px solid #0e3721;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.option {
  background-color: white;
  color: white;
}
.option:hover {
  border-bottom: 5px solid #0e3721;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.email {
  background-color: #ebebeb;
  height: 2em;
}

.email:hover {
  border-bottom: 5px solid #0e3721;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.message {
  background-color: #ebebeb;
  overflow: hidden;
  height: 10rem;
}

.message:hover {
  border-bottom: 5px solid #0e3721;
  height: 12em;
  width: 380px;
  transition: ease 0.5s;
}

.formEntry {
  display: block;
  margin: 30px auto;
  min-width: 300px;
  padding: 10px;
  border-radius: 2px;
  border: none;
  transition: all 0.5s ease 0s;
}

.submit {
  width: 200px;
  color: white;
  background-color: #0e3721;
  font-size: 20px;
}

.submit:hover {
  box-shadow: 15px 15px 15px 5px rgba(78, 72, 77, 0.219);
  transform: translateY(-3px);
  width: 300px;
  border-top: 5px solid #0e3750;
  border-radius: 0%;
}

@keyframes bounce {
  0% {
    tranform: translate(0, 4px);
  }
  50% {
    transform: translate(0, 8px);
  }
} 


</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../source/text-editor/css/froala_editor.css">
  <link rel="stylesheet" href="../source/text-editor/css/froala_style.css">
  <link rel="stylesheet" href="../source/text-editor/css/plugins/code_view.css">
  <link rel="stylesheet" href="../source/text-editor/css/plugins/image_manager.css">
  <link rel="stylesheet" href="../source/text-editor/css/plugins/image.css">
  <link rel="stylesheet" href="../source/text-editor/css/plugins/table.css">
  <link rel="stylesheet" href="../source/text-editor/css/plugins/video.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">


  <style>
    body {
      text-align: center;
    }

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>


  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../source/text-editor/js/plugins/entities.min.js"></script>
  <script>
    (function () {
      const editorInstance = new FroalaEditor('#edit', {
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        events: {
          initialized: function () {
            const editor = this
            this.el.closest('form class="form" action="../apis/post_api.php" method="post"').addEventListener('submit', function (e) {
              console.log(editor.$oel.val())
              e.preventDefault()
            })
          }
        }
      })
    })()
  </script>
