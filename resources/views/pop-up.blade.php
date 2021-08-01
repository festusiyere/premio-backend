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



var popBtn = `position:fixed;
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
          text-align:center;
          border-radius:10px`;

var popModual = ` 
            box-sizing: border-box;
            transition:all 0.3s ease-in-out;
             position : fixed;
             right:10px;
             bottom:20px;
             z-index:10; 
             width:300px;
             background:lightgreen;
             height:0;
             overflow:hidden;
             padding:10px;
             `
var popModualHeader = `
                box-sizing: border-box;
                height:40px;
                width:100%;
                display:flex;
                align-item:center;
                justify-content:flex-end;
                font-weight:900;
                `
var popModualHeaderCloseBtn = `
                width:20px; 
                height:20px;
                background:red;
                `

var popModualBody = `
                height:360px;
                width:100%;
                border:1px solid white;
                `
var popBtnElement = document.createElement('div');
var popModalElement = document.createElement('div');
var popModalHeader = document.createElement('div');
var popModalHeaderCloseBtn = document.createElement('div');

var popModalBody = document.createElement('div');

popBtnElement.classList.add('pop-up-botton');
popModalElement.classList.add('pop-up-modal');
popModalHeader.classList.add('pop-up-modal-header');
popModalBody.classList.add('pop-up-modal-header');


popBtnElement.setAttribute('style' , popBtn)
popModalElement.setAttribute('style' , popModual)
popModalHeader.setAttribute('style' , popModualHeader)
popModalHeaderCloseBtn.setAttribute('style' , popModualHeaderCloseBtn)
popModalBody.setAttribute('style' , popModualBody)

popBtnElement.innerHTML = 'Click me'


popModalHeader.appendChild(popModalHeaderCloseBtn)
popModalElement.appendChild(popModalHeader)
popModalElement.appendChild(popModalBody)


document.body.appendChild(popBtnElement);
document.body.appendChild(popModalElement);

popBtnElement.addEventListener('click', function () {
popModalElement.style.height = '400px'
})
console.log('yesss');
