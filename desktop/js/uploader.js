(function() {
var dropzone = document.getElementById("dropzone");
dropzone.ondrop = function(e) {
this.className = 'dropzone';
this.innerHTML = 'Перетащите файл сюда';
e.preventDefault();
upload(e.dataTransfer.files);
};
var displayUploads = function(data) {
var uploads = document.getElementById("uploads"),
anchor,
x;
for(x = 0; x < data.length; x++) {
anchor = document.createElement('h5');
anchor.innerHTML = data[x].name + " - <a href='http://whcsgohack.ru/test/document/profileUser/uploads/"+ data[x].name +" download'>Ссылка</a>";
uploads.appendChild(anchor);
}
};
var upload = function(files) {
var formData = new FormData(),
xhr = new XMLHttpRequest(),
x;
for(x = 0; x < files.length; x++) {
	if(files.length > 1){
		alert("За один раз можно загрузить только 1 файл");
		break;
	}
formData.append('file[]', files[x]);
}
xhr.onload = function() {
var data = JSON.parse(this.responseText);
displayUploads(data);
};
xhr.open('post', 'upload.php');
xhr.send(formData);
};
dropzone.ondragover = function() {
this.className = 'dropzone dragover';
this.innerHTML = 'Отпустите мышку';
return false;
};
dropzone.ondragleave = function() {
this.className = 'dropzone';
this.innerHTML = 'Перетащите файл сюда';
return false;
};
}());