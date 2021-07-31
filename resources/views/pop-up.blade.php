var elem = document.createElement('div');

elem.style.cssText = 'position:absolute;right:10px;bottom:20px;width:100px;height:50px;z-index:100;background:green';

document.body.appendChild(elem);

elem.addEventListener('click', function () {
    alert('pop')
})
console.log('{{$data}}')