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



// Get HTML head element
var head = document.getElementsByTagName('HEAD')[0]; 

// Create new link Element
var link = document.createElement('link');

// set the attributes for link element 
link.rel = 'stylesheet'; 

link.type = 'text/css';

link.href = '/asset/style.css'; 

// Append link element to HTML head










var elem = document.createElement('div');
elem.classList.addClass = 'pop-up-botton';
document.body.appendChild(elem);
elem.addEventListener('click', function () {
    alert('pop')
})
console.log("")