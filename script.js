console.log("Hello there!!!");
let upForm = document.getElementById("uploadForm");
let inpFile = document.getElementById("inp");
let progBarFill = document.querySelector("#progressBar > .bar-fill");

let progBarText = progBarFill.querySelector(".bar-text");
console.log (progBarText);
console.log (upForm);
upForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const xhr = new XMLHttpRequest();
    xhr.open("POST" , "upload.php");
    xhr.upload.addEventListener("progress" , e => {
        console.log(e); 
        if(e.lengthComputable)
        console.log((e.loaded/e.total)*100);
        let percent= (e.loaded/e.total)*100;
        progBarFill.style.width = percent.toFixed(2) + "%"; 
        progBarText.textContent = percent.toFixed(2) + "%"; 
    });
    xhr.setRequestHeader("Content-type" , "multipart/form-data");
    xhr.send(new FormData(uploadForm));    
}); 