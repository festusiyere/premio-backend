@if(isset($popup))

var main_text_top = "{{ isset($popup->main_text ) ? $popup->main_text->top : ''}}"
var main_text_left = "{{ isset($popup->main_text) ? $popup->main_text->left : ''}}"
var main_text_content = "{{ isset($popup->main_text )? $popup->main_text->content : '' }}"

var email_top = "{{ isset($popup->email)? $popup->email->top : '' }}"
var email_left = "{{ isset($popup->email)? $popup->email->left : '' }}"
var email_content = "{{ isset($popup->email)? $popup->email->content : '' }}"

var button_top = "{{ isset($popup->button) ? $popup->button->top : '' }}"
var button_left = "{{ isset($popup->button)? $popup->button->left : '' }}"
var button_content = "{{ isset($popup->button) ? $popup->button->content : '' }}"

var supporting_top = "{{ isset($popup->supporting_text)? $popup->supporting_text->top : '' }}"
var supporting_text_left = "{{ isset($popup->supporting_text)? $popup->supporting_text->left : '' }}"
var supporting_text_content = "{{ isset($popup->supporting_text)? $popup->supporting_text->content : '' }}"

var background_color = "{{ isset($popup->background_color)?$popup->background_color  : '' }}"
var name = "{{ isset($popup->name)?$popup->name  : '' }}"

console.log(main_text_top,main_text_left,main_text_content,email_top,button_top,button_left,button_content,supporting_top,supporting_text_left,supporting_text_content,name)
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
             `
var popModualHeader = `
                margin:5px 10px;
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
                margin:5px 10px;
                height:350px;
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
popModalHeaderCloseBtn.addEventListener('click', function () {
    popModalElement.style.height = '0'
})
popBtnElement.addEventListener('click', function () {
    popModalElement.style.height = '400px'
})
console.log('yesss', background_color);
@else
console.log('An Error Occured')
@endif
