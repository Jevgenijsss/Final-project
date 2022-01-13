let galleryImages = document.querySelectorAll(".gallery-img");


if (galleryImages) {
    galleryImages.forEach(function(image, index) {
        image.onclick = function() {

            /*pop up window for full image */
            let getElementCss = window.getComputedStyle(image);
            let getFullImgUrl = getElementCss.getPropertyValue("background-image");
            let getImgUrlPos = getFullImgUrl.split("/img/thumbs/");
            let setNewImgUrl = getImgUrlPos[1].replace('")', '');

            /*opens full image */

            let container = document.body;
            let newImgWindow = document.createElement("div");
            container.appendChild(newImgWindow);
            newImgWindow.setAttribute("class","img-window");
            newImgWindow.setAttribute("onclick","closeImg()");
            /*changes url to a new image */

            let newImg = document.createElement("img");
            newImgWindow.appendChild(newImg);
            newImg.setAttribute("src","img/" + setNewImgUrl);
            newImg.setAttribute("id","current-image");
        }
    });
}
            /*closes image */

function closeImg(){
    document.querySelector(".img-window").remove();
   
    
}

