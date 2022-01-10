$(document).ready(function()
{
  
});



tinymce.init({
    selector: '#mytextarea',
    images_upload_handler: image_upload_handler,
    plugins:  [
              'image table',
              ' code fullscreen',
              // 'table emoticons'
            ],
    toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
             'image link code | fullscreen | ' +
             'forecolor',
    // width: 600,
    menubar: 'insert format tools',
    height: 500,
});

tinymce.init({
  selector: '#mytextarea_1',
  images_upload_handler: image_upload_handler,
  plugins:  [
            'image table',
            ' code fullscreen',
            // 'table emoticons'
          ],
  toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
           'image link code | fullscreen | ' +
           'forecolor',
  // width: 600,
  menubar: 'insert format tools',
  height: 500,
});

function image_upload_handler (blobInfo, success, failure, progress) {
    var xhr, formData;
  
    xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', 'postAcceptor.php');
  
    xhr.upload.onprogress = function (e) {
      progress(e.loaded / e.total * 100);
    };
  
    xhr.onload = function() {
      var json;
  
      if (xhr.status === 403) {
        failure('HTTP Error: ' + xhr.status, { remove: true });
        return;
      }
  
      if (xhr.status < 200 || xhr.status >= 300) {
        failure('HTTP Error: ' + xhr.status);
        return;
      }
  
      json = JSON.parse(xhr.responseText);
  
      if (!json || typeof json.location != 'string') {
        failure('Invalid JSON: ' + xhr.responseText);
        return;
      }
  
      success(json.location);
    };
  
    xhr.onerror = function () {
      failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
    };
  
    formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());
  
    xhr.send(formData);
  };
  
