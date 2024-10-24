function previewImages(event) {
    var files = event.target.files;
    var bannersContainer = document.getElementById('banners_container');

    // Clear previous previews
    bannersContainer.innerHTML = '';

    // Loop through selected files and create image previews
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if (file.type.match('image.*')) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.width = 150;
                img.height = 100;

                var imageWrapper = document.createElement('div');
                imageWrapper.className = 'image-wrapper';
                imageWrapper.appendChild(img);

                var deleteIcon = document.createElement('span');
                deleteIcon.className = 'delete-icon';
                deleteIcon.innerText = 'X';
                deleteIcon.onclick = function () {
                    deleteImage(this);
                };

                imageWrapper.appendChild(deleteIcon);
                bannersContainer.appendChild(imageWrapper);
            }
            reader.readAsDataURL(file);
        }
    }
}

function deleteImage(element) {
    var imageWrapper = element.closest('.image-wrapper');
    imageWrapper.remove();
}

// Check for existing images with valid paths and display them
$(document).ready(function () {
    $('.image-wrapper').each(function () {
        var imagePath = $(this).find('img').attr('src');
        if (imagePath && (imagePath.endsWith('.jpg') || imagePath.endsWith('.png') || imagePath.endsWith('.jpeg') || imagePath.endsWith('.gif'))) {
            // Display the image if it has a valid path and extension
            $(this).show();
        } else {
            // Hide the container if the image path is invalid
            $(this).hide();
        }
    });
});
