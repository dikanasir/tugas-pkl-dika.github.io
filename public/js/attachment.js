(function() {
    addEventListener("trix-attachment-add", function(event) {
      if (event.attachment.file) {
        uploadFileAttachment(event.attachment)
      }
    })})
