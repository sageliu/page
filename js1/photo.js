var photoSrc=["images1/a0.jpg","images1/a1.jpg","images1/a2.jpg","images1/a3.jpg","images1/a4.jpg","images1/a5.jpg","images1/a6.jpg","images1/a7.jpg","images1/a8.jpg","images1/a9.jpg","images1/a10.jpg","images1/a11.jpg","images1/a12.jpg","images1/a13.jpg","images1/a14.jpg","images1/a15.jpg","images1/a16.jpg","images1/a17.jpg","images1/a18.jpg","images1/a19.jpg","images1/a20.jpg","images1/a21.jpg","images1/a22.jpg"];
var photoH=[];


var fragment=document.createDocumentFragment();
for(var i=0;i<photoSrc.length;i++){
    var photo=document.createElement("img");
    photo.src=photoSrc[i];
    fragment.appendChild(photo);
}
var photoBox=document.getElementById("photoBox");
photoBox.appendChild(fragment);

