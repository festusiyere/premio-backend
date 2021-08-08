@if(isset($popup))
{{-- <script> --}}
    WebFontConfig = {
google: {
families: ['Noto Sans JP:300,400,500, 700']
}
};

(function(d) {
var wf = d.createElement('script'), s = d.scripts[0];
wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
wf.async = true;
s.parentNode.insertBefore(wf, s);
})(document);

// Function to convert pixel to percentage
function convertPixelToPercentage(value, relativeTo){
return (parseFloat(value) * 100) / parseFloat(relativeTo)
}
let styleRules = `
.popup-container {
font-family: "Noto Sans JP", sans-serif;
position: fixed;
top: 0;
left:0;
box-sizing: border-box;
z-index: 10000;
display: flex;
align-items: center;
justify-content: center;
width: 100vw;
height: 100vh;
}div.popup-container * {
box-sizing: border-box !important;
}.popup-container .template input{
all: unset;
height: 2.8rem;
border-radius: 4px;
border: 2px solid transparent;
width: 100%;
background-color: #f4f4f4;
font-weight: 500;
font-family: inherit;
color: inherit;
padding: 0.5rem 0.5rem;
border-radius: 10px;
border: none;
}
.template {
display: block;
width: 410px;
height: 400px;
border-radius: 50%;
padding: 10px;
background-color: #ff7c54;
position: relative;
}.template .close-button{
all: unset;
display: inline-flex;
align-items: center;
justify-content: center;
padding: 0.2rem;
position: absolute;
right: 0;
background-color: #efefef !important;
border: none;
border-radius: 50%;
cursor: pointer;
}.template .inner {
display: flex;
flex-flow: column;
justify-content: flex-start;
align-items: center;
width: 100%;
height: 100%;
border: 2px solid #fff;
border-radius: 50%;
padding: 1rem 3.2rem;
position: relative;
overflow: hidden;
}.template .inner .stars {
position: absolute;
z-index: 9;
}.template .inner .stars svg {
width: 30px;
height: 30px;
fill: rgba(0, 0, 0, 0.307);
stroke: none;
margin: 0.4rem;
}.template .inner .stars svg:nth-child(2) {
transform: translateY(-10px) scale(1.3);
}.template .inner .main-text {
font-weight: bold;
font-size: 1.4rem;
letter-spacing: 1.3px;
text-align: center;
color: #fff;
position: absolute;
width: 85%;
z-index: 10;
padding: 1rem;
}.template .inner .main-text div {
    line-height: 1.15;
width: 100%;
}.template .inner .input-field {
position: absolute;
width: 80%;
z-index: 8;
}.template .inner .input-field input {
border-radius: 10px;
border: none;
}.template .inner .input-field input::placeholder {
letter-spacing: 1.2px;
}.template .inner .input-field input:focus {
border: none;
}.template .inner .button-text {
position: absolute;
width: 80%;
z-index: 10;
}.template .inner .button-text button {
border-radius: 12px;
background-color: #484848;
border: none;
cursor: pointer;
width: 100%;
text-transform: uppercase;
letter-spacing: 1.3px;
font-weight: bold;
font-size: 1rem;
color: #fff;
height: auto;
padding: 1em 0.5em;
margin: 0;
}.template .inner .sub-text {
position: absolute;
font-size: 0.7rem;
letter-spacing: 1px;
color: #fff;
z-index: 11;
width: 80%;
text-align: center;
}.icon-tabler-close{
width: 15px;
height: 15px
}
@media only screen and (max-width: 768px) {
.template {
display: block;
width: 350px;
height: 340px;
padding: 7px;
}.template .inner{
padding: 1rem 1rem;
}
.template .inner .stars svg {
width: 23px;
height: 23px;}
.template .inner .main-text {
font-weight: bold;
font-size: 1.1rem;
}.template .inner .button-text button{
font-size: 0.85rem;
}.template .inner .input-field{
font-size: 0.85rem;
}.template .inner .sub-text{
width: 80%;
text-align: center;
}
}@media only screen and (max-width: 600px) {
.template {
display: block;
width: 300px;
height: 290px;
padding: 7px;
}.template .inner{
padding: 1rem 1rem;
}
.template .inner .stars svg {
width: 20px;
height: 20px;}
.template .inner .main-text {
font-weight: bold;
font-size: 1rem;
}.template .inner .button-text button{
font-size: 0.8rem;
}.template .inner .input-field{
font-size: 0.8rem;
}.template .inner .sub-text{
width: 75%;
text-align: center;
}
}


@-webkit-keyframes bounce-in-top {
0% {
-webkit-transform: translateY(-500px);
transform: translateY(-500px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
opacity: 0;
}
38% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
opacity: 1;
}
55% {
-webkit-transform: translateY(-65px);
transform: translateY(-65px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
}
72% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
}
81% {
-webkit-transform: translateY(-28px);
transform: translateY(-28px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
}
90% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
}
95% {
-webkit-transform: translateY(-8px);
transform: translateY(-8px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
}
100% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
}
}
@keyframes bounce-in-top {
0% {
-webkit-transform: translateY(-500px);
transform: translateY(-500px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
opacity: 0;
}
38% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
opacity: 1;
}
55% {
-webkit-transform: translateY(-65px);
transform: translateY(-65px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
}
72% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
}
81% {
-webkit-transform: translateY(-28px);
transform: translateY(-28px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
}
90% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
}
95% {
-webkit-transform: translateY(-8px);
transform: translateY(-8px);
-webkit-animation-timing-function: ease-in;
animation-timing-function: ease-in;
}
100% {
-webkit-transform: translateY(0);
transform: translateY(0);
-webkit-animation-timing-function: ease-out;
animation-timing-function: ease-out;
}
}

.bounce-in-top {
-webkit-animation: bounce-in-top 1.1s both;
animation: bounce-in-top 1.1s both;
}
`

