@if(isset($popup))
{{-- <script> --}}
let styleRules = `
.popup-container {
position: fixed;
top: 0;
left:0;
z-index: 10000;
display: flex;
align-items: center;
justify-content: center;
width: 100vw;
height: 100vh;
}

.popup-container .template input{
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
box-sizing: border-box;
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
}.template .inner {
display: flex;
flex-flow: column;
justify-content: flex-start;
align-items: center;
width: 74%;
height: 91%;
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
width: 100%;
}.template .inner .input-field {
margin-top: 1rem;
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
}.template .inner .button {
position: absolute;
width: 80%;
margin-top: 1rem;
z-index: 10;
}.template .inner .button button {
border-radius: 12px;
background-color: #484848;
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
margin-top: 0.5rem;
z-index: 11;
}
@media only screen and (max-width: 600px) {
    .template {
        display: block;
        width: 290px;
        height: 290px;
    }.template .inner{
        width: 63%;
    height: 87%;
    }

    .template .inner .main-text {
        font-weight: bold;
        font-size: 0.9rem;
        transform: translateX(-18px);
    } .template .inner .input-field{
        transform: translateY(-19px) translateX(-3px);
    }
    .template .inner .sub-text{
        transform: translate(-50px, -90px);
    }
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

let star_top = "{{ isset($popup->star ) ? $popup->star->top : ''}}"
let star_left = "{{ isset($popup->star) ? $popup->star->left : ''}}"

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

// Inner container
let innerContainer = document.createElement('div');
// Add classlist
innerContainer.classList.add('inner');


// Stars container
let starsContainer = document.createElement('div')
// Add classlist
starsContainer.classList.add('stars')
starsContainer.style.top = star_top + 'px'
starsContainer.style.left = star_left + 'px'
// Adding Stars inside container
starsContainer.innerHTML = stars


// MainText container
let mainText = document.createElement('div')
// Add classlist
mainText.classList.add('main-text')
mainText.style.top = main_text_top + 'px'
mainText.style.left = main_text_left + 'px'
// Adding Stars inside container
let mainTextInnter = document.createElement('div')
mainTextInnter.innerHTML = main_text_content
mainText.appendChild(mainTextInnter)


let inputDiv = document.createElement('div')
// Add classlist
inputDiv.classList.add('input-field')
inputDiv.style.top = email_top + 'px'
inputDiv.style.left = email_left + 'px'
// Adding Stars inside container
let inputInner = document.createElement('input')
inputInner.setAttribute('placeholder', email_content)
inputDiv.appendChild(inputInner)


let buttonDiv = document.createElement('div')
// Add classlist
buttonDiv.classList.add('button')
buttonDiv.style.top = button_top + 'px'
buttonDiv.style.left = button_left + 'px'
// Adding Stars inside container
let buttonInner = document.createElement('button')
buttonInner.innerHTML = button_content
buttonDiv.innerHTML = button_content


let subText = document.createElement('div')
// Add classlist
buttonDiv.classList.add('sub-text')
buttonDiv.style.top = supporting_top + 'px'
buttonDiv.style.left = supporting_text_left + 'px'
buttonDiv.innerHTML = supporting_text_content

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

@else
console.log('An Error Occured')
@endif
