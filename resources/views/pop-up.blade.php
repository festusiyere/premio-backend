var main_text_top = "{{$popUpData['mainText']['top']}}"
var main_text_left = "{{$popUpData['mainText']['left']}}"
var main_text_content = "{{$popUpData['mainText']['content']}}"

var email_top = "{{$popUpData['email']['top']}}"
var email_left = "{{$popUpData['email']['left']}}"
var email_content = "{{$popUpData['email']['content']}}"

var button_top = "{{$popUpData['button']['top']}}"
var button_left = "{{$popUpData['button']['left']}}"
var button_content = "{{$popUpData['button']['content']}}"

var supporting_top = "{{$popUpData['supportingText']['top']}}"
var supporting_text_left = "{{$popUpData['supportingText']['left']}}"
var supporting_text_content = "{{$popUpData['supportingText']['content']}}"

var background_color = "{{$popup['background-color']}}"










//add element to dom
var elem = document.createElement('div');
elem.classList.add('pop-up-botton');
document.body.appendChild(elem);
elem.addEventListener('click', function () {
    alert('pop')
})
console.log("main_text_top")


//add style sheet
var head = document.getElementsByTagName('HEAD')[0]; 
var link = document.createElement('link');
link.rel = 'stylesheet'; 
link.type = 'text/css';
link.href = '/asset/style.css'; 
head.appendChild(link); 