let stars = `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="44" height="44"
    viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path
        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
</svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="44" height="44"
    viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path
        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
</svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="44" height="44"
    viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path
        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
</svg>`

let CloseSvg = `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-close" width="44" height="44"
    viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <line x1="18" y1="6" x2="6" y2="18" />
    <line x1="6" y1="6" x2="18" y2="18" />
</svg>`

let star_top = "{{ isset($popup->stars ) ? $popup->stars->top : ''}}"
let star_left = "{{ isset($popup->stars) ? $popup->stars->left : ''}}"

let main_text_top = "{{ isset($popup->main_text ) ? $popup->main_text->top : ''}}"
let main_text_left = "{{ isset($popup->main_text) ? $popup->main_text->left : ''}}"
let main_text_content = "{{ isset($popup->main_text )? $popup->main_text->content : '' }}"

let email_top = "{{ isset($popup->email)? $popup->email->top : '' }}"
let email_left = "{{ isset($popup->email)? $popup->email->left : '' }}"
let email_content = "{{ isset($popup->email)? $popup->email->content : '' }}"

let button_top = "{{ isset($popup->button) ? $popup->button->top : '' }}"
let button_left = "{{ isset($popup->button)? $popup->button->left : '' }}"
let button_content = "{{ isset($popup->button) ? $popup->button->content : '' }}"

let supporting_top = "{{ isset($popup->supporting_text)? $popup->supporting_text->top : '' }}"
let supporting_text_left = "{{ isset($popup->supporting_text)? $popup->supporting_text->left : '' }}"
let supporting_text_content = "{{ isset($popup->supporting_text)? $popup->supporting_text->content : '' }}"

let background_color = "{{ isset($popup->background_color)?$popup->background_color  : '' }}"
let name = "{{ isset($popup->name)?$popup->name  : '' }}"

let styleElement = document.createElement('style');

// Popup container
let popupContainer = document.createElement('div');
// Add classlist
popupContainer.classList.add('popup-container');

// Template container
let templateContainer = document.createElement('div');
// Add classlist
templateContainer.classList.add('template');
templateContainer.style.backgroundColor = background_color;

// Creating close button
let closeButton = document.createElement('button')
closeButton.classList.add('close-button')
closeButton.innerHTML = button_content
// Adding button inside container
closeButton.innerHTML = CloseSvg
templateContainer.appendChild(closeButton)

// Inner container
let innerContainer = document.createElement('div');
// Add classlist
innerContainer.classList.add('inner');


// Stars container
let starsContainer = document.createElement('div')
// Add classlist
starsContainer.classList.add('stars')
starsContainer.style.top = convertPixelToPercentage(star_top, 400) + '%'
starsContainer.style.left = convertPixelToPercentage(star_left, 410) + '%'
// Adding Stars inside container
starsContainer.innerHTML = stars


// MainText container
let mainText = document.createElement('div')
// Add classlist
mainText.classList.add('main-text')
mainText.style.top = convertPixelToPercentage(main_text_top, 400) + '%'
mainText.style.left = convertPixelToPercentage(main_text_left, 410) + '%'
// Creating text div container
let mainTextInnter = document.createElement('div')
mainTextInnter.innerHTML = main_text_content
// Adding div container inside main container
mainText.appendChild(mainTextInnter)


// Creating subtext container div
let inputDiv = document.createElement('div')
// Add classlist
inputDiv.classList.add('input-field')
inputDiv.style.top = convertPixelToPercentage(email_top, 400) + '%'
inputDiv.style.left = convertPixelToPercentage(email_left, 410) + '%'
// Creating input element
let inputInner = document.createElement('input')
// Setting the place holder attribute
inputInner.setAttribute('placeholder', email_content)
// Adding input inside main container
inputDiv.appendChild(inputInner)


// Creating container div
let buttonDiv = document.createElement('div')
// Add classlist
buttonDiv.classList.add('button-text')
buttonDiv.style.top = convertPixelToPercentage(button_top, 400) + '%'
buttonDiv.style.left = convertPixelToPercentage(button_left, 410) + '%'
// Creating button
let buttonInner = document.createElement('button')
buttonInner.innerHTML = button_content
// Adding button inside container
buttonDiv.appendChild(buttonInner)


// Creating subtext container div
let subText = document.createElement('div')
// Add classlist
subText.classList.add('sub-text')
subText.style.top = convertPixelToPercentage(supporting_top, 400) + '%'
subText.style.left = convertPixelToPercentage(supporting_text_left, 410) + '%'
// Adding text content
subText.innerHTML = supporting_text_content

innerContainer.appendChild(starsContainer)
innerContainer.appendChild(mainText)
innerContainer.appendChild(inputDiv)
innerContainer.appendChild(buttonDiv)
innerContainer.appendChild(subText)

// Appending Inner to template container
templateContainer.appendChild(innerContainer)

// Appending Template to container
popupContainer.appendChild(templateContainer)

// Styling
styleElement.innerHTML = styleRules
// Adding Style to dom
document.getElementsByTagName("head")[0].appendChild(styleElement);

// Adding Template container to Dom
document.body.appendChild(popupContainer);

// Adding animation class
document.querySelector('.popup-container .template').classList.add('bounce-in-top')
document.querySelector('.popup-container .template .close-button').addEventListener('click', function(ev) {
    document.querySelector('.popup-container').style.display = 'none'
})
@else
console.log('An Error Occured')
@endif
