var mainPage;
(function(mainPage) {
    
})

const uploadForm = document.getElementById("uploadForm");
const inpFile = document.getElementById("inpFile");
const progressBarFill = document.querySelector("#progressBar > .progress-bar-fill");
const progressBarText = progressBarFill.querySelector(".progress-bar-text");

uploadForm.addEventListener("submit", uploadFile);

function uploadFile (e) {
    e.preventDefault();
    
    const xhr = new XMLHttpRequest();

    xhr.open("POST", "upload.php");
    xhr.upload.addEventListener("progress", e => {
        console.log(e)
        const percent = e.lengthComputable ? (e.loaded / e.total) * 100 : 0;

        progressBarFill.style.width = percent.toFixed(2) + "%";
        progressBarText.textContent = percent.toFixed(2) + "%";
    });

    xhr.setRequestHeader("Content-Type", "multipart/form-data");
    xhr.send(new FormData(uploadForm));
}