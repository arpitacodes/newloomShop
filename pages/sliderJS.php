<div class="outer-wrapper">
	  <h1>Demo 1</h1>
  <div class="s-wrap s-type-1" role="slider">
    <input type="radio" id="s-1" name="slider-control" checked="checked">
    <input type="radio" id="s-2" name="slider-control">
    <input type="radio" id="s-3" name="slider-control">
    <input type="radio" id="s-4" name="slider-control">
    <input type="radio" id="s-5" name="slider-control">
    <ul class="s-content">
      <li class="s-item s-item-1"></li>
      <li class="s-item s-item-2"></li>
      <li class="s-item s-item-3"></li>
      <li class="s-item s-item-4"></li>
      <li class="s-item s-item-5"></li>
    </ul>
    <div class="s-control">
      <label class="s-c-1" for="s-1"></label>
      <label class="s-c-2" for="s-2"></label>
      <label class="s-c-3" for="s-3"></label>
      <label class="s-c-4" for="s-4"></label>
      <label class="s-c-5" for="s-5"></label>
    </div>
    <div class="s-nav">
      <label class="s-nav-1 right" for="s-2"></label>
      <label class="s-nav-2 left" for="s-1"></label>
      <label class="s-nav-2 right" for="s-3"></label>
      <label class="s-nav-3 left" for="s-2"></label>
      <label class="s-nav-3 right" for="s-4"></label>
      <label class="s-nav-4 left" for="s-3"></label>
      <label class="s-nav-4 right" for="s-5"></label>
      <label class="s-nav-5 left" for="s-4"></label>
    </div>
  </div>

  <h1>Demo 2</h1>
  <p>hover would pause the animation</p>
  <div class="s-wrap s-type-2" role="slider">
    <ul class="s-content">
      <li class="s-item s-item-1"></li>
      <li class="s-item s-item-2"></li>
      <li class="s-item s-item-3"></li>
      <li class="s-item s-item-4"></li>
      <li class="s-item s-item-5"></li>
    </ul>
  </div>
  
  <h1>Demo 3</h1>
  <p>Using JS</p>
  <div class="s-wrap s-type-3">
    <ul class="s-content" data-index="1">
      <li class="s-item s-item-1"></li>
      <li class="s-item s-item-2"></li>
      <li class="s-item s-item-3"></li>
      <li class="s-item s-item-4"></li>
      <li class="s-item s-item-5"></li>
    </ul>
    <div class="left-control"></div>
    <div class="right-control"></div>
  </div>
</div>

<script>
	/* Responsive CSS slider */

let sliderUL = document.querySelector('.s-type-3 > .s-content');
let sliderLength = sliderUL.childElementCount;
let leftControl = document.querySelector('.s-type-3 .left-control');
let rightControl = document.querySelector('.s-type-3 .right-control');
let getCurrentIndex = () => Number(sliderUL.getAttribute('data-index'));
let setCurrentIndex = index => {
  console.log(index);
  sliderUL.setAttribute('data-index', index);
  sliderUL.style = `transform: translateX(-${(index - 1) * (100 / sliderLength)}%)`
}
let onControlClick = (direction) => {
  let index = getCurrentIndex();
  index = direction === 'left'
    ? (index === 1 ? sliderLength : index - 1)
    : (index === sliderLength ? 1 : index + 1)
  setCurrentIndex(index);
}

leftControl.addEventListener('click', () => onControlClick('left'));

rightControl.addEventListener('click', () => onControlClick('right'));
</script>