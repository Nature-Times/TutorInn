function triggerFileInput() {
    // Trigger the click event on the hidden file input
    document.getElementById('fileInput').click();
}

function updateFileName() {
    // Get the file name from the file input
    const fileInput = document.getElementById('fileInput');
    const fileName = fileInput.files[0] ? fileInput.files[0].name : 'No file selected';

    // Display the file name
    document.getElementById('fileName').textContent = fileName;
}