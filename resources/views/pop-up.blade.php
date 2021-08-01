var main_text_top = "{{ $popUpData['mainText']['top'] }}"
var main_text_left = "{{ $popUpData['mainText']['left'] }}"
var main_text_content = "{{ $popUpData['mainText']['content'] }}"

var email_top = "{{ $popUpData['email']['top'] }}"
var email_left = "{{ $popUpData['email']['left'] }}"
var email_content = "{{ $popUpData['email']['content'] }}"

var button_top = "{{ $popUpData['button']['top'] }}"
var button_left = "{{ $popUpData['button']['left'] }}"
var button_content = "{{ $popUpData['button']['content'] }}"

var supporting_top = "{{ $popUpData['supportingText']['top'] }}"
var supporting_text_left = "{{ $popUpData['supportingText']['left'] }}"
var supporting_text_content = "{{ $popUpData['supportingText']['content'] }}"

var background_color = "{{ $popup['background-color'] }}"



popBtn = `position:fixed;
          right:10px;
          bottom:20px;
          width:80px;
          height:38px;
          z-index:10;
          background:green;
          cursor:pointer;
          color:white;
          display:flex;
          align-items:Center;
          justify-content:center;
          text-align:center
          border-radius:10px`;

popModual = `transition:all 0.3s ease-in-out;
             position : fixed;
             right:10px;
             bottom:20px;
             z-index:10; 
             width:300px;
             height:0
             background:lightgreen`


var popBtnElement = document.createElement('div');
var popModalElement = document.createElement('div');

popBtnElement.classList.add('pop-up-botton');
popModalElement.classList.add('pop-up-modal');

popBtnElement.setAttribute('style' , popBtn)
popModalElement.setAttribute('style' , popModual)


popBtnElement.innerHTML = 'Click me'


document.body.appendChild(popBtnElement);
document.body.appendChild(popModalElement);

popBtnElement.addEventListener('click', function () {
popModalElement.style.height = '400px'
})
console.log('yesss');
