let textArea = document.getElementById("postContent");

sceditor.create(textArea, {
	format: 'bbcode',
	style: 'js/minified/themes/content/default.min.css',
    width: '100%',
    resizeEnabled: "false"
});