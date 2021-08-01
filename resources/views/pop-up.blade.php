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



popBtn = 'position:absolute;right:10px;bottom:20px;width:100px;height:50px;z-index:100;background:green';

var elem = document.createElement('div');

            elem.classList.add('pop-up-botton');

            elem.setAttribute('style' , popBtn)

            document.body.appendChild(elem);

            elem.addEventListener('click', function () {

             alert('pop')
})
console.log('yesss